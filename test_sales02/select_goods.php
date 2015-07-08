<?php
$USER = 'mizoe';
$PW = 'May.2015';
$dnsinfo = "mysql:dbname=i500;host=sv1;charset=utf8";
$res = "";
if(isset($_POST['select'])){
	try{
		$pdo = new PDO($dnsinfo, $USER, $PW);
		$sql = "SELECT * from goods where GoodsID=?";
		$stmt = $pdo->prepare($sql);
		if($stmt->execute(array($_POST['GoodsID']))){
			$res = "<table border=1><tr><th>GoodsID</th><th>GoodsName</th><th>Price</th></tr>";
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$res .= "<tr><td>" .
						$row['GoodsID'] 	. "</td><td>" . 
						$row['GoodsName'] 	. "</td><td>" . 
						$row['Price']		. "</td></tr>\n";
			}
			$res .= "</table>";
		}
	}catch(PDOException $e){
		$res .= $e->getMessage();
		// ID passが違うとき
		// SQLSTATE[HY000] [1045] Access denied for user ''@'SV1' (using password: NO)
	}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>始めようphp</title>
</head>

<body>

<h1>商品マスタの選択</h1>
<form action="" method="post">
<label>GoodsID<input type="text" name="GoodsID" size="20" required></label>
<input type="submit" name="select" value="表示">
</form>


<?php 
echo $res; 
?>
</body>
</html>
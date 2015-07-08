<?php
$USER = 'mizoe';
$PW = 'May.2015';
$dnsinfo = "mysql:dbname=i500;host=sv1;charset=utf8";
$res = "";
if(isset($_POST['insert'])){
	try{
		$dnsinfo = "mysql:dbname=i500;host=sv1;charset=utf8";
		$pdo = new PDO($dnsinfo, $USER, $PW);
		$sql = "INSERT INTO goods VALUES(?,?,?)";
		$stmt = $pdo->prepare($sql);
		$res = $stmt->execute(
			array(	$_POST['GoodsID'],
					$_POST['GoodsName'],
					$_POST['Price']
			)
		);
		
		$sql = "SELECT * from goods";
		$stmt = $pdo->prepare($sql);
		if($stmt->execute(null)){
			$res = "<table border=1><tr><th>GoodsID</th><th>GoodsName</th><th>Price</th></tr>";
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$res .= "<tr><td>" .
						$row['GoodsID'] 	. "</td><td>" . 
						$row['GoodsName'] 	. "</td><td>" . 
						$row['Price']		. "</td></tr>\n";
			}
			$res .= "</table>";
		}

		//$res .= "接続しました:" . $USER . "<BR>";
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
<title>売り上げ管理システム</title>
</head>

<body>
<h1>商品マスタの登録</h1>
<form action="" method="post">
<label>GoodsID<input type="text" name="GoodsID" size="20" required></label>
<label>GoodsName<input type="text" name="GoodsName" size="40" required></label>
<label>Price<input type="text" name="Price" size="20" required></label>
<input type="submit" name="insert" value="登録">
</form>

<?php 
echo $res; 
?>
</body>
</html>
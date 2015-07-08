<?php
$USER = 'mizoe';
$PW = 'May.2015';
$dnsinfo = "mysql:dbname=i500;host=sv1;charset=utf8";
$res = "";
try{
	$dnsinfo = "mysql:dbname=i500;host=sv1;charset=utf8";
	$pdo = new PDO($dnsinfo, $USER, $PW);
	$sql = "SELECT * from goods WHERE GoodsID=?";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(array('1003'));
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		$res .= $row['GoodsID'] 	. "," . 
				$row['GoodsName'] 	. "," . 
				$row['Price']		. "<BR>\n";
	}
}catch(PDOException $e){
	$res .= $e->getMessage();
	// ID passが違うとき
	// SQLSTATE[HY000] [1045] Access denied for user ''@'SV1' (using password: NO)
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>始めようphp</title>
</head>

<body>

<h1>PHPでMySQLに接続する</h1>
<?php 
echo $res; 
?>
</body>
</html>
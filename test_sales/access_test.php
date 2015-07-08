<?php
$USER = 'i501';
$PW = 'May.2015';
$dnsinfo = "mysql:dbname=i501;host=sv1;charset=utf8";
$res = "";
try{
	for($i=1;$i<=20;$i++){
		$USER_ID = 500+$i;
		$USER = "i" . $USER_ID;
		$dnsinfo = "mysql:dbname=i" . $USER_ID . ";host=sv1;charset=utf8";

		$pdo = new PDO($dnsinfo, $USER, $PW);
		$res .= "接続しました:" . $USER . "<BR>";
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
<?php echo $res; ?>
</body>
</html>
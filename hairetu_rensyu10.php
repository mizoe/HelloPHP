<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>

<?php

$score["鈴木"] = 92;
$score["佐藤"] = 74;
$score["中村"] = 42;
$score["三浦"] = 65;

$sum = 0;
foreach($score as $k => $v){
	$grade = "不可";
	if($v >= 80){
		$grade = "優";
	}elseif($v >= 70){
		$grade = "良";
	}elseif($v >= 60){
		$grade = "可";
	}
	print "氏名:" . $k . " 点数:" . $v . " 評価:" . $grade . "<br>";
	$sum += $v;
}

?>

</body>
</html>





















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
	print "氏名:" . $k . " 点数:" . $v . "<br>";
	$sum += $v;
}

print "合計点:" . $sum . "<br>";
print "平均点:" . floor($sum / count($score) * 10) / 10 . "<br>";
printf("平均点:%.1f", $sum / count($score)); 

?>

</body>
</html>





















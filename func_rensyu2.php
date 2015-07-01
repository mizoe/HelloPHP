<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>

<?php

function getSum($arr){
	return array_sum($arr);
}


function getStats($arr){
	$sum = getSum($arr);
	$ave = $sum / count($arr);
	return array($sum, $ave);
}

$kokugo = array(52, 69, 74, 95,41);
$result = getStats($kokugo);

print "合計点:" . $result[0] . "<BR>";
print "平均点:" . $result[1];

?>

</body>
</html>
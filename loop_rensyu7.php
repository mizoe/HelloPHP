<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php

for($i = 1; $i <= 5; $i++){
	print "0";
	
	$sum = 0;

/*	for($j = 1; $j == $i; $j++){
		print "+" . $i;
		$sum += $j;
	}
*/

	for($j = 1; $j <= $i; $j++){
		print "+" . $j;
		$sum += $j;
	}
	
	print "=" . $sum . "<br>";
}

?>
</body>
</html>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>

<?php

$sum = 0;

for($i = 0; $i <=100; $i++){
	if($i % 4 == 0){
		$sum = $sum + $i;
	}
}

print "合計は" . $sum;

?>

</body>
</html>
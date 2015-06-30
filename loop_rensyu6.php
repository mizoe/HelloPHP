<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php

for($i = 1; $i <= 40; $i++){
	print $i;

	if($i % 3 == 0 || substr($i, 0, 1) == 3 || substr($i, 1, 1) == 3 ){
		print " YES!";
	}

	if($i % 8 == 0 || substr($i, 0, 1) == 8 || substr($i, 1, 1) == 8 ){
		print " OK!";
	}
	
	print "<br>";
}

?>
</body>
</html>
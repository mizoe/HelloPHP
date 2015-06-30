<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>

<table border="1">
<?php

for($i = 1; $i <=9; $i++){
	echo "<tr>";
	
	for($j = 1; $j <=9; $j++){
		echo "<td>";
		echo $i * $j;
		echo "</td>";
	}
	
	echo "</tr>";
}

?>

</table>

</body>
</html>
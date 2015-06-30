<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>

<table border="1">
<tr>
<th style="background-color:yellow">カウント</th>
<th style="background-color:yellow">合計</th>
</tr>
<?php

$sum = 0;
for($i = 1; $i <=10; $i++){
	$sum += $i;

	$bgColor = "#fcfcfc";
	if($i % 2 == 0){
		$bgColor = "#cfcfcf";
	}

	echo '<tr style="background-color:' . $bgColor . '"><td>';
	echo $i;
	echo "</td>";
	echo "<td>";
	echo $sum;
	echo "</td></tr>";
}


?>

</table>

</body>
</html>








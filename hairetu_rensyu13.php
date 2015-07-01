<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>

<table border="1">
  <tr style="background-color:yellow">
    <th>都市名	</th>
    <th>最高気温</th>
    <th>最低気温</th>
  </tr>


<?php

$t = array(
	array("東京", 	32, 25),
	array("名古屋", 28, 21),
	array("大阪", 	27, 20),
	array("京都", 	26, 19),
	array("福岡", 	27, 22)
);

foreach($t as $city){
	print "<tr>";
	foreach($city as $v){
		print "<td>" . $v ."</td>";
	}
	print "</tr>";
}


?>
</table>


</body>
</html>
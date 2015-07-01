<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>

<table border="1">
  <tr>
    <th>番号</th>
    <th>名前</th>
    <th>点数</th>
  </tr>
<?php
$score = array(
	array("鈴木0",80),
	array("鈴木1",60),
	array("鈴木2",92),
	array("鈴木3",22),
	array("鈴木4",50)
);
$max = 0;
$min = 100;
$sum = 0;
$over70 = 0;

foreach($score as $k => $arr){
	$name = $arr[0];
	$v 	  = $arr[1];
	print "<tr><td>" . $k . "</td><td>" . $name . "</td><td>" . $v ."</td></tr>";
	if($max < $v){
		$max = $v;
	}
	if($min > $v){
		$min = $v;
	}
	if($v >= 70){
		$over70 ++;
	}
	$sum += $v;
}

?>
</table>
<p>最高点:<?php print $max; ?>点
</p>
<p>最低点:<?php print $min; ?>点
</p>
<p>平均点:<?php print ($sum) / count($score); ?>点
</p>
<p>70点以上:<?php print $over70; ?>名
</p>

</body>
</html>
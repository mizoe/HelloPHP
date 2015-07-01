<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>

<?php

$city[] = "青森";
$city[] = "弘前";
$city[] = "八戸";

print_r($city);
print "<BR>";

$city2 = array("青森", "弘前","八戸");

print_r($city2);
print "<BR>";

$city2[4] = "むつ";
print_r($city2);
print "<BR>要素数:";
print count($city2);

print "<BR>";
$city2[3] = "三沢";
print_r($city2);

print "<BR><BR>";

for($i = 0; $i < count($city2); $i++){
	print $city2[$i] . "<br>";
}

print "<BR><BR>";

$f["オレンジ"] = 25;
$f["バナナ"]   = 30;
$f["りんご"]   = 38;
$f["みかん"]   = 62;

print_r($f);
print "<BR><BR>";

$g = array(	"オレンジ" => 25,
			"バナナ"   => 30,
			"りんご"   => 38,
			"みかん"   => 62);
print_r($g);
print "<BR><BR>";

foreach($g as $k => $v){
	print "キー：";
	print $k;
	print " 要素：";
	print $v;
	print "<BR>";
}



?>

</body>
</html>





















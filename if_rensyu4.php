<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php

$money = 10000000000;

if($money <= 0){
	echo "貯金がありません";
}elseif($money <= 1000){
	echo "貯金がわずかです";
}else{
	echo "貯金がございます";
}


?>
</body>
</html>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>

<?php

function sayHello($name = "ゲスト"){
	print "いらっしゃいませ、" . $name . "さん<br>";
}

sayHello("すずき");
sayHello();
?>

</body>
</html>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>

<?php

$food = array( 'vegi' => '人参', 'fish' => 'さんま', 'meat' => '牛肉');
print_r($food); //並び替え前
print "<br>";
sort($food);
print_r($food); //並び替え後

?>

</body>
</html>





















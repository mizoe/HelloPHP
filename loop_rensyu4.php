<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>

<select name="example">
<?php

for($i = 15; $i <= 23; $i++){
	print '<option value="' . $i . '">' . $i .'</option>';
}

?>
</select>
<span>時</span>


</body>
</html>
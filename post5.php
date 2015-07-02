<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php
if(array_key_exists("my_name", $_POST)){
  process_form();
} else{
  show_form();
}
function process_form(){
  print "Hello, ".$_POST["my_name"];
}
function show_form(){
  print <<<_HTML
<form method="post" action="$_SERVER[PHP_SELF]">
氏名：<input type="text" name="my_name">
<br>
<input type="submit">
</form>
_HTML;
}
?>

</body>
</html>
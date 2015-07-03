<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php
$fm = array("c", "y/m/d", "D", "F", "h:i:s");
?>
<table border="1">
<tr><th>指定</th><th>日時</th></tr>
<?php
foreach($fm as $value){
  print "<tr>";
  print"<td>{$value}</td><td>".date($value)."</td>";
  print "</tr>";
}
?>

</body>
</html>

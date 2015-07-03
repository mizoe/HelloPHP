<html>
<head><title>ディレクトリ情報</title></head>
<body>
<table border="1">
<tr bgcolor="yellow">
  <th>名前</th>
  <th>最終アクセス時刻</th>
  <th>最終修正時間</th>
  <th>作成時刻</th>
  <th>サイズ</th>
</tr>
<?php
$curdir = opendir("."); //ディレクトリ情報にアクセス
while($name = readdir($curdir)){ //ディレクトリ名・ファイル名を１つ読み込み
  $status = stat($name);
  print "<tr>";
  print "<td>".$name."</td>";
  print "<td>".date("Y/m/d h:i:s", $status["atime"])."</td>";
  print "<td>".date("Y/m/d h:i:s", $status["mtime"])."</td>";
  print "<td>".date("Y/m/d h:i:s", $status["ctime"])."</td>";
  print "<td>".$status["size"]."</td>";
  print "</tr>";
}
closedir($curdir);
?>
</table>
</body>
</html>
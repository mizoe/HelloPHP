<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php
$count = 1;
$sum = 0;
while ($count <= 100){
  $sum += $count;
  if ($sum > 1000){
    print '1000を越えたので count = '.$count.' で終了します';
    break;
  }
  $count += 1;
}
// breakが実行された時に処理が移る位置
print 'sum = '.$sum; 
?>


</body>
</html>
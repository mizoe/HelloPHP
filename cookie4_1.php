<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>

<?php
if($_POST["name"] == "root" && $_POST["pass"] == "1234"){
  $msg = "ログインしました<br>";
  //次回からのID入力を省略するにチェックがあったら、クッキーをセット
  if(isset($_POST["ck"]) && $_POST["ck"] == "on"){
    //有効期限1時間でクッキーをセット
    setcookie("name", $_POST['name'], time()+60*60);
    setcookie("pass", $_POST['pass'], time()+60*60);
	setcookie("ck",   $_POST['ck'],   time()+60*60);
  }
} else{
  $msg = "ユーザー名またはパスワードが間違っています。<br>";
  setcookie("name", "");
  setcookie("pass", "");
}
?>

<h1>会員ページ１</h1>
<hr>
<?php print $msg; ?>
<a href="cookie4_0.php">ログインページに戻る</a>


</body>
</html>
<html>
<head><title>テスト</title></head>
<body>
<form method="post" action="cookie4_1.php">
ユーザー名：<input type="text" name="name"
 value="<?php if(isset($_COOKIE["name"])) print $_COOKIE["name"]; ?>">
<br>
パスワード：<input type="password" name="pass"
 value="<?php if(isset($_COOKIE["pass"])) print $_COOKIE["pass"]; ?>">
<br>
<input type="checkbox" name="ck" value="on">次回からのID入力を省略
<br>
<input type="submit" value="送信">
</body>
</html> 

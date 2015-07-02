<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>

<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

$msg = "";

if($user == "admin" && $pass == 1234){
	$msg = "ログインOK";
}else{
	if(empty($user)){
		$msg = "ユーザ名に何も入力されていません<br>";
	}
	if(empty($pass)){
		$msg = "パスワードに何も入力されていません<br>";
	}
	$msg .= "ユーザ名またはパスワードが違います";
}

print $msg;
?>

</body>
</html>

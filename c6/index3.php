<?php
require_once('func.php');
$res = "";
if(isset($_POST['submit'])){
	$res = JudgeEvenOdd($_POST['num']);
}
?>


<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php print_r($_POST); ?>

<h1>初めてのクラス</h1>
<form method="post" action="">
<label>数字を入力<input type="text" name="num" required></label>
<input type="submit" value="判定" name="submit">
</form>

<?php echo $res; ?>
</body>
</html>
<?php
require_once('DBGoods.php');
$dbgoods = new DBGoods();

if(isset($_POST['insert'])){
	$dbgoods->InsertGoods();
}

$recordlist = $dbgoods->SelectGoodsAll();

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<h1>goodsマスターテーブル</h1>

<form action="" method="post">
<label>GoodsID<input type="text" name="GoodsID" size="5" required></label>
<label>GoodsName<input type="text" name="GoodsName" size="10" required></label>
<label>Price<input type="text" name="Price" size="5" required></label>
<input type="submit" name="insert" value="登録">
</form>

<hr>

<?php echo $recordlist; ?>
</body>
</html>
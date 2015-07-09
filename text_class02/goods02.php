<?php
require_once('db.php');
$db = new DB();

if(isset($_POST['insert'])){
	$sql = "INSERT INTO goods VALUES(?,?,?)";
	$db->executeSQL(
		$sql,
		array(	$_POST['GoodsID'],
				$_POST['GoodsName'],
				$_POST['Price']
		)
	);
}

$sql = "SELECT * FROM goods";
$res = $db->executeSQL($sql, null);

$recordlist = "<table border=1><tr><th>GoodsID</th><th>GoodsName</th><th>Price</th></tr>";
while($row = $res->fetch(PDO::FETCH_ASSOC)){
	$recordlist .= <<<END_OF_TR
	<tr>
	<td>{$row['GoodsID']}	</td>
	<td>{$row['GoodsName']} </td>
	<td>{$row['Price']}		</td>
	</tr>
END_OF_TR;
}
$recordlist .= "</table>";

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
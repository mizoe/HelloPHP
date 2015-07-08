<?php
$USER = 'mizoe';
$PW = 'May.2015';
$dnsinfo = "mysql:dbname=i500;host=sv1;charset=utf8";
$res = "";
$selectTag = "";
$GoodsName = "";
$GoodsID = "";
$Price = "";
$pdo = new PDO($dnsinfo, $USER, $PW);

//任意のレコードの更新ボタン クリック時の処理
if(isset($_POST['update'])){
	try{
		$sql = "SELECT * FROM goods WHERE GoodsID=?";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array($_POST['id']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$GoodsName	= $row['GoodsName'];
		$GoodsID 	= $row['GoodsID'];
		$Price	 	= $row['Price'];
	}catch(Exception $e){
		$res = $e->getMessage();
	}
}

//全レコードを表示
try{
	$sql = "SELECT * from goods";
	$stmt = $pdo->prepare($sql);
	if($stmt->execute(null)){
		$res = "<table border=1><tr><th>GoodsID</th><th>GoodsName</th><th>Price</th><th> </th></tr>";
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$res .= <<<END_OF_TR
<tr>
<td>{$row['GoodsID']}	</td>
<td>{$row['GoodsName']} </td>
<td>{$row['Price']}		</td>
<td><form method="post" action="">
<input type="hidden" name="id" 		value="{$row['GoodsID']}">
<input type="submit" name="update" 	value="更新">
</form>
</td>
</tr>
END_OF_TR;
		}
		$res .= "</table>";
	}
}catch(PDOException $e){
	$res .= $e->getMessage();
	// ID passが違うとき
	// SQLSTATE[HY000] [1045] Access denied for user ''@'SV1' (using password: NO)
}

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>始めようphp</title>
</head>

<body>

<h1>商品マスタの更新</h1>

<?php if(isset($_POST['update'])){ ?>
<form action="" method="post">
<p>GoodsID: <?php echo $GoodsID; ?></p>
<label>GoodsName<input type="text" name="GoodsName" size="20" 
	value="<?php echo $GoodsName; ?>" required></label>
<label>Price<input type="text" name="Price" size="6" 
	value="<?php echo $Price; ?>" required></label>
<input type="submit" name="submit" value="登録">
</form>

<?php 
}
echo $res; 
?>
</body>
</html>
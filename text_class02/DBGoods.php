<?php
require_once('db.php');

class DBGoods extends DB{
	
	public function InsertGoods(){
		$sql = "INSERT INTO goods VALUES(?,?,?)";
		parent::executeSQL(
			$sql,
			array(	$_POST['GoodsID'],
					$_POST['GoodsName'],
					$_POST['Price']
			)
		);
	}
	
	public function SelectGoodsAll(){
		$sql = "SELECT * FROM goods";
		$res = parent::executeSQL($sql, null);
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
		return $recordlist;
	}
}
?>
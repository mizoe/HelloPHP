<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php

$stock = 4;
switch($stock){
	case 0:
		echo "在庫がありません";
		break;
	case 1:
	case 2:
	case 3:
		echo "在庫がわずかです";
		break;
	default:
		echo "在庫がございます";
		break;
}

?>
</body>
</html>












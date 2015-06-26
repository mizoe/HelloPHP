<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php

$month = 3;

switch ($month){
	case 3:
	case 4:
	case 5:
	  echo "春です";
	  break;
	case 6:
	case 7:
	case 8:
	  echo "夏です";
	  break;
	case 9:
	case 10:
	case 11:
	  echo "秋です";
	  break;
	case 12:
	case 1:
	case 2:
	  echo "冬です";
	  break;
}

?>
</body>
</html>
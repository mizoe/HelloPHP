<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>

<?php

$rawdata = array();
$price = array();

// ---- モデル(Model) --- csv ファイルを開く

$fp = fopen("sales.csv", "r"); //指定されたファイルをオープンする

// ---- モデル(Model) --- 1行ずつ取り出す
// ---- モデル(Model) --- EOFまで繰り返す
// ---- モデル(Model) --- （ディレクトリ情報を読み込む）

while(!feof($fp)){ //ファイルの終端に達するまでループする
	$rawdata[] = fgetcsv($fp); //ファイルの中身を１行ずつ取り出して表示
}

// ---- コントローラ(Controller) --- 商品ごとの売り上げを計算する

/*
foreach($rawdata as $line){
	while (($data = explode(",", $line)) !== FALSE) {
        for ($c=0; $c < 2; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
}
*/

foreach($rawdata as $line){
	if(!isset($price[$line[0]])){
		$price[$line[0]] = 0;
	}
	$price[$line[0]] += $line[1];
}


// ---- ビュー(View) --- 加工後の行を表示する
/*
foreach($rawdata as $line){
	print_r($line);
	print "<BR>";
}
*/
foreach($price as $k => $v){
	print "商品" . $k . "合計：" . $v;
	print "<BR>";
}

// ---- モデル(Model) --- 開いたファイルを閉じる
fclose($fp); //ファイルをクローズする

?>

</body>
</html>
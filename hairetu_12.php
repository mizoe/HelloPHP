<?php
$kokugo = array('鈴木' => 92, '佐藤' => 74, '中村' => 42, '三浦' => 65);
print "ソート前<br>";
foreach($kokugo as $key => $val){
	print "キー：".$key."　要素".$val."<br>";
}

//ソート後
print "ソート後<br>";
asort($kokugo);
foreach($kokugo as $key2 => $val2){
	print "キー：".$key2."　要素".$val2."<br>";
}
?>
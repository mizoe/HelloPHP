<?php
$kokugo = array('���' => 92, '����' => 74, '����' => 42, '�O�Y' => 65);
print "�\�[�g�O<br>";
foreach($kokugo as $key => $val){
	print "�L�[�F".$key."�@�v�f�F".$val."<br>";
}

//�\�[�g��
print "�\�[�g��<br>";
rsort($kokugo);
foreach($kokugo as $key2 => $val2){
	print "�L�[�F".$key2."�@�v�f�F".$val2."<br>";
}
?>
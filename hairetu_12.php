<?php
$kokugo = array('���' => 92, '����' => 74, '����' => 42, '�O�Y' => 65);
print "�\�[�g�O<br>";
foreach($kokugo as $key => $val){
	print "�L�[�F".$key."�@�v�f".$val."<br>";
}

//�\�[�g��
print "�\�[�g��<br>";
asort($kokugo);
foreach($kokugo as $key2 => $val2){
	print "�L�[�F".$key2."�@�v�f".$val2."<br>";
}
?>
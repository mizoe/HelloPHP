<?php
$errors = "";
if(strlen($_POST["user"]) == 0){
  $errors[] = "���[�U���ɉ������͂���Ă��܂���<br>";
}
if(strlen($_POST["pass"]) == 0){
  $errors[] = "�p�X���[�h�ɉ������͂���Ă��܂���<br>";
}
if(strlen($_POST["pass_ck"]) == 0){
  $errors[] = "�p�X���[�h�m�F���ɉ������͂���Ă��܂���<br>";
}
if(strlen($_POST["pass"]) != 0 && strlen($_POST["pass_ck"]) != 0){
  if(strlen($_POST["pass"]) < 4 || strlen($_POST["pass"]) > 8){
    $errors[] = "�p�X���[�h�͂S�����ȏ�W�����ȉ��ɂ��Ă�������<br>";
  } elseif($_POST["pass"] != $_POST["pass_ck"]){
    $errors[] = "�p�X���[�h���ƃp�X���[�h�m�F���̒l���Ⴂ�܂�<br>";
  }
}

if($errors){
  foreach($errors as $val){
   print $val;
  }
} else{
    print "�ȉ��̓��e�œo�^����܂���<br>";
    print "���[�U���F{$_POST['user']}<br>";
    print "�p�X���[�h�F{$_POST['pass']}<br>";
}
?>
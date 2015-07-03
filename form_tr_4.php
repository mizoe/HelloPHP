<?php
$errors = "";
if(strlen($_POST["user"]) == 0){
  $errors[] = "ユーザ名に何も入力されていません<br>";
}
if(strlen($_POST["pass"]) == 0){
  $errors[] = "パスワードに何も入力されていません<br>";
}
if(strlen($_POST["pass_ck"]) == 0){
  $errors[] = "パスワード確認欄に何も入力されていません<br>";
}
if(strlen($_POST["pass"]) != 0 && strlen($_POST["pass_ck"]) != 0){
  if(strlen($_POST["pass"]) < 4 || strlen($_POST["pass"]) > 8){
    $errors[] = "パスワードは４文字以上８文字以下にしてください<br>";
  } elseif($_POST["pass"] != $_POST["pass_ck"]){
    $errors[] = "パスワード欄とパスワード確認欄の値が違います<br>";
  }
}

if($errors){
  foreach($errors as $val){
   print $val;
  }
} else{
    print "以下の内容で登録されました<br>";
    print "ユーザ名：{$_POST['user']}<br>";
    print "パスワード：{$_POST['pass']}<br>";
}
?>
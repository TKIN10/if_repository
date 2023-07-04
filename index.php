<?php
// 変数に値を代入し、
//$age = 50;
$age = 51;
//$age = 49;
if($age == 50){
  echo '50です'; 
}elseif($age > 50){
  echo '50より大きい';
}else{
  echo '50より小さい';
}
// また最低限どういう値でテストすればいいか
// 確認したテスト値をコメントアウトですべて示してください。
?>

<?php

//$score = 100;
$score = 79;
//$score = 59;
//$score = 39;

if($score > 80){
  echo '優'; 
}elseif($score > 60){
  echo '良';
}elseif($score > 40){
  echo '可';
}else{
  echo '不可';
}

// ○○点は「○」です。

//いくつかのケースで動作確認を行ってください。

?>
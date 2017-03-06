<?php
// switch文1
// switch文を利用して、以下の処理を実現してください。
// 値が1なら「one」、値が2なら「two」、それ以外は「想定外」と表示する処理

$value = 8;

switch ($value) {
  case 1:
  echo "one";
    break;
  case 2:
  echo "two";
    break;
  default:
  echo "想定外";
    break;
}

 ?>

<?php
//自己紹介用
function my_profile(){
  echo "コカジゲンと申します。<br>";
  echo "1991,3,30生まれです。<br>";
  echo "最近手ぬぐい集めてます。<br><br>";
}
//偶数奇数判別
function odd_even_test($value){
  if ($value % 2 == 0) {
    echo "{$value}は偶数です。<br>";
  } else {
    echo "{$value}は奇数です。<br>";
  }
  }
 ?>

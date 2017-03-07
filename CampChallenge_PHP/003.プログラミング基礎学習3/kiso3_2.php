<?php
// 引数1
// 引数として数値を受け取り、その値が奇数か偶数か判別＆表示する処理を関数として制作し、適当な数値に対して奇数・偶数の判別を行ってください

//奇数偶数判別するユーザー定義関数を作成
function odd_even_test($value){
  if ($value % 2 == 0) {
    echo "{$value}は偶数です。<br>";
  } else {
    echo "{$value}は奇数です。<br>";
  }
  }

//使ってみる1001の時
odd_even_test(1001);
//使ってみる100の時
odd_even_test(100);
 ?>

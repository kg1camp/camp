<?php
// グローバル変数
// 引き数、戻り値はなしの関数を用意。
// 初期値3のglobal値を2倍していく、ローカルな値はstaticとしてその関数が何回実行されたのかを保持していくような関数である。この関数を20回呼び出す

//初期値
$start_num = 3;

function doubule(){
  global $start_num;
   $start_num *= 2;
   //何回回したかカウント
   static $kaiten = 0;
   $kaiten++;
}

for ($i=0; $i < 20; $i++) {
  doubule();
}
echo $start_num;
 ?>

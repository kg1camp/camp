<?php
// 引数2
// 引き数が3つの関数を定義する。
// 1つ目は適当な数値を、
// 2つ目はデフォルト値が5の数値を、
// 最後はデフォルト値がfalse(bool値)の$typeを引き数として定義する。
// 1つ目の引き数に2つ目の引き数を掛ける計算をする関数を作成し、$typeがfalseの時はその値を表示、trueのときはさらに2乗して表示する。
// 例）function sample($□□□, $△△△, $type)
// 引数が３つの関数書き出し部分(デフォルト値なし)

function calculation($value1, $value2=5, $type=false){
  if ($type == true) {
    $result = $value1 * $value2;
    $result *= $result;
  } else{
    $result = $value1 * $value2;
  }
  echo $result;
}


echo '使ってみる(2*デフォルト)<br>';
calculation(2);
echo "<br>";

echo '使ってみる(2*7)<br>';
calculation(2, 7);
echo "<br>";
echo '使ってみる(2*7 でtrue)<br>';
calculation(2, 7, true);
echo "<br>";
echo '使ってみる(10*6)<br>';
calculation(10, 6);
echo "<br>";
echo '使ってみる(10*6 でtrue)<br>';
calculation(10, 6, true);
echo "<br>";

 ?>

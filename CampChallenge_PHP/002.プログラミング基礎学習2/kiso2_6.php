<?php
// while文1
// while文を利用して、以下の処理を実現してください。
// 1000を2で割り続け、100より小さくなったらループを抜ける処理

$value = 1000;

while ($value > 100) {
  $value = $value / 2;
}

echo $value;
 ?>

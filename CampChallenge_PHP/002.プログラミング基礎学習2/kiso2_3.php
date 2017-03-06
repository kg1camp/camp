<?php
// for文1
// for文を利用して、8を20回掛ける処理を実現してください。

$value = 8;
$times = 20;
$result = 1;

for ($i=1; $i < $times; $i++) {
  $result *= $value;
}

echo $result, "<br>";
// echo pow($value, $times), "<br>";
 ?>

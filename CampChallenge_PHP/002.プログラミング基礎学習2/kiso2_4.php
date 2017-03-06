<?php
// for文2
// for文を利用して、"A"を30個連結する処理を実現してください。

$value = "A";
$times = 30;
$result = "";

for ($i=1; $i < $times; $i++) {
  $result .= $value;
}

echo $result;
 ?>

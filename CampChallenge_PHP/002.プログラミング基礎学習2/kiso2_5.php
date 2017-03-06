<?php
// for文3
// for文を利用して、0から100を全部足す処理を実現してください。

$times = 100;
$result = 0;

for ($i=0; $i <= $times; $i++) {
  $result += $i;
}

echo $result;
 ?>

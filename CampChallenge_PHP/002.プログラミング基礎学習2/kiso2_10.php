<?php
// クエリストリング 簡易素因数分解
// クエリストリングを利用して、以下の処理を実現してください。
// 簡易素因数分解のロジックを作成します。
// クエリストリングから渡された数値を1ケタの素数で可能な限り分解し、
// 元の値と素因数分解の結果を表示するようにしてください。
// 2ケタ以上の素数が含まれた数値の場合は、
// 「元の値　1ケタの素因数　その他」と表記して、その他　に含んでください

// 元の値はクエリストリングの"number="から取得する
$value = $_GET['number'];
// $value = 600;
//結果
$result = array();

//素因数分解
while ($value != 1) {
  $prime = 2;
  while($value < 1000000000){
    if($value % $prime == 0){
      $result[] = $prime;
      $value /= $prime;
      break;
    }
    $prime++;
  }
}

echo "元の値：", $_GET['number'], "、";
echo "素因数分解の結果:";
foreach ($result as $answer) {
  if($answer<10){
    echo "$answer"."、";
  } else {
    echo "その他 ","$answer";
  }
}
 ?>

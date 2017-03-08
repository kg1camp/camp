<?php
// continue
// 3人分のプロフィールについてIDと住所以外を表示する処理を実行する。2重のforeachとcontinueを必ず用いること

//3人分のプロフィールを配列で用意する
// array($id, $name, $birth, $address);
$prof1 = array(1,  'ヨウスケ', '1991.03.30', '東京都千代田区1-1-1');
$prof2 = array(2, 'タカシ', '1987.01.22', '東京都豊島区1-1-1');
$prof3 = array(3, 'トシアキ', '2000.06.07', '埼玉県さいたま市1-1-1');

//プロフィールの情報をまとめて二重配列にする
$proflist = array($prof1, $prof2, $prof3);

//nameとbirthのみを書き出す
//idとaddressの時はcontinueさせる
foreach ($proflist as $key1) {
  for ($i=0; $i < count($key1); $i++) {
    //idとaddressの時はcontinueさせる
    if(($i == 0) || ($i == 3)){
      continue;
    }
    //continue後、nameとbirthだけ書き出す
    echo $key1[$i], "<br>";
  }
}
 ?>

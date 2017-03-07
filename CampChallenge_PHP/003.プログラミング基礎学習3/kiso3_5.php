<?php
// 戻り値2
// 戻り値としてある人物のid(数値),名前,生年月日、住所を返却し、受け取った後は全情報を表示する

function his_profile(){
  $id = 1;
  $name = "kokaji";
  $birth = "1991.03.30";
  $address = "東京都千代田区1-1-1";
  return array($id, $name, $birth, $address);
}

//使う
$prof =  his_profile();
//配列の中身を全て出力する
for ($i=0; $i < count($prof); $i++) {
  echo $prof[$i];
  echo "<br>";
}

// //実行できたかどうかチェック
// if ($prof == true) {
//   echo "この処理は正しく実行できました";
// } else {
//   echo "正しく実行できませんでした";
// }
 ?>

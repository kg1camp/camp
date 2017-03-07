<?php
// 戻り値1
// 課題「ユーザー定義関数」で定義した関数に追記する形として、戻り値　true(bool値)　を返却するように修正し、
// 関数の呼び出し側でtrueを受け取れたら「この処理は正しく実行できました」、そうでないなら「正しく実行できませんでした」と表示する

function my_profile(){
  echo "コカジゲンと申します。<br>";
  echo "1991,3,30生まれです。<br>";
  echo "最近手ぬぐい集めてます。<br>";
  return true;
}

$prof =  my_profile();
echo $prof;

if ($prof == true) {
  echo "この処理は正しく実行できました";
} else {
  echo "正しく実行できませんでした";
}

 ?>

<?php
// HTMLの入力データの取得と表示
// 以下の入力フィールドを持ったHTMLを、PHPで処理する想定で記述し、作成したHTMLの入力データを取得し、画面に表示する。
//・名前(テキストボックス)、性別(ラジオボタン)、趣味(複数行テキストボックス)

//cookieにフォームでの入力内容を保存
// cookie保持期限
$keeptime = time()+60*60*24*3;
//cookieの内容それぞれ変数に格納する
setcookie('name', $_POST["name"], $keeptime);
setcookie('gender', $_POST["gender"], $keeptime);
setcookie('hobby', $_POST["hobby"], $keeptime);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHPとHTMLのフォーム入力後</title>
    <style>
    li{
      list-style-type: none;
      line-height: 2.5em;
    }
    </style>
  </head>
  <body>
    <p>入力を受け付けました。ありがとうございました。</p>
    <a href="kiso5_5_1.php">入力ページに戻る</a>
  </body>
</html>

<?php
// ファイルのアップロード、読み込み
// ファイルアップロード機能を作成し、ファイルの中身を読み込んで表示する機能を追加してください。
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ファイルのアップロード、読み込み</title>
  </head>
  <body>
    <span>下記のボタンより自己紹介を書いたテキストファイルをアップロードしてください。</span><br>
    <span>※txtファイルのみに対応しております。</span>
    <form enctype="multipart/form-data" action="kiso5_4_2.php" method="post">
      <input type="file" name="userfile">
      <input type="submit" value="送信する">
    </form>
  </body>
</html>

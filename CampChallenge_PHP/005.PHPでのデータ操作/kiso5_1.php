<?php
// HTMLの入力データの取得と表示
// 以下の入力フィールドを持ったHTMLを、PHPで処理する想定で記述し、作成したHTMLの入力データを取得し、画面に表示する。
//・名前(テキストボックス)、性別(ラジオボタン)、趣味(複数行テキストボックス)
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HTMLの入力データの取得と表示</title>
    <style>
    li{
      list-style-type: none;
      line-height: 2.5em;
    }
    </style>
  </head>
  <body>
    <form class="profile" action="check.php" method="post">
      <ul>
        <li><label>名前：<input type="text" name="name" placeholder="名前を入力してください"></label></li>
        <li>性別：
          <label><input type="radio" name="sex" value="男">男</label>
          <label><input type="radio" name="sex" value="女">女</label>
        </li>
      <div>趣味：
        <textarea name="hobby" rows="5" cols="40" placeholder="趣味を入力してください"></textarea>
      </div>
      <input type="submit" value="送信">
    </ul>
    </form>
  </body>
</html>

<?php
// HTMLの入力データの取得と表示
// 以下の入力フィールドを持ったHTMLを、PHPで処理する想定で記述し、作成したHTMLの入力データを取得し、画面に表示する。
//・名前(テキストボックス)、性別(ラジオボタン)、趣味(複数行テキストボックス)
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHPとHTMLのフォーム</title>
    <style>
    li{
      list-style-type: none;
      line-height: 2.5em;
    }
    </style>
  </head>
  <body>
    <form class="profile" action="kiso5_5_2.php" method="post">
      <ul>
        <li><label>名前：<input type="text" name="name" placeholder="名前を入力してください"></label></li>
        <li>性別：
          <label><input type="radio" name="gender" value="男">男</label>
          <label><input type="radio" name="gender" value="女">女</label>
        </li>
      <div>趣味：
        <textarea name="hobby" rows="5" cols="40" placeholder="趣味を入力してください" value="<?php echo $_COOKIE['hobby']; ?>"></textarea>
      </div>
      <input type="submit" value="送信">
    </ul>
    </form>
    <hr>
    <?php
    //cookieに入力内容が入っているか確認、あれば出力、無ければ空白を表示
    if (isset($_COOKIE['name']) == true && isset($_COOKIE['gender']) == true && isset($_COOKIE['hobby']) == true) {
      $name = $_COOKIE['name'];
      $gender = $_COOKIE['gender'];
      $hobby = $_COOKIE['hobby'];
      echo "前回の入力内容は";
      echo "<li>名前：", $name, "</li>";
      echo "<li>性別：", $gender, "</li>";
      echo "<li>趣味：", $hobby, "</li>";
    } else {
      echo "";
    }
    //cookieを破棄
    setcookie('name', "", time()-60*60*24);
    setcookie('gender', "", time()-60*60*24);
    setcookie('hobby', "", time()-60*60*24);
     ?>
  </body>
</html>

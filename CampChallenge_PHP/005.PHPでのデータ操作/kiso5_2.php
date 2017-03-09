<?php
// cookieの記録と表示
// cookieに現在時刻を記録し、次にアクセスした際に、前回記録した日時を表示してください。

//タイムゾーンを東京に設定
date_default_timezone_set('Asia/Tokyo');

//cookieをセット(アクセスした日時を取得、取得した時点から2日間有効)
// cookieの有効期限を設定(取得時点から2日間)
$keeptime = time()+60*60*24*2;
//テスト用(1分)
// $keeptime = time() + 60*1;
setcookie('accesstime', time(), $keeptime);

// 表示用に日時の表示にフォーマットを設定
$notice = date("Y年m月j日 G:i:s", $_COOKIE['accesstime']);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>cookieの記録と表示</title>
  </head>
  <body>
    <?php
    //初回訪問時とそれ以降の表示の仕分け
    if (isset($_COOKIE['accesstime'])) {
      echo "前回訪問したのは", $notice, "です。";
    } else {
      echo "初めての訪問です。";
    }
    ?>
  </body>
</html>

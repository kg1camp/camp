<?php
// セッションの記録と表示
// 課題「クッキーの記録と表示」と同じ機能をセッションで作成してください。
// cookieに現在時刻を記録し、次にアクセスした際に、前回記録した日時を表示してください。

session_start();
//タイムゾーンを東京に設定
date_default_timezone_set('Asia/Tokyo');

//cookieをセット(アクセスした日時を取得、取得した時点から2日間有効)
$_SESSION['accesstime'] =  time();
// 表示用に日時の表示にフォーマットを設定
$notice = date("Y年m月j日 G:i:s", $_SESSION['accesstime']);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>sessionの記録と表示</title>
  </head>
  <body>
    <?php
    //初回訪問時とそれ以降の表示の仕分け
    if (isset($_SESSION['count'])) {
      echo "前回訪問したのは", $notice, "です。";
      echo $_SESSION['count'], "回目の訪問です。";
    } else {
      echo "初めての訪問です。";
      $_SESSION['count'] = 0;
    }
    $_SESSION['count']++;
    ?>
  </body>
</html>

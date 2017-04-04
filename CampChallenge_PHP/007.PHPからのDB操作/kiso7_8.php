<?php
// 特定のレコードの更新
// 以下の課題を、PHPからのPDOを用いて実現してください。検索用のフォームを用意し、名前の部分一致で検索＆表示する処理を構築してください。同じページにリダイレクトするPOST処理と、POSTに値が入っているかの条件分岐を活用すれば、一つの.phpで完了できますので、チャレンジしてみてください

// htmlエスケープして出力用の関数を作る
function html_es($str){
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>検索フォームの構築</title>
    <style>
    li{
      list-style-type: none;
      line-height: 2.5em;
    }
    </style>
  </head>
  <body>
    <section class="form_area">
      <div>
        <form action="kiso7_8.php" method="post">
          <li>名前：<input type="text" name="nm"></li>
          <li><input type="submit" value="検索"></li>
        </form>
      </div>
    </section>
    <section class="result_area">
      <hr>
      <div>
        <?php
        // $_POST["nm"]に値が入っていれば結果を表示
        if (isset($_POST["nm"])) {
        //検索関連をまとめたものから読み込み
        require_once('kiso7_8_2.php');
        // 結果を表示する
        echo html_es($_POST["nm"])."と一致するデータが見つかりました。";
        echo '<table border=1 style="border-collapse: collapse;">
        <th>ID</th>
        <th>名前</th>
        <th>tell</th>
        <th>年齢</th>
        <th>誕生日</th>
        <th>店舗ID</th>
        <th>駅ID</th>';
        //検索結果は二重配列になっているのでforeachを回して値を全て出力する
        foreach ($result as $key) {
          echo "<tr>";
          foreach ($key as $value) {
            echo "<td>", html_es($value),"</td>";
          }
          echo "</tr>";
        }
        echo "</table>";
    }   else {
        //$_POST["nm"]が空かnullなら何もなし
        echo "";
    }
         ?>
      </div>
    </section>
  </body>
</html>

<?php
// 特定のレコードを削除するフォーム
// 以下の課題を、PHPからのPDOを用いて実現してください。profileIDで指定したレコードを削除できるフォームを作成してください
 ?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <title>フォームから選択してレコードを削除</title>
  <style>
  li{
    list-style-type: none;
    line-height: 2.5em;
  }
  </style>
  </head>
  <body>
  <section class="form_area">
    <p>プルダウンメニューから削除したいuserIDを指定してください。</p>
    <form action="kiso7_10_2.php" method="post">
      <ul>
        <select name="userid" required>
          <?php
          //dbへログインを読み込む
          require_once('kiso7_db_util.php');
          try {
            //userIDの値を昇順で表示
              $sql = 'select userID from user ORDER BY userID';
            $pdo_object = new PDO($dsn, $user, $password);
            // プリペアドステートメントのエミュレーションを無効にする
            $pdo_object->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            // 例外がスローされる設定にする
            $pdo_object->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //実行とその結果を受け取れる変数を用意する
            $query = $pdo_object->prepare($sql);
            $query->execute();
            //結果を受け取る変数を用意
            $result = $query->fetchall(PDO::FETCH_ASSOC);
          } catch (PDOException $e) {
            die('接続に失敗しました:'.$e->getMessage());
          }
          //切断
          $pdo_object = null;

          //userIDを選択肢として全てdbから表示
          foreach ($result as $key) {
            echo '<option value="';
            foreach ($key as $value) {
              echo $value;
            }
            echo '">'.$value.'</option>';
          }
           ?>
        </select>
        <li><input type="submit" value="送信"></li>
      </ul>
    </form>
  </section>
  </body>
</html>

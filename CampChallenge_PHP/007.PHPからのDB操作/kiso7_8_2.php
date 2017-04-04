<?php
// 特定のレコードの更新
// 以下の課題を、PHPからのPDOを用いて実現してください。検索用のフォームを用意し、名前の部分一致で検索＆表示する処理を構築してください。同じページにリダイレクトするPOST処理と、POSTに値が入っているかの条件分岐を活用すれば、一つの.phpで完了できますので、チャレンジしてみてください
 ?>
<?php
//dbへログインを読み込む
require_once('kiso7_db_util.php');

//名前を前方一致で検索を実行
try {
    $_POST = html_es($_POST["nm"]);
    $searchtxt = $_POST.'%';
    $sql = 'SELECT * FROM user
            WHERE name
            LIKE :name_post';
  $pdo_object = new PDO($dsn, $user, $password);
  // プリペアドステートメントのエミュレーションを無効にする
  $pdo_object->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  // 例外がスローされる設定にする
  $pdo_object->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //実行とその結果を受け取れる変数を用意する
  $query = $pdo_object->prepare($sql);
  // プレースホルダに値をバインドする
  $query->bindValue(':name_post', $searchtxt, PDO::PARAM_STR);

  //SQLを実行
  $query->execute();
  echo "正常にクエリが実行されました。<br><hr>";
  //結果を添字の配列で受け取る
  $result = $query->fetchall(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die('接続に失敗しました:'.$e->getMessage());
}
//切断
$pdo_object = null;
 ?>

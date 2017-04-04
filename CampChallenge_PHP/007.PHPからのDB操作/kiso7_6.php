<?php
// 特定のレコードの削除
// 以下の課題を、PHPからのPDOを用いて実現してください。課題「テーブルへ情報を格納」でINSERTしたレコードを指定して削除してください。SELECT*で結果を表示してください

 ?>
<?php
require_once('kiso7_db_util.php');

//userテーブルの中から「鈴木 実」を削除するSQL文を用意
$sql = "DELETE from user where name='鈴木 実'";

try {
  $pdo_object = new PDO($dsn, $user, $password);
  //実行とその結果を受け取れる変数を用意する
  $query = $pdo_object->prepare($sql);
  //SQLを実行
  $query->execute();
  echo "正常にクエリが実行されました。<br><hr>";
  $result = $query->fetchall(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die('接続に失敗しました:'.$e->getMessage());
}

//切断
$pdo_object = null;
 ?>

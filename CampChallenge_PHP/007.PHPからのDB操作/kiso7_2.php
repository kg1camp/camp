<?php
// テーブルへ情報を格納
// 以下の課題を、PHPからのPDOを用いて実現してください。前回の課題「テーブルの作成とinsert」で作成したテーブルに自由なメンバー情報を格納する処理を構築してください
 ?>
<?php
require_once('kiso7_db_util.php');

//userテーブルにレコードを追加するSQL文を用意
$sql = "INSERT INTO user VALUES(3,'鈴木 実','080-5566-7788',24,'2000-12-24', 1, 2)";

try {
  $pdo_object = new PDO($dsn, $user, $password);
  //実行とその結果を受け取れる変数を用意する
  $query = $pdo_object->prepare($sql);
  //SQLを実行
  $query->execute();
  echo "正常にクエリが実行されました。<br><hr>";
} catch (PDOException $e) {
  die('接続に失敗しました:'.$e->getMessage());
}
//切断
$pdo_object = null;
 ?>

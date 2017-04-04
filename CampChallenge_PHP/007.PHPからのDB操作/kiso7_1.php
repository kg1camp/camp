<?php
// エラーハンドリングを含んだ接続の確率
// 以下の課題を、PHPからのPDOを用いて実現してください。Challenge_dbへのエラーハンドリングを含んだ接続の確立を行ってください
 ?>
<?php
require_once('kiso7_db_util.php');

try {
  $pdo_object = new PDO($dsn, $user, $password);
  echo "DBの接続に成功しました。";
} catch (PDOException $e) {
  die('接続に失敗しました:'.$e->getMessage());
}
//切断
$pdo_object = null;

 ?>

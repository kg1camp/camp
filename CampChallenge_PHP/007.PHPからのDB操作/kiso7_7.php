<?php
// 特定のレコードの更新
// 以下の課題を、PHPからのPDOを用いて実現してください。profileID=1のnameを「松岡 修造」に、ageを48に、birthdayを1967-11-06に更新してください
 ?>
<?php
require_once('kiso7_db_util.php');

//profileID=1のnameを「松岡 修造」に、ageを48に、birthdayを1967-11-06に更新するSQLを用意
$sql = 'UPDATE user
SET name="松岡 修造", age="48", birthday="1967-11-06"
WHERE userID=1';
// userテーブルの全レコードを、userIDの降順で並び替えて出力する
// SELECT * FROM user ORDER BY userID desc;

try {
  $pdo_object = new PDO($dsn, $user, $password);
  //実行とその結果を受け取れる変数を用意する
  $query = $pdo_object->prepare($sql);
  //SQLを実行
  $query->execute();
  echo "正常にクエリが実行されました。dbを確認してください。<br><hr>";
  $result = $query->fetchall(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die('接続に失敗しました:'.$e->getMessage());
}

//切断
$pdo_object = null;
 ?>

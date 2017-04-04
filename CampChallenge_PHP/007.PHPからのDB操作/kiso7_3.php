<?php
// 全情報の取得と表示
// 以下の課題を、PHPからのPDOを用いて実現してください。前回の課題「テーブルの作成とinsert」で作成したテーブルからSELECT*により全件取得し、画面に取得した全情報を表示してください
 ?>
<?php
require_once('kiso7_db_util.php');

//userテーブルの内容を全件表示するSQLを用意
$sql = "select * from user";

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

//二重のforeachで値を全てtableに出力する
echo '<table border=1 style="border-collapse: collapse;">
<th>ID</th>
<th>名前</th>
<th>tell</th>
<th>年齢</th>
<th>誕生日</th>
<th>店舗ID</th>
<th>駅ID</th>';
foreach ($result as $key) {
  echo "<tr>";
  foreach ($key as $value) {
    echo "<td>", $value,"</td>";
  }
  echo "</tr>";
}
echo "</table>";
//切断
$pdo_object = null;

 ?>

<?php
// フォームからデータを挿入
// 以下の課題を、PHPからのPDOを用いて実現してください。フォームからデータを挿入できる処理を構築してください。
 ?>
<?php
//dbへログインを読み込む
require_once('kiso7_db_util.php');

//name
if (isset($_POST["name"])) {
  $name_post = $_POST["name"];
} else {
  echo "名前に入力エラーがあります。";
}
//tell
if (isset($_POST["tell"])) {
  $tell_post = $_POST["tell"];
} else {
  echo "電話番号に入力エラーがあります。";
}
//age
if (isset($_POST["age"])) {
  $age_post = $_POST["age"];
} else {
  echo "年齢に入力エラーがあります。";
}
//birthday
if (isset($_POST["birth_y"]) && isset($_POST["birth_m"]) &&isset($_POST["birth_d"])) {
  $birth_post = $_POST["birth_y"]."-".$_POST["birth_m"]."-".$_POST["birth_d"];
} else {
  echo "誕生日に入力エラーがあります。";
}

//入力された値をプレースホルダーにバインドさせてSQLを走らせる
try {
    $sql = 'INSERT INTO user
    VALUES(DEFAULT, :name_post, :tell_post, :age_post, :birth_post, DEFAULT, DEFAULT)';
  $pdo_object = new PDO($dsn, $user, $password);
  // プリペアドステートメントのエミュレーションを無効にする
  $pdo_object->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  // 例外がスローされる設定にする
  $pdo_object->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //実行とその結果を受け取れる変数を用意する
  $query = $pdo_object->prepare($sql);

  // プレースホルダに入力された値をバインドする
  $query->bindValue(':name_post', $name_post, PDO::PARAM_STR);
  $query->bindValue(':tell_post', $tell_post, PDO::PARAM_STR);
  $query->bindValue(':age_post', $age_post, PDO::PARAM_INT);
  $query->bindValue(':birth_post', $birth_post, PDO::PARAM_STR);

  //SQLを実行後、サンクスページへ移動
  $query->execute();
  header("Location: http://localhost/camp/7/kiso7_9_thanks.html");
	// 終了
	exit;
} catch (PDOException $e) {
  die('接続に失敗しました:'.$e->getMessage());
}
//切断
$pdo_object = null;
 ?>

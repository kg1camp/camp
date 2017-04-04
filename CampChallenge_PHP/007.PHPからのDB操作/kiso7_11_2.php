<?php
// 特定のレコードの更新
// 以下の課題を、PHPからのPDOを用いて実現してください。profileIDで指定したレコードの、profileID以外の要素をすべて上書きできるフォームを作成してください
 ?>
 <?php
 //userid
 if (isset($_POST["userid"])) {
   $userid = $_POST["userid"];
 } else {
   echo "正しく選択されていません。";
 }
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

 try {
   //dbへ接続
   require_once('kiso7_db_util.php');

   //選択されたuserIDのレコードを、入力された値でプレースホルダーからバインドし、SQLに入れて走らせ、対象のレコードを更新する
     $sql = 'UPDATE user
     SET name=:name_post,
      tell=:tell_post,
      age=:age_post,
      birthday=:birth_post
      WHERE userID=:user_select';
   $pdo_object = new PDO($dsn, $user, $password);
   // プリペアドステートメントのエミュレーションを無効にする
   $pdo_object->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
   // 例外がスローされる設定にする
   $pdo_object->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //実行とその結果を受け取れる変数を用意する
   $query = $pdo_object->prepare($sql);

   // プレースホルダに値をバインドする
   $query->bindValue(':user_select', $userid, PDO::PARAM_INT);
   $query->bindValue(':name_post', $name_post, PDO::PARAM_STR);
   $query->bindValue(':tell_post', $tell_post, PDO::PARAM_STR);
   $query->bindValue(':age_post', $age_post, PDO::PARAM_INT);
   $query->bindValue(':birth_post', $birth_post, PDO::PARAM_STR);

   $query->execute();
   //SQLを実行後、サンクスページへ移動
   header("Location: http://localhost/camp/7/kiso7_11_thanks.html");
 	// 終了
 	exit;
 } catch (PDOException $e) {
   die('接続に失敗しました:'.$e->getMessage());
 }
 //切断
 $pdo_object = null;
  ?>

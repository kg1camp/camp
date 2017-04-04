<?php
// 特定のレコードを削除するフォーム
// 以下の課題を、PHPからのPDOを用いて実現してください。profileIDで指定したレコードを削除できるフォームを作成してください
 ?>
 <?php
 //userid
 if (isset($_POST["userid"])) {
   $userid = $_POST["userid"];
 } else {
   echo "正しく選択されていません。";
 }

 try {
   require_once('kiso7_db_util.php');

   //入力されたuserIDをプレースホルダーからバインドし、SQLに入れて走らせ、対象のレコードを削除する
     $sql = 'DELETE from user WHERE userid = :user_select';
   $pdo_object = new PDO($dsn, $user, $password);
   // プリペアドステートメントのエミュレーションを無効にする
   $pdo_object->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
   // 例外がスローされる設定にする
   $pdo_object->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //実行とその結果を受け取れる変数を用意する
   $query = $pdo_object->prepare($sql);

   // プレースホルダに値をバインドする
   $query->bindValue(':user_select', $userid, PDO::PARAM_INT);


   $query->execute();
   //SQLを実行後、サンクスページへ移動
   header("Location: http://localhost/camp/7/kiso7_10_thanks.html");
 	// 終了
 	exit;
 } catch (PDOException $e) {
   die('接続に失敗しました:'.$e->getMessage());
 }
 //切断
 $pdo_object = null;

  ?>

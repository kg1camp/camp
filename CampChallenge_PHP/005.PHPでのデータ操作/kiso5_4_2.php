<?php
// ファイルのアップロード、読み込み
// ファイルアップロード機能を作成し、ファイルの中身を読み込んで表示する機能を追加してください。

// ToDo ファイルの拡張子での判別の結果が安定しないのを直す

//空ではないか・ファイルがtxtか、そうではないならエラー表示
$errmessage = "正常なファイルを検知できませんでした。<br>txt形式のファイルでアップロードしてください。";

if (empty($_FILES['userfile']['name']) || !substr($_FILES['userfile']['name'], -4) == ".txt") {
  //エラーを表示
  echo $errmessage;
} else {
//指定ファイルを読み取って表示
$uploadfile = file_get_contents($_FILES['userfile']['name']);
echo $uploadfile;
}
?>

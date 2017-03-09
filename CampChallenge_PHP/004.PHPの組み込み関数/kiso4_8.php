<?php
// ファイルの書き出しと保存
// ファイルに自己紹介を書き出し、保存してください。

//自己紹介内容を先に用意
$profile = "xxxxxと申します。最近手ぬぐい集めてます。";
$filename = 'profile.txt';

//書き込みモードでファイルを開く、ファイルが無い場合は作成する
$writefile = fopen($filename, 'w');
//ファイルを書き込む
fwrite($writefile, $profile);
//ファイルを閉じる
fclose($writefile);

echo "処理が完了したか該当のディレクトリを開いて確認してください。";
 ?>

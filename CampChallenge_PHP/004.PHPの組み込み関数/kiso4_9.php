<?php
// ファイルから読み出しと表示
// ファイルから自己紹介を読み出し、表示してください。

//表示したいファイル名
$filename = 'profile.txt';

//読み込みのみモードでファイルを開く
$readfile = fopen($filename, 'r');
//ファイルを表示する
$filemiru = fgets($readfile);
echo "---------ファイル内容ここから---------<br>";
echo $filemiru, "<br>";
echo "---------ファイル内容ここまで---------<br>";
//ファイルを閉じる
fclose($readfile);
 ?>

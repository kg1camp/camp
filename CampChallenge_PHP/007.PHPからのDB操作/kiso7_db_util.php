<?php
// エンコードはこの設定じゃないとだめ
// show variables like 'char%';
//
// ログイン
// mysql -u 'camp'@'localhost'
// mysql -h localhost -u gen -p
// 'testpw'
//
// ログインroot
// mysql -h localhost -u root
//
// エンコードの設定変更
// set character_set_client = cp932;
// set character_set_results = cp932;
//
// エンコード調べる
// show variables like 'char%';
//
// 現在のユーザー確認
// SELECT USER(), CURRENT_USER();
//
// db作る
// CREATE DATABASE challenge_db;
//
// db選ぶ
// USE challenge_db;
//
// dbのエンコードをutf8に変える
// ALTER  DATABASE challenge_db CHARACTER SET utf8;
//
// レコード全件表示
//  select * from profiles;
//
 ?>
<?php
//dbユーザ
$user ='gen';
$password = 'testpw';
//利用するdb
$dbName = 'challenge_db';
//MySQLサーバ
$host = 'localhost:3306';
//MySQLのDSN文字列
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
 ?>

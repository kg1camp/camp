<?php
// 現在日時の表示
// 現在の日時を「年-月-日 時:分:秒」で表示してください。

//タイムゾーンを日本に設定
date_default_timezone_set('Asia/Tokyo');

//「年月日 時分秒」のフォーマットで出力
$oneday = date('Y-m-d H:i:s');
echo $oneday;
 ?>

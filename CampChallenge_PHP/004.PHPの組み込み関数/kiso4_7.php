<?php
// 文字の入れ替え
// 以下の文章の「I」⇒「い」に、「U」⇒「う」に入れ替える処理を作成し、結果を表示してください。
//「きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます」

//入れ替えたい元の文字列を用意
$exchange = "きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます";
echo "変換前の文章<br>", $exchange, "<br>";
echo "変換後の文章<br>";

//検索する対象、変換したい対象をそれぞれ配列にする
$search = array('I', 'U');
$replace = array('い', 'う');

//もとの文章から置換して表示
echo str_replace($search, $replace, $exchange);

//おまけ
echo "<br><br>※もう一段階<br>";
$onemore = str_replace($search, $replace, $exchange);

$search2 = array('きょう', 'ぴいえいちぴい', 'くみこみかんすう', 'がくしゅう');
$replace2 = array('今日', 'PHP', '組み込み関数', '学習');

echo str_replace($search2, $replace2, $onemore);
 ?>

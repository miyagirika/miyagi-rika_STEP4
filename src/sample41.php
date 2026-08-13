<?php
//配列
$cities = array("tokyo", "osaka", "nagoya", "kyoto");

//インデックスが２から１つの要素を削除
array_splice($cities, 2, 1);

//出力
print_r($cities)
?>
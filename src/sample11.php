<?php
//変数の定義
$value = 5;

//前置インクリメント
//出力：　６
echo ++$value;
echo "\n";

//後置インクリメント
//出力：　６　（出力後に　＄value　は　７　になる）
echo $value++;
echo "\n";

//前置デクリメント
echo --$value; //出力：　６
echo "\n";

//後置デクリメント
//出力：　６ （出力後に　$value は　５　になる）
echo $value--; 
echo "\n";
?>


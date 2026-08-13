<?php
//元の文字列
$text = "Hello World";

// 'Hello'を'CyTech'に置き換える　←　「'World'を'CyTech'」に置き換える　が正しい？
$new_text = str_replace("World" , "CyTech" , $text);

// 結果を出力
echo $new_text;
?>
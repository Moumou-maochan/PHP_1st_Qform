<?php

// var_dump($_POST);
// exit();

// データの受信
$name = $_POST['name'];
$email = $_POST['email'];
$question = $_POST['question'];
// スペース区切り最後に改行
$write_data = "{$name} {$email} {$question} \n";
// ファイルを開く、因数はa
$file = fopen('data/kadai.csv' , 'a');
// フィルをロック
flock($file , LOCK_EX);
// データに書き込み
fwrite($file , $write_data);
// ロック解除
flock($file, LOCK_UN);
// ファイルを閉じる
fclose($file);
// 入力画面に移動
header("Location:index.php");

?>
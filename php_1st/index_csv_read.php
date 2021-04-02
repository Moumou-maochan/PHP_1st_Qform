<?php

// 出力用からの文字列
$str = "";
// ファイルを開く（読み取り専用）
$file = fopen('data/kadai.csv' ,'r');

// ファイルをロック
flock($file, LOCK_EX);
// fgets()で一行ずつ取得→$lineに格納
if($file){
  while ($line = fgets($file)){
    //  取得したデータを＄strにいれる
    $str .= "<tr><td>{$line}<td><tr>";
  }
}
// ロック解除
flock($file, LOCK_UN);
// ファイルを閉じる
fclose($file);


?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>csvリスト</title>
</head>

<body>
  <fieldset>
    <legend>csvリスト（一覧画面）</legend>
    <a href="index.php">入力画面</a>
    <table>
      <thead>
        <tr>
        <th>name</th>
          <th>email</th>
          <th>question</th>
        </tr>
      </thead>
      <tbody>
      <?= $str ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>
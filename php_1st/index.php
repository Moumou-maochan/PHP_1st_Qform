<?php

// 変数の定義は$必須
// 行末には「;」必須
$number = 100;
$str = "はじめてのPHP";


// 配列
// $array[0]などで取得可能
$array1 = ["JavaScript", "PHP", "Swift", "Haskell"];

// キー名を指定することもできる（jsのオブジェクト的な感じ）
// $array2["サーバ"]などで取得可能
$array2 = [
  "フロント" => "JavaScript",
  "サーバ" => "PHP",
  "iOS" => "Swift",
  "関数型" => "Haskell"
];

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>csvリスト</title>
</head>

<body>
  <form action="index_csv_create.php" method="POST">
    <fieldset>
      <legend>csvリスト</legend>
      <a href="index_csv_read.php">一覧画面</a>
      <div>
        name <input type="text" name="name">
      </div>
      <div>
        email <input type="email" name="email">
      </div>
      <div>
        question <input type="text" name="question">
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>
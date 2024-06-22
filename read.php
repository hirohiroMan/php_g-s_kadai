<?php

// タグの文字列を入れる変数
$str = '';
// ファイルを読み込む
$file = fopen('data/event.csv' , 'r' );
// ファイルをロック
flock($file , LOCK_EX);
// データを取り出してタグに入れる
if($file){
  while ($line =fgets($file)){
    $str .="<tr><td>{$line}</td></tr>";
  }
}

// ファイルをロック
flock($file, LOCK_UN);
// ファイルを閉じる
fclose($file);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>イベント申し込みフォーム</title>
</head>

<body>
  <fieldset>
    <legend>イベント申し込みフォーム</legend>
    <a href="index.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>申込者名簿</th>
        </tr>
      </thead>
      <tbody>
            <?= $str?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>
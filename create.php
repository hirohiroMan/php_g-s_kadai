<?php
// var_dump($_POST);
// exit();
$name = $_POST['name'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];
$address = $_POST['address'];
$number = $_POST['number'];
$deadline = $_POST['deadline'];

// 書き込みたいデータの形

// 書き込み 最後は改行の意味
$write_data ="{$name} {$tel} {$mail} {$address} {$number} {$deadline}\n";
// ファイルを開く
$file = fopen('data/event.csv' , 'a' );
// ファイルをロック
flock($file , LOCK_EX);
// 指定したファイルに指定したデータを書き込む
fwrite($file, $write_data);
// ファイルをロック
flock($file, LOCK_UN);
// ファイルを閉じる
fclose($file);
// データ入力画面に移動する
header('Location:index.php');
exit();

?>
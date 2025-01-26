<?php
// ファイルの最終更新日時を取得
$lastUpdate = filemtime("https://symphony100.github.io/shikenyou/oshirase/index.html");

// JSON形式で返す
echo json_encode(['lastUpdate' => $lastUpdate]);
?>

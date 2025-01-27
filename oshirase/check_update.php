<?php
// 監視するHTMLファイル（またはデータベースのデータ）
$filePath = "https://symphony100.github.io/shikenyou/oshirase/index.html";

// ファイルの内容を読み込み、ハッシュを生成
$contentHash = hash_file('sha256', $filePath);

// JSON形式で返す
echo json_encode([
    'contentHash' => $contentHash, // 現在のハッシュ
    'lastUpdate' => filemtime($filePath) // ファイルの最終更新日時
]);
?>

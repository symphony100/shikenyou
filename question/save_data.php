<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 送信データを取得
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $purpose = isset($_POST['purpose']) ? $_POST['purpose'] : '';
    $details = isset($_POST['details']) ? $_POST['details'] : '';
    $timestamp = date("Y-m-d H:i:s");

    // 保存するCSVファイルのパス
    $file = 'survey_data.csv';

    // 保存するデータを配列形式にする
    $data = [$gender, $purpose, $details, $timestamp];

    // ファイルが存在しない場合、ヘッダー行を追加
    if (!file_exists($file)) {
        $header = ['性別', 'ご用件', 'お問い合わせ内容', '送信日時'];
        $fp = fopen($file, 'w');
        fputcsv($fp, $header);
        fclose($fp);
    }

    // データをCSVファイルに追記
    $fp = fopen($file, 'a');
    if ($fp !== false) {
        fputcsv($fp, $data);
        fclose($fp);
        echo "データが正常に保存されました。";
    } else {
        echo "ファイルの保存に失敗しました。";
    }
} else {
    echo "無効なリクエストです。";
}

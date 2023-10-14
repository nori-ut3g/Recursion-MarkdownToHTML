<?php
if (isset($_POST['html'])) {
    $htmlText = $_POST['html'];

    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="converted.html"');  // ダウンロードするファイル名を設定

    echo $htmlText;  // 変換されたテキストを出力
    exit;  // 処理終了
} else {
    echo "エラー: HTMLが提供されていません。";
}
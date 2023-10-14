<?php

if (isset($_POST['markdown'])) {
    $markdownText = $_POST['markdown'];
    $highlight = $_POST['highlight'];
    $cmd = "python3 py/main.py " . escapeshellarg($markdownText) . " "
    . escapeshellarg($highlight);

    $output = [];
    exec($cmd, $output);

    $html = implode("\n", $output);
    echo $html;
} else {
    echo "エラー: Markdownテキストが提供されていません。";
}
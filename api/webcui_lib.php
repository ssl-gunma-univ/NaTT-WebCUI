<?php

//'' で囲った文字列
function getString($paramName) {
    $param = $_POST[$paramName];
    $param = escapeshellarg($param);
    return $param;
}

//'' で囲ったファイル名のみ
function getFilename($paramName) {
    $param = $_POST[$paramName];
    $param = basename($param);
    $param = escapeshellarg($param);
    return $param;
}

function getInt($paramName) {
    $param = $_POST[$paramName];
    return (int)$param;
}

function getFloat($paramName) {
    $param = $_POST[$paramName];
    return (float)$param;
}

// function printLine($line) {
//     echo str_replace(" ", "&nbsp;", htmlspecialchars($line, ENT_QUOTES)) . "<br>";
// }

//文字列をhtml形式に変換
function printLine($line) {
    echo str_replace("font&nbsp;", "font ", str_replace(" ", "&nbsp;", $line)) . "<br>";
}

//html形式で表示
function printOutput($output) {
    for ($i = 0; $i < count($output); $i++) {
        printLine($output[$i]);
    }
}

?>
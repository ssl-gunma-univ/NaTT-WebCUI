<?php
require("webcui_lib.php");


header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type, Origin, X-Requested-With');
header('Access-Control-Allow-Methods: POST, GET');
header('Content-Type: text/plain; charset=UTF-8');

// Change depending on the locale of your server
putenv("LANG=C.UTF-8");
setlocale(LC_CTYPE, "C.UTF-8");


$filebody = $_POST['filebody'];
$processor = ' ';
$order = ' ';
$option = ' ';

$tmpfile = "./tmp/tempfile.trs";
$fp = fopen($tmpfile, "w");
fwrite($fp, $filebody);
fclose($fp);

if($_POST['processor'] !== 'none'){
    $processor .= $_POST['processor'];
}
else{
    $order .= $_POST['order'];
}

if ($_POST['help'] === 'true') { $option .= '--help ';    $tmpfile = ''; }

$cmd = '/var/www/html/webcui/sol/api/sol/bin/NaTT-1.9/NaTT.exe '. $tmpfile . $processor . $order . $option . ' 2>&1';

//echo '<font color=\"green\">&gt; ' . $cmd . '</font><br>';
//CUIプログラムを実行
exec($cmd, $output);
exec('rm ./tmp/tempfile.trs');

//結果表示
printOutput($output);

?>

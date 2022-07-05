<?php
echo "현재 디렉토리 : ". getcwd().'<br />';

$dir    = './';
$files1 = scandir($dir);
print_r($files1);

mkdir("new_folder", 0700, true);
?>

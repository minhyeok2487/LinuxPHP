
<?php
$filename = 'readme.txt';
if (is_readable($filename)) {
    echo file_get_contents($filename);
} else {
    echo 'The file is not readable';
}
?>

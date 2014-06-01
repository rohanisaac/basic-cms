<?php
/* list the files in the current working directory */
$dir    = '.';
$files = scandir($dir);
print_r($files);
?>

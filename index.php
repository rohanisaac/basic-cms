<?php
$filename = __FILE__;
$id = "index";
$title = "Welcome!";
$description = "Welcome page";
$keywords = "welcome,introduction";
$class = "test";
$body = file_get_contents($id.'.txt');
include('./resources/templates/_template.php');
?>

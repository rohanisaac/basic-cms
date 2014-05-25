<?php
$filename = __FILE__;
$id = "page_creation";
$title = "Page Creation";
$description = "Admin page designed to generate other pages.";
$keywords = "admin";
$body = file_get_contents($id.'.txt');

$class = "admin"; // top level page if none, otherwise, page title

include('../resources/templates/_template.php');

?>

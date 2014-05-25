<?php
$filename = __FILE__;
$id = "welcome"; // unique key, body file name
$title = "Welcome";
$description = "Page to welcome readers";
$keywords = "sample,page,website,other,stupid,keywords";
$body = file_get_contents($id.'.txt');

$class = "welcome";

include('../resources/templates/_template.php');

?>

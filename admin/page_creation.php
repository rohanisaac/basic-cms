<?php
$filename = __FILE__;
$id = "page_creation"; // if this is going to work as a database, we will need a unique key
$title = "Page Creation";
$description = "Admin page designed to generate other pages.";
$keywords = "admin";
$body = file_get_contents($id.'.txt');

$parent = "none"; // top level page if none, otherwise, page title

define("THISISTHEKEY", "createpage");

include('../resources/templates/_template.php');

?>

<?php
$filename = __FILE__;
$id = "123"; // if this is going to work as a database, we will need a unique key
$title = "Sample Page";
$description = "This is a good description";
$keywords = "sample,page,website,other,stupid,keywords";
$body = file_get_contents($id.'.txt');
$parent = "none"; // top level page if none, otherwise, page title

define("THISISTHEKEY", "1");

include('../resources/templates/_template.php');

?>

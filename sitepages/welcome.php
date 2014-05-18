<!-- Sample page that loads some data, and sends it to the template -->
<?php
$filename = __FILE__;
$id = "welcome"; // unique key, body file name
$title = "Welcome";
$description = "Page to welcome readers";
$keywords = "sample,page,website,other,stupid,keywords";
$body = file_get_contents($id.'.txt');

$parent = "none"; // top level page if none, otherwise, page title

define("THISISTHEKEY", "welcome");

include('../resources/templates/_template.php');

?>

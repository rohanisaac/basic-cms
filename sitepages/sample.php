<?php
$filename = __FILE__;
$id = "sample"; // if this is going to work as a database, we will need a unique key
$title = "Sample Page";
$description = "This is a good description";
$keywords = "sample,page,website,other,stupid,keywords";
$body = file_get_contents($id.'.txt');

$class = "default";

include('../resources/templates/_template.php');

?>

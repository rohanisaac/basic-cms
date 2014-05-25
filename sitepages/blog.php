<?php
$filename = __FILE__;
$id = "blog"; // if this is going to work as a database, we will need a unique key
$title = "Blog";
$description = "Page for blagging.";
$keywords = "sample,page,website,other,stupid,keywords";
$body = file_get_contents($id.'.txt');

$class = "blog"; // this picks the template for the tile

include('../resources/templates/_template.php');

?>

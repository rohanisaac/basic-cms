<!-- Sample page that loads some data, and sends it to the template -->
<?php
$filename = __FILE__;
$id = "123"; // if this is going to work as a database, we will need a unique key
$title = "Sample Page";
$description = "This is a good description";
$keywords = "sample,page,website,other,stupid,keywords";
$body = "This is the body. I don't like this style of encapsulations. It would be better if we could embed straigt html into here."	;
$parent = "none"; // top level page if none, otherwise, page title

define("THISISTHEKEY", "This is the key");

include('_template.php')

?>
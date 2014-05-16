<!-- Sample page that loads some data, and sends it to the template -->
<?php
$filename = __FILE__;
$id = "blog"; // if this is going to work as a database, we will need a unique key
$title = "Blog";
$description = "Page for blagging.";
$keywords = "sample,page,website,other,stupid,keywords";
$body = '
<p>

	This is a blog page. With any luck there should be a header. Maybe even a footer

</p>

<p>

	bloggy blog blog

</p>

';

$parent = "none"; // top level page if none, otherwise, page title

define("THISISTHEKEY", "blog");

include('../resources/templates/_template.php');

?>

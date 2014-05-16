<!-- Sample page that loads some data, and sends it to the template -->
<?php
$id = "blog"; // if this is going to work as a database, we will need a unique key
$title = "Blog Page";
$description = "Page for blagging.";
$keywords = "sample,page,website,other,stupid,keywords";
$body = '

<h1>blog</h1>

<p>

	This is a blog page. With any luck there should be a header. Maybe even a footer

</p>

<p>

	bloggy blog blog

</p>

';

$parent = "none"; // top level page if none, otherwise, page title

define("THISISTHEKEY", "blog");

include('_template.php');

?>
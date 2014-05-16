<!-- Sample page that loads some data, and sends it to the template -->
<?php
$filename = __FILE__;
$id = "welcome"; // if this is going to work as a database, we will need a unique key
$title = "Welcome";
$description = "Page to welcome readers";
$keywords = "sample,page,website,other,stupid,keywords";
$body = '

<p>This is a welcome page. It should welcome you to the site.</p>

<p><a href="blog.php">This blog link</a> should take you to another kind of page, with a different template. There should be no header and footer on this page, but on the next there will be.</p>

<p> Lots of things need to work better. </p>

';

$parent = "none"; // top level page if none, otherwise, page title

define("THISISTHEKEY", "welcome");

include('_template.php');

?>

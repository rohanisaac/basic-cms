<!-- Sample page that loads some data, and sends it to the template -->
<?php
$id = "123"; // if this is going to work as a database, we will need a unique key
$title = "Welcome Page";
$description = "This is a good description";
$keywords = "sample,page,website,other,stupid,keywords";
$body = '

<h1>Welcome</h1>

<p>

	This is a welcome page. It should welcome you to the site.

</p>

<p>

	<a href="blog.php">This link</a> should take you to another kind of page, with a different template. There should be no header
	and footer on this page, but on the next there will be.

</p>




';
$parent = "none"; // top level page if none, otherwise, page title

define("THISISTHEKEY", "welcome");

include('testtemp.php')

?>
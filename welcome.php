<!-- Sample page that loads some data, and sends it to the template -->
<?php
$id = "1234"; // if this is going to work as a database, we will need a unique key
$title = "Welcome Page";
$description = "Page to welcome readers";
$keywords = "sample,page,website,other,stupid,keywords";
$body = '

<h1>Welcome</h1>

<<<<<<< HEAD
<p>This is a welcome page. It should welcome you to the site.</p>

<p><a href="blog.php">This blog link</a> should take you to another kind of page, with a different template. There should be no header and footer on this page, but on the next there will be.</p>
=======
<p>
	So does this work.
	This is a welcome page. It should welcome you to the site.

</p>

<p>

	<a href="blog.php">This link</a> should take you to another kind of page, with a different template. There should be no header
	and footer on this page, but on the next there will be.

</p>
>>>>>>> 8216dd366ba3878136574e17cf8f408159a43d63

';

$parent = "none"; // top level page if none, otherwise, page title

define("THISISTHEKEY", "welcome");

include('template.php')

?>

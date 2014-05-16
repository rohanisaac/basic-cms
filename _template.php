<?php
/* This is a template page that is called by every data page, it loads the variables that the pages sends and puts all the variables into the the template page and displays is */

// if not defined "some var" then echo "this page cannot be accessed directly"

defined('THISISTHEKEY') or die('This page cannot be accessed directly');

// we can define what page is generated by using the key. if it has one, then a page matching the key can be generated.

// This might be a drastic step, but how about only using the conditionals when we really need too, most of the material should be the same, similar to the admin page. I like the idea of storing the page type in THISISTHEKEY,probably could name it something more useful in the future.

// Perhaps at some later stage we could change this to another varible in the data page

// We could just use the id which we pass


$page = '
<!doctype html>

<head>
	<meta charset="utf-8">
	<title>Site Name - '.$title.'</title>
	<meta name="description" content="'.$description.'">
	<meta name="keywords" content="'.$keywords.'">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

<div class="container">
	<ul class="nav nav-tabs nav-justified">';

$dir = new DirectoryIterator(dirname(__FILE__));
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
		$fn = $fileinfo->getFilename();
		if (strpos($fn,'.php') and substr( $fn, 0, 1 ) != "_")
		{
			$page .= '<li><a href="'.$fn.'">'.$fn.'</a></li>';
		}
    }
}

$page .='
	</ul>
<h1>'.$title.'</h1>';

/*Some choices for what to do for the header section based on the page id 
we could also add a page class eg: admin pages could all have the same class, blog posts etc. */
if($id == "welcome"){
	// nothing here
}

elseif($id == "blog") {
	$page .= '<div class="header">Header for blog</div>';
}

elseif($id == "createpage"){
	$page .= '
		<p class="navbar-text">Admin Page Creation</p>';
}
else {
	$page .= '<h1>Header code here</h1>';
}

/* Including the main body container */
$page .= '
	<div class="container">'.$body.'</div>';


/* Some footer options */
if($id == "blog") {
	$page .= '<div class="footer">Footer for blog</div>';
}

else {
	$page .= '<div id="footer"> Footer stuff here</div>';
}

/*Finish off the page */

$page .= '
	</div>
</body>
</html>
';

echo $page;
?>
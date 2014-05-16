<?php
/* This is a template page that is called by every data page, it loads the variables that the pages sends and puts all the variables into the the template page and displays is */

// if not defined "some var" then echo "this page cannot be accessed directly"

defined('THISISTHEKEY') or die('This page cannot be accessed directly');

// we can define what page is generated by using the key. if it has one, then a page matching the key can be generated.

// This might be a drastic step, but how about only using the conditionals when we really need too, most of the material should be the same, similar to the admin page. I like the idea of storing the page type in THISISTHEKEY,probably could name it something more useful in the future.

// Perhaps at some later stage we could change this to another varible in the data page

$head = '
<!doctype html>

<head>
	<meta charset="utf-8">
	<title>Site Name - '.$title.'</title>
	<meta name="description" content="'.$description.'">
	<meta name="keywords" content="'.$keywords.'">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/bootstrap.min.js"></script>
</head>';	

$nav = '<div class="dropdown">
  <button class="btn dropdown-toggle sr-only" type="button" id="dropdownMenu1" data-toggle="dropdown">
    Dropdown
    <span class="caret"></span>
  </button><ul class="dropdown-menu" role="menu">';

$dir = new DirectoryIterator(dirname(__FILE__));
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
		$fn = $fileinfo->getFilename();
		if (strpos($fn,'.php'))
		{
			$nav .= '<li><a href="'.$fn.'">'.$fn.'</a></li>';
		}
    }
}

$nav .='</ul></div>';

if(constant("THISISTHEKEY") == "welcome"){

	$page = $head.' 
	<body>'.$nav.'

	'.$body.'

	</body>
	</html>

	';

}

elseif(constant("THISISTHEKEY") == "blog") {

	$page = $head.'

	<body>
		<div class="header">Header for blog</div>

	'.$body.'

		<div class="footer">Footer for blog</div>
	</body>
	</html>

	';

}

else {

	$page = $head.'

	<body>	

		<h1>Header code here</h1>
		
	'.$body.'

		<div id="footer"> Footer stuff here</div>
	</body>
	</html>

	';

}

echo $page;
?>
<?php
/* This is a template page that is called by every data page, it loads the variables that the pages sends and puts all the variables into the the template page and displays is */

// if not defined "some var" then echo "this page cannot be accessed directly"
defined('THISISTHEKEY') or die('This page cannot be accessed directly')

echo '<!doctype html>' 

echo <<<EOL <head>
	<meta charset="utf-8">
	<title>Site Name - $title</title>
	<meta name="description" content="$description">
	<meta name="keywords" content="$keywords">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
		
EOL;

// This probably won't work. I wish this was python
echo("""<h1>Header code here</h1>""");
echo($content)
echo <<<EOL <div id="footer"> Footer stuff here</div></body>
</html>

EOL;
?>





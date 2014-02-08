<?php
/* This is a template page that is called by every data page, it loads the variables that the pages sends and puts all the variables into the the template page and displays is */

// if not defined "some var" then echo "this page cannot be accessed directly"

echo('<!doctype html>')

echo("""<head>
	<meta charset="utf-8">
	<title>Site Name - $title</title>
	<meta name="description" content="$description">
	<meta name="keywords" content="$title">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>""");

// This probably won't work. I wish this was python
echo("""<h1>Header code here</h1>""");
echo($content)
echo("""<div id="footer"> Footer stuff here</div></body>
</html>

""");
?>





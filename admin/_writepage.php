<?php

//--------------------------------------------------------------------------------------------
//			SOLUTION FOR WRITING INFO TO FILE AS A "DATABASE" THING
//--------------------------------------------------------------------------------------------


$f = fopen($_POST["id"].'.php', "w") or die("could not write file"); //I couldn't get this to open the file...
chmod($_POST["id"].'.php', 0777);


// all the tags we would need
$tags = array("id","title","description","keywords","parent");

fwrite($f,"<?php\n" . '$filename = __FILE__;' . "\n");

// loop through tags
foreach($tags as $item) {
	// write the tag name as a php variable and equal it to the _POST variable
	fwrite($f,'$'.$item.' = "' . $_POST[$item] .  "\";\n");

}

// need to write the body file

// define the key and include the template
fwrite($f, 'define("THISISTHEKEY", "'.$_POST["key"]."\");\n");
fwrite($f,'include(\'../resources/templates/_template.php\');');

fwrite($f,"\n?>");

header( 'Location: ./'. $_POST["id"] .'.php' );


//--------------------------------------------------------------------------------------------
//			TEMPORARY SOLUTION/PREVIEW
//--------------------------------------------------------------------------------------------

// write the variables in this file
/*

$filename = __FILE__;
$id = $_POST["id"]; // if this is going to work as a database, we will need a unique key
$title = $_POST["title"];
$description = $_POST["description"];
$keywords = $_POST["keywords"];
$body = $_POST["body"];

$parent = $_POST["parent"]; // top level page if none, otherwise, page title

define("THISISTHEKEY", $_POST["key"]);

// and include the template to style the data, like a preview
include('_template.php');
*/
?>

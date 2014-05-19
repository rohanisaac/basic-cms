<?php

//--------------------------------------------------------------------------------------------
//			SOLUTION FOR WRITING INFO TO FILE AS A "DATABASE" THING
//--------------------------------------------------------------------------------------------


fopen($_POST["id"].'.php', "w") or die("could not write file"); //I couldn't get this to open the file...

// all the tags we would need
$tags = array("id","title","description","keywords","body","parent");

// loop through tags
foreach($tags as $item) {
	// write the tag name as a php variable and equal it to the _POST variable
  // if ($item ==)
	fwrite('$'.$item.' = ' . $_POST["item"] . ";\n");

}
// define the key and include the template
fwrite($_POST["id"].'.php', 'define("THISISTHEKEY", '.$_POST["key"].");\n");
fwrite($_POST["id"].'.php','include(\'..\resources\templates\_template.php\');');



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

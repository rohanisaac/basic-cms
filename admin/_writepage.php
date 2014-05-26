<?php

//--------------------------------------------------------------------------------------------
//			SOLUTION FOR WRITING INFO TO FILE AS A "DATABASE" THING
//--------------------------------------------------------------------------------------------

if (!is_dir('../sitepages/' . $_POST["class"])) {
  $oldumask = umask(0);
  mkdir('../sitepages/' . $_POST["class"]) or die('dir could not be created');
  umask($oldumask);
}

$f = fopen('../sitepages/' . $_POST["class"] . '/' . $_POST["id"] . '.php', "w") or die("could not write file");
chmod('../sitepages/' . $_POST["class"] . '/' . $_POST["id"] . '.php', 0777);
$b = fopen('../sitepages/' . $_POST["class"] . '/' . $_POST["id"] . '.txt', "w") or die("could not write markdown");
chmod('../sitepages/' . $_POST["class"] . '/' . $_POST["id"] . '.txt', 0777);


// all the tags we would need
$tags = array("id","title","description","keywords","parent");

fwrite($f,"<?php\n" . '$filename = __FILE__;' . "\n");

// loop through tags
foreach($tags as $item) {
	  fwrite($f,'$'.$item.' = "' . $_POST[$item] .  "\";\n");
}

// write the body to the txt file
fwrite($b, $_POST['body']);
fwrite($f, '$body = file_get_contents($id.\'.txt\');' . "\n");

// include template
fwrite($f,'include(\'../../resources/templates/_template.php\');');

fwrite($f,"\n?>");

header( 'Location: ../sitepages/' . $_POST["class"] . '/' . $_POST["id"].'.php' );


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

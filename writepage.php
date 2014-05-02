<?php

//fopen("test.php", "w") or die("could not write file");

//$tags = array("id","title","description","keywords","body","parent","key");

/*foreach($tags as $item) {

	echo "$" . $item . " = " . $_POST[$item] .";";
	echo "<br>";

}*/

$id = $_POST["id"]; // if this is going to work as a database, we will need a unique key
$title = $_POST["title"];
$description = $_POST["description"];
$keywords = $_POST["keywords"];
$body = $_POST["body"];

$parent = $_POST["parent"]; // top level page if none, otherwise, page title

define("THISISTHEKEY", $_POST["key"]);

include('template.php');

?>
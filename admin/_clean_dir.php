<?php
// pull in the menu
(@include '_menu.php') or die('Could not load menu.');

$dir = new DirectoryIterator(dirname(__FILE__));

foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
		  $fn = $fileinfo->getFilename();

      // skip the files starting with _ or ending in .txt
		  if (strpos($fn,'.txt') or substr( $fn, 0, 1 ) == "_") {
			  continue;
		  }
      // skip the files in the menu files
      elseif ($menu[$fn]!='') {
        continue;
      }
      // delete everything else
      else {
        unlink($fn) or die("One or more files were unable to be deleted.");
      }
    }
}

header( 'Location: ./page_creation.php' );

?>

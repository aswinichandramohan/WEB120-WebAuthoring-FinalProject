<?php

/*
portal-config.php 
Used to store all our configuration info
*/
//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename ($_SERVER['PHP_SELF']));

//echo THIS_PAGE;
//die;


switch(THIS_PAGE){

	case 'index.php':

		$title = "Aswini's WEB120 Title Page"; //This title is there in tab opened in that index page
		$logo = 'fa-home'; //this logo for index.php
		$PageID = 'Welcome'; //title in the h2 in header
	break;
	case 'contactme.php':

		$title = "Aswini's WEB120 Contact Page";
		$logo = 'fa-pencil-square-o';
		$PageID = 'Contact Aswini';
	break;


		default:
			$title = THIS_PAGE;
			$logo = 'fa-home';

}

//here we're creating a function to generate links and keep the highlight on the current page

$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "BIG";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/template.html'] = "Template";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Aswini";


/*
here we are creating a function to generate links and keep the highlight on the current page.


  <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Aswini</a></li>
 */

 function makeLinks($nav1)
 {
 	$myReturn = '';
 	foreach ($nav1 as $url => $text) {

 		if($url == THIS_PAGE){

 			// for highlighting

 			$myReturn .= "<li><a class=\"selected\" href=\"url\">$text</a></li>"; 

 		}else{

 			$myReturn .= "<li><a href=\"$url\">$text</a></li>";
 		}

 		
 	}
 	return $myReturn;
 }
?>
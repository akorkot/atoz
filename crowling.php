<?php


include('functions.php');
include('simple_html_dom.php');
 
// get DOM from URL or file
$html = file_get_html('data/a.html');


$i = 0;
// find all link
$output = array();
foreach($html->find('font a') as $e)  {
	echo $e->plaintext . "<br>";
}

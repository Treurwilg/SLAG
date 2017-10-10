<?php
// wabp.php
include("global.php");

class ActueelPage extends Page {
	
	function printPageContent() {
		echo file_get_contents("html/testKaartWABP.html");
		echo file_get_contents("html/wabp.html");	
	}
}


$page = new ActueelPage();
$page->render();
?>
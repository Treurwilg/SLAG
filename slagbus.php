<?php
// slagbus.php
include("global.php");

class ActueelPage extends Page {
	
	function printPageContent() {
		
		echo file_get_contents("html/slagbus.html");	
	}
}


$page = new ActueelPage();
$page->render();
?>
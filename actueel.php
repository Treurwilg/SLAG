<?php
// index.php
include("global.php");

class ActueelPage extends Page {
	
	function printPageContent() {
		
		echo file_get_contents("html/actueel.html");	
	}
}


$page = new ActueelPage();
$page->render();
?>
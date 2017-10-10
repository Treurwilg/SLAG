<?php
// klushanger.php
include("global.php");

class ActueelPage extends Page {
	
	function printPageContent() {
		
		echo file_get_contents("html/klushanger.html");	
	}
}


$page = new ActueelPage();
$page->render();
?>
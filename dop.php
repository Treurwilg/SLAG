<?php
// dop.php
include("global.php");

class ActueelPage extends Page {
	
	function printPageContent() {
		echo file_get_contents("html/kaartMetGebieden.html");
		echo file_get_contents("html/dop.html");	
	}
}


$page = new ActueelPage();
$page->render();
?>
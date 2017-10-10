<?php
/*verwerkbusaanvraag.php*/
include("global.php");

class ActueelPage extends Page {
	
	function printPageContent() {
		
		echo file_get_contents("html/bevestigbusaanvraag.html");	
	}
}


$page = new ActueelPage();
$page->render();
//print_r($_POST);
//echo realpath('realpath.php');
?>
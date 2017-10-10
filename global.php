<?php
// global.php
class Page {

	
	function htmlheadtags() {
		echo file_get_contents("html/htmlheadtags.html");	
	} 
	
	function titlestuff() {
		echo file_get_contents("html/titlestuff.html");
	}
	
	function headbodytags() {
		echo file_get_contents("html/headbodytags.html");	
	}
	
	function fbscript() {
		echo file_get_contents("html/fbscript.html");
	}
	
	function kopfoto() {
		echo file_get_contents("html/kopfoto.html");	
	}
	
	function nav() {
		echo file_get_contents("html/nav.html");
	}
	
	function footer() {
		echo file_get_contents("html/footer.html");	
	}
	
	function bodyhtmltags() {
		echo file_get_contents("html/bodyhtmltags.html");	
	}  
	
	function printPageContent(){/*abstracte functie*/} 
	
	function render() {
		
		$this->htmlheadtags();
		$this->titlestuff();
		$this->headbodytags();
		$this->fbscript();
		$this->kopfoto();
		$this->nav();
		$this->printPageContent();
		$this->footer();	
		$this->bodyhtmltags();
	}
	
}
?>
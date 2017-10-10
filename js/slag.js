window.onload = function() {
	var presentPage = window.location.href.split("/").pop();
	var activeButton = document.getElementsByClassName("active");
	activeButton[0].setAttribute("class", "passive");
	var passive = document.getElementsByClassName("passive");
	var referredPage = "";
	if (presentPage.length != 0) {
		for (var i = 0; i < passive.length; i++) {
			referredPage = passive[i].firstChild.href.split("/").pop();		
			if(referredPage == presentPage){
				passive[i].setAttribute("class", "active");		
			}
		}
	} else {
		for (var i = 0; i < passive.length; i++) {	
			if (passive[i].firstChild.href.split("/").pop() == "welkom") {
				passive[i].setAttribute("class", "active");	
			}
		}
	}
}
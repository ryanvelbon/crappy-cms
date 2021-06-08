var navbarH = document.getElementById("navbar").offsetHeight;
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
	var currentScrollPos = window.pageYOffset;
	if (currentScrollPos > prevScrollpos && currentScrollPos > navbarH) {
		document.getElementById("navbar").style.top = "-"+navbarH+"px";
	} else {
		document.getElementById("navbar").style.top = "0";
	}
	prevScrollpos = currentScrollPos;
}
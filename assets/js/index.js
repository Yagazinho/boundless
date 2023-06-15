let navbar = document.getElementById("navigation");

let shouldStick = navbar.offsetTop;

function addOrRemoveStickyClass() {
	if (window.pageYOffset >= shouldStick) {
		navbar.classList.add("sticky-top");
	} else {
		navbar.classList.remove("sticky-top");
	}
}

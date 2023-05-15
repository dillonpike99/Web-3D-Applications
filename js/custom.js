$(document).ready(function(){
	Fancybox.bind("[data-fancybox]", { });

	setTheme();
});

function setTheme() {
	if (localStorage.getItem("theme") === null) {
		localStorage.theme = "dark";
		document.getElementById("page-theme").setAttribute("href", "../css/dark.css");
		document.getElementById("light-theme-button").style.display = "none";
	} else {
		if (localStorage.theme == "dark") {
			document.getElementById("page-theme").setAttribute("href", "../css/dark.css");
			document.getElementById("light-theme-button").style.display = "none";
		} else {
			document.getElementById("page-theme").setAttribute("href", "../css/light.css");
			document.getElementById("dark-theme-button").style.display = "none";
		}
	}
}

function switchTheme() {
	if (localStorage.theme == "dark") {
		localStorage.theme = "light";
		document.getElementById("page-theme").setAttribute("href", "../css/light.css");
		document.getElementById("dark-theme-button").style.display = "none";
		document.getElementById("light-theme-button").style.display = "block";
	} else {
		localStorage.theme = "dark";
		document.getElementById("page-theme").setAttribute("href", "../css/dark.css");
		document.getElementById("light-theme-button").style.display = "none";
		document.getElementById("dark-theme-button").style.display = "block";
	}
}

function drinkSwap(selected)
{
	if (!(selected == "coca_cola" || selected == "sprite" || selected == "dr_pepper")) {
		selected = "coca_cola";
	}

	window.history.replaceState(null, null, "?d=" + selected);
	if (selected == "coca_cola") {
		document.getElementById("title").innerHTML = "Coca Cola Model";
	} else if (selected == "sprite") {
		document.getElementById("title").innerHTML = "Sprite Model";
	} else {
		document.getElementById("title").innerHTML = "Dr Pepper Model";
	}

	
	document.getElementById("coca_cola-card").style.display = "none";
	document.getElementById("sprite-card").style.display = "none";
	document.getElementById("dr_pepper-card").style.display = "none";

	document.getElementById("coca_cola-history").style.display = "none";
	document.getElementById("sprite-history").style.display = "none";
	document.getElementById("dr_pepper-history").style.display = "none";

	$(document.getElementById(selected + "-card")).fadeIn();
	$(document.getElementById(selected + "-history")).fadeIn();
}

function getDrink()
{
	var urlParams = new URLSearchParams(window.location.search);
	var drink = urlParams.get("d");
	return drink;
}


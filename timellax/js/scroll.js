function calcParallax(tileheight, speedratio, scrollposition) {
	//    by Brett Taylor http://inner.geek.nz/
	//    originally published at http://inner.geek.nz/javascript/parallax/
	//    usable under terms of CC-BY 3.0 licence
	//    http://creativecommons.org/licenses/by/3.0/
	return (tileheight - (Math.floor(scrollposition / speedratio) % (tileheight+1)));
}
window.onload = function() {
	window.onscroll = function() {
		var posX = (document.documentElement.scrollLeft) ? document.documentElement.scrollLeft : window.pageXOffset;
		var ground = document.getElementById('background');
		var groundparallax = calcParallax(5000, 12, posX);
                // to move the background veritcally on horizontal scroll
		//ground.style.backgroundPosition = "0 " + groundparallax + "px"; 
                // to move the background horizontally on horizontal scroll
                ground.style.backgroundPosition = groundparallax + "px 0";
		var clouds = document.getElementById('parallax');
		var cloudsparallax = calcParallax(5000, 3, posX);
                // to move background image vertically on horizontal scroll
		//clouds.style.backgroundPosition = "0 " + cloudsparallax + "px"; 
		// to move background image horizontally on horizontal scroll
                clouds.style.backgroundPosition = cloudsparallax + "px 0";
	}
}
/*
 *  Written By: Mike Newell
 *  Mike@iwearshorts.com
 *  http://iwearshorts.com/
 *
 *  No license - Feel free to copy.
 *
 */
$(window).load(function () {

/* 	console.log("hello"); */
 
    var layers = $('.mover').get();
    var layersCount = layers.length;
    var master = [];
    var tempPos;
    for(var i = 0; i < layersCount; i++) {
       master[i] = {
           speed : 1 - (i / layersCount),
           pos : $(layers[i]).position()
           
       }
 
    }
    
    for(var g = 0; g < layersCount; g++) {
       
       tempPos = $(layers[g]).position();
       console.log('element: ' + g + ' position top: ' + tempPos.left);
 
    }
 
    var top;
    var left;
    var winWidth;
    var docWidth;
    var winHeight;
    var percentLeft;
    var percentTop;
    var absPercent;
    
    var percentLeftYear;
    var outputYear;
 
    winHeight = $(window).height();
    winWidth = $(window).width();
    docWidth = $(document).width();
    absPercent = (winWidth / docWidth);
 
   $(window).scroll(function () {
 
       top = $(this).scrollTop();
       left = $(this).scrollLeft();
       
       percentLeftYear = (left / docWidth);
       
       if(percentLeftYear < .15 || percentLeftYear > .85) {
           outputYear = Math.round((1924 + (92 * percentLeftYear)));
       } else {
           outputYear = Math.round((1924 + (92 * percentLeftYear)) + 6);
       }
       
       
       
       $('#counter').text(outputYear);
 
       for(var t = 0; t < layersCount; t++) {
           percentLeft = ((left / docWidth) * master[t].speed);
           percentTop = (top / winHeight) * master[t].speed;
 
           var newPositionLeft = master[t].pos.left - ((percentLeft * master[t].pos.left) * 1.1);
           var newPositionTop = master[t].pos.top - (percentTop * master[t].pos.top);
           
/*            if($(layers[t]).hasClass('hasPosition')) { */
           		// allow fall through
/*            		alert('has position'); */
/*            		console.log("the entire entity is: " + layers[t]); */
/*            } else { */
/*            		console.log("the entire entity is: " + layers[t]); */



				if($(layers[t]).hasClass('hasPosition')) {
					console.log("This element has the position class: ");
				} else {
					console.log("this element does not have a position: ");
					$(layers[t]).delay(200).css({"left":newPositionLeft, "top":newPositionTop});
				}
           		







/*            } */
           
/*            console.log("the entire entity is: " + layers[t]); */
 
       }
       
//       alert("percent left: " + percentLeftYear);
       
   });
   
   $(".mover").hover(function() {
       $(this).css({"z-index" : "2000"});
   }, function () {
       $(this).css({"z-index" : "998"});
   });
   
   
});
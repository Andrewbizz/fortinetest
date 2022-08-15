/* hide if i scroll down 

var prevScrollpos = window.pageYOffset ;
window.onscroll = function() {
	var currentScrollpos = window.pageYOffset;
	if (prevScrollpos > currentScrollpos) {
		document.getElementById("navbar") .style.top="0";
	}
	else{
		document.getElementById("navbar") .style.top="-150px";
	}
	
	prevScrollpos = currentScrollpos;
}
*/

 /*window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
    document.getElementById("navbar").addClass("stiicky");
  } else {
    document.getElementById("navbar").removeClass("stiicky");
  }
}
*/
 

$(window).scroll(function(){
	if (window.scrollY > 50) {
		$("#navbar").addClass("stiicky");
	} else {
		$('#navbar').removeClass("stiicky");
	}
});



 
	$('window').on('load', function() {
  $('.beep').addClass('fadeIn');  
  
  
});
	
	

    var myVar;

function loader() {
    myVar = setTimeout(showPage, 6000);
}

function showPage() {
document.getElementById("loader").className += " none";

}



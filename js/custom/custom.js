/*========================================== MASTER JAVASCRIPT ===================================================================

	Project     :	HOTELBOOKING SITE TEMPLATE
	Version     :	1.0
	Last Change : 	16/11/2019
	Primary Use :   HOTELBOOKING SITE TEMPLATE

=================================================================================================================================*/

$(document).ready(function () {
	"use strict"; //Start of Use Strict
	var menu_li = $('.navbar-nav li a');
	var collapse = $('.navbar-collapse');
	var top_nav = $('.navbar-menu');
	
	/* Add & Remove active class in Menu and Submenu based on url(location) Start*/
        var url = window.location;
    // Will only work if string in href matches with location
        $('ul.navbar-nav a[href="' + url + '"]').parent().addClass('active');

    // Will also work for relative and absolute hrefs
        $('ul.navbar-nav a').filter(function () {
            return this.href == url;
		}).parent().addClass('active').parent().parent().addClass('active');

	
	 //NUMBER COUNTING
	var counter = $('.count-num');
	if (counter.length) { 
		counter.counterUp({
			delay: 10,
			time: 1000
		});
	}
	
	
	/* function reveal() {
	  var reveals = document.querySelectorAll(".animate-scroll");
	  
	  console.log('reveals');

	  for (var i = 0; i < reveals.length; i++) {
		var windowHeight = window.innerHeight;
		var elementTop = reveals[i].getBoundingClientRect().top;
		var elementVisible = 10;	
			
		var win = $(window);	
		var docViewTop = $(window).scrollTop();
		var docViewBottom = docViewTop + $(window).height();
		var elemTop = $(reveals[i]).offset().top;
		var elemBottom = elemTop + $(reveals[i]).height();

		//if (elementTop < windowHeight - elementVisible) {
		if ((win.scrollTop() + win.height()  - 50) >= elemBottom){
		  //reveals[i].classList.remove("animate__fadeInUp");
		  reveals[i].classList.add("animate__animated");
		  reveals[i].classList.add("animate__fadeInUp");
		} else {
		  //reveals[i].classList.remove("animate__animated");
		}
	  }
	}
	window.addEventListener("scroll", reveal); */
	
	$.fn.isInViewport = function() {
		var elementVisible = 100;	
		var elementTop = $(this).offset().top;
		var elementBottom = elementTop + $(this).outerHeight();

		var viewportTop = $(window).scrollTop() - elementVisible;
		var viewportBottom = viewportTop + $(window).height();		

		return elementBottom > viewportTop && elementTop < viewportBottom;
	};


	
		$(window).bind('scroll load', function () {
			if( $('.animate-scroll').length ){ 
				$(".animate-scroll").each(function(){
				  if ($(this).isInViewport()) {
					if( $(this).data('animate') ){
						if( !$(this).hasClass( $(this).data('animate') ) ){
							$(this).addClass( $(this).data('animate') );
						}			
					}		
				  }
				});
			}
		});
	
});
/*========================================== MASTER JAVASCRIPT ===================================================================

	Project : RAACK SITE TEMPLATE 
	Version : 1.0 
	Primary Use : RAACK SITE TEMPLATE

=================================================================================================================================*/

$(document).ready(function () {
	"use strict"; //Start of Use Strict

	lazyload();

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
	
	$.fn.isOutViewport = function() {
		var elementVisible = 0;	
		var elementTop = $(this).offset().top;
		var elementBottom = elementTop + $(this).outerHeight();
		var viewportTop = $(window).scrollTop() - elementVisible;
		return viewportTop > elementBottom;
	};
	
	$.fn.isInViewport = function() {
		var elementVisible = 50;	
		var elementTop = $(this).offset().top;
		var elementBottom = elementTop + $(this).outerHeight();

		var viewportTop = $(window).scrollTop() - elementVisible;
		var viewportBottom = viewportTop + $(window).height();	
		return elementBottom > viewportTop && elementTop < viewportBottom;
	};
	
	$(window).bind('scroll load', function () {
		if( $('.animate-scroll').length ){ 
			$(".animate-scroll").each(function(){
			if ($(this).isInViewport() || $(this).isOutViewport() ) {
				if( $(this).data('animate') ){
					if( !$(this).hasClass( $(this).data('animate') ) ){
						$(this).addClass( $(this).data('animate') );
					}			
				}		
			  }
			});
		}
	});

	//POPUP FORM 
	$(".btn-hst-pop-modal").click(function() {        
        $($(this).attr('href')).parent().show();
        $($(this).attr('href')).show(500).css('display', 'inline-block');
        return false;
    });
    $(".close-hst-pop-modal").click(function() {       
        $($(this).parent('.hst-pop-modal')).parent().hide();
        $($(this).parent('.hst-pop-modal')).hide(400);
        return false;
    });
	
	
	// YOUTUBE BACKGROUND VIDEO FUNCTION	  
    var player = $('.player');
    if (player.length) {
        player.mb_YTPlayer();
    }
	
	$(window).bind('resize load', function () {
		if( $('#yt-shorts').length ){ 
			var $ytShorts = $("#yt-shorts");
			var frameHeight = $ytShorts.innerHeight();
			$ytShorts.find('.yt-shorts-frame').each(function(){
				$(this).css('height', frameHeight);	
			});					
		}
	});
	
	$(document).on( 'click', "#yt-shorts .owl-prev, #yt-shorts .owl-next, #yt-shorts .owl-page", function(){
		$(document).find('#yt-shorts .yt-shorts-frame').each(function(index) {
			$(this).attr('src', $(this).attr('src'));
		});
		return false;
	});
});
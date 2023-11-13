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
	
	/* Auto Play YT Video on section reach view port */
	$(window).bind('scroll load', function () {		
		if( $(document).find('.loadframeLazy').length ){ 
			$(document).find('.loadframeLazy').each(function(index){
				if ($(this).isInViewport() || $(this).isOutViewport() ) {						
					if( $(this).attr('data-loadframe') == 'pause'){						
						$(this).attr('src', $(this).attr('src')+'&autoplay=1');	
						$(this).attr('data-loadframe', 'play');
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

	var splide = $('.splide');
	if (splide.length) {
	const splide = new Splide('.splide', {
      type: 'fade',
      rewind: true,
      pagination: false,
	  speed : 400,
      interval : 5000,
	  autoplay : true,
	  arrows : false,
	  drag : true
    });

    splide.mount();
	}
	
	
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

	var accord = $(".faq-accord");
    	if(accord.length){
    	  var i = 0; 
    	  accord.each(function(){
		var all_panels = $(this).find('.faq-ans').hide();  
		
		var all_titles = $(this).find('.faq-ques'); 
		
		$(this).find('.faq-ans.active').slideDown();    	
		
		all_titles.on("click", function() { 
		
		var acc_title = $(this);
		var acc_parent = $(this).parents('.faq-container');
		var acc_ans = acc_title.next(); 
		
			if (!acc_ans.hasClass('active')) {
				acc_parent.find('.faq-ques').removeClass('active');  
				acc_parent.find('.faq-ans').removeClass('active').slideUp();
				
				acc_title.addClass('active');  
				acc_ans.addClass('active').slideDown(); 
				} else {
					all_panels.removeClass('active').slideUp();
					all_titles.removeClass('active'); 
				} 
		});
		});        
	}
	
	/* Home Page - Header Slider Video
	if( $('#headerSlideVideo').length ){ 
		var myvid = document.getElementById('headerSlideVideo');
		/* var myvids = [
		  "https://raackdance.com/videos/2.mp4", 
		  "https://raackdance.com/videos/3.mp4",
		  "https://raackdance.com/videos/4.mp4"
		  ]; 
		  
		 var myvids = []; 
		 var myvids2 = myvid.getAttribute('data-videos').split(",");
		 myvids = myvids2;	 
		  
		var activeVideo = 0;

		myvid.addEventListener('ended', function(e) {		
		
		 myvid.classList.remove("animate__fadeIn"); 
		 myvid.classList.add("animate__fadeOut"); 
		 
		  // update the active video index
		  activeVideo = (++activeVideo) % myvids.length;

		  // update the video source and play
		  myvid.src = myvids[activeVideo];	
		 
		  
		  myvid.classList.remove("animate__fadeOut"); 
		  myvid.classList.add("animate__fadeIn"); 
		  myvid.play();
		});
	} */
 
	   //CONTACT FORM VALIDATION	
	   if ($('.contact-form').length) {
        $('.contact-form').each(function() {
            $(this).validate({
                errorClass: 'error',
                submitHandler: function(form) {
                    $.ajax({
                        type: "POST",
                        url: "mail/mail.php",
                        data: $(form).serialize(),
                        success: function(data) {
							console.log(data);
                            if (data) {
								$(form)[0].reset();
                                $('.successMessage').html('Mail Sent Successfully!!!');
                                $('.successMessage').show();
                                $('.successMessage').delay(3000).fadeOut();
                            } else {
                                $('.failMessage').html(data);
                                $('.failMessage').show();
                                $('.failMessage').delay(3000).fadeOut();
                            }
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) {
                            $('.failMessage').html(textStatus);
                            $('.failMessage').show();
                            $('.failMessage').delay(3000).fadeOut();
                        }
                    });
                }
            });
        });
    }

	$('.phonenumber').each(function(e) {
	  //called when key is pressed in textbox
	  $(this).keypress(function(e) {
		//if the letter is not digit then display error and don't type anything
		if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
		   return false;
	   }
	  }); 
	});  
	  
/* view class scedule action */
	if ($('.faq').length) {
	const question = document.querySelector('.faq .question');
	const answer = document.querySelector('.faq .answer');

	question.addEventListener('click', () => {
		if (answer.style.display === 'none' || answer.style.display === '') {
			answer.style.display = 'block';
		} else {
			answer.style.display = 'none';
		}
	});
	}
});

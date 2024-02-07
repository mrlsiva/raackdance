// JavaScript Document
$(document).on('ready', function() {
	
	// HOME HEADER CAROUSEL
	 var team = $(".header-testimonial");	 //my carousel is user defind
	  team.owlCarousel({
		loop: true,
		items:1,
        dots:false,
		nav:true, 
		smartSpeed: 400,
		autoPlay: 2000,
		autoplay: true,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		rewindNav:false,
		lazyLoad:true,
		rewind:false,
        navText:["<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z'/></svg>","<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'/></svg>"],
		responsive: {
			0: {
			  items: 1
			},
			600: {
			  items: 1
			},
			1000: {
			  items: 1
			}
		  }
	  });


	  
	  // CLIENT TESTMONIAL CAROUSEL
	  var team = $(".client-testimonial");	 //my carousel is user defind
	  team.owlCarousel({
		loop: true,
		items:1,
        dots:false,
		nav:true, 
		smartSpeed: 400,
		autoPlay: 2000,
		autoplay: true,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		rewindNav:false,
		lazyLoad:true,
		rewind:false,
        navText:["<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z'/></svg>","<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'/></svg>"],
		responsive: {
			0: {
			  items: 1
			},
			600: {
			  items: 1
			},
			1000: {
			  items: 1
			}
		  }
		  
	  });
	  

	  var team = $("#team-slider");	 //my carousel is user defind
	  team.owlCarousel({
		loop: true,
		items:4,
        dots:false,
		nav:true, 
		smartSpeed: 400,
		autoPlay: 2000,
		autoplay: true,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		rewindNav:false,
		lazyLoad:true,
		rewind:false,
        navText:["<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z'/></svg>","<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'/></svg>"],
		responsive: {
			0: {
			  items: 1
			},
			600: {
			  items: 2
			},
			1000: {
			  items: 4
			}
		  }
		  
	  });

	var team = $("#header-testimonial1");	 //my carousel is user defind
	  team.owlCarousel({
		items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
		itemsMobile:[575,1],
        pagination:true,
        navigation:true,
        navigationText:["<img src='>","<span>SWIPE RIGHT</span> <svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'/></svg>"],
        autoPlay:true
	  });  

	  
	  var team = $("#yt-shorts");	 //my carousel is user defind
	  team.owlCarousel({
		items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
		itemsMobile:[575,1],
        pagination:true,
        navigation:true,
        navigationText:["<img src='./resources/images-raack/icons/arrow-left.png'>","<img src='./resources/images-raack/icons/arrow-right.png'>"],
        autoPlay:false
	  }); 
	  
	  
	  // Header CAROUSEL
	  var team = $("#logo-slider");	 //my carousel is user defind
	  team.owlCarousel({
		items:5,
        itemsDesktop:[1000,4],
        itemsDesktopSmall:[979,3],
        itemsTablet:[768,3],
		itemsMobile:[575,2],
        pagination:false,
        navigation:false,
		navigationText:["<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z'/></svg>","<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'/></svg>"],
        autoPlay:true
		  
	  });
	  
	  // Header CAROUSEL
	  var team = $("#logo-slider2");	 //my carousel is user defind
	  team.owlCarousel({
		items:4,
        itemsDesktop:[1000,4],
        itemsDesktopSmall:[979,3],
        itemsTablet:[768,3],
		itemsMobile:[575,2],
        pagination:false,
        navigation:false,
		navigationText:["<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z'/></svg>","<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'/></svg>"],
        autoPlay:true
		  
	  });
	  
	  // Header CAROUSEL
	  var team = $("#logo-slider3");	 //my carousel is user defind
	  team.owlCarousel({
		items:4,
        itemsDesktop:[1000,4],
        itemsDesktopSmall:[979,3],
        itemsTablet:[768,3],
		itemsMobile:[575,2],
        pagination:false,
        navigation:false,
		navigationText:["<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z'/></svg>","<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'/></svg>"],
        autoPlay:true
		  
	  });
	  
	  // Header CAROUSEL
	  var team = $("#logo-slider4");	 //my carousel is user defind
	  team.owlCarousel({
		items:4,
        itemsDesktop:[1000,4],
        itemsDesktopSmall:[979,3],
        itemsTablet:[768,3],
		itemsMobile:[575,2],
        pagination:false,
        navigation:false,
		navigationText:["<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z'/></svg>","<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'/></svg>"],
        autoPlay:true
		  
	  });
	  
	  // Header CAROUSEL
	  var team = $("#logo-slider5");	 //my carousel is user defind
	  team.owlCarousel({
		items:4,
        itemsDesktop:[1000,4],
        itemsDesktopSmall:[979,3],
        itemsTablet:[768,3],
		itemsMobile:[575,2],
        pagination:false,
        navigation:false,
		navigationText:["<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z'/></svg>","<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'/></svg>"],
        autoPlay:true
		  
	  });
	  // Header CAROUSEL
	  var team = $("#logo-slider6");	 //my carousel is user defind
	  team.owlCarousel({
		items:4,
        itemsDesktop:[1000,4],
        itemsDesktopSmall:[979,3],
        itemsTablet:[768,3],
		itemsMobile:[575,2],
        pagination:false,
        navigation:false,
		navigationText:["<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z'/></svg>","<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'/></svg>"],
        autoPlay:true
		  
	  });
	  // Header CAROUSEL
	  var team = $("#col-carousel");	 //my carousel is user defind
	  team.owlCarousel({
		items:1,
        itemsDesktop:[1000,3],
        itemsDesktopSmall:[991,2],
        itemsTablet:[767,1],
		itemsMobile:[575,1],
        pagination:false,
        navigation:true,
		navigationText:["<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z'/></svg>","<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'/></svg>"],
        autoPlay:true
		  
	  });
	   
	  // EVENT LOGO SLIER
	  var team = $("#event-logo-slider");	 //my carousel is user defind
	  team.owlCarousel({
		items:5,
        itemsDesktop:[1000,4],
        itemsDesktopSmall:[979,3],
        itemsTablet:[768,3],
		itemsMobile:[575,2],
        pagination:false,
        navigation:false,
		navigationText:["<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z'/></svg>","<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'/></svg>"],
        autoPlay:true
		  
	  });
	  // EVENT GALLERY SLIDER
	  var team = $("#event-gallery-slider");	 //my carousel is user defind
	  team.owlCarousel({
		items:4,
        itemsDesktop:[1000,4],
        itemsDesktopSmall:[979,3],
        itemsTablet:[768,3],
		itemsMobile:[575,2],
        pagination:false,
        navigation:true,
		navigationText:["<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z'/></svg>","<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'/></svg>"],
        autoPlay:true
		  
	  });
	 
	  // Custom Navigation Events
	  $(".next").click(function(){
		owl.trigger('owl.next');
	  })
	  $(".prev").click(function(){
		owl.trigger('owl.prev');
	  })
	  $(".play").click(function(){
		owl.trigger('owl.play',500); //owl.play event accept autoPlay speed as second parameter
	  })
	  $(".stop").click(function(){
		owl.trigger('owl.stop');
	  })
	  
});

@extends('layouts.base')
@section('content') 

	<!--================================= SLIDER HEADER START ==========================================-->      
      <section class="animate-scroll" data-animate="animate__animated animate__fadeInUp">
         <div class="container-fluid p-0">
            <div class="header-testimonial owl-carousel owl-theme" id="my-carousel">
               <div class="item">
                  <img class="d-block w-100" src="{{asset('/resources/images-raack/gif/home-page-banner1.gif')}}" alt="Dance academy in Chennai">
               </div>
               
               <div class="item">
                  <img class="d-block w-100" src="{{asset('/resources/images-raack/gif/home-page-banner2.gif')}}" alt="Dance classes in Thoraipakkam">
               </div>

               <div class="item">
                  <img class="d-block w-100" src="{{asset('/resources/images-raack/gif/home-page-banner3.gif')}}" alt="Dance classes in Mylapore">
               </div>

               <div class="item">
                  <img class="d-block w-100" src="{{asset('/resources/images-raack/gif/home-page-banner4.gif')}}" alt="Dance classes in old perungalathur">
               </div>

            </div>
         </div>
      </section>
      <!--================================= SLIDER HEADER END ==========================================-->
      <!--============================= COUNTER AREA START ======================-->
      <section class="floral-space animate-scroll" data-animate="animate__animated animate__fadeInUp">
         <div class="container">
            <div class="row rowsafari">
               <div class="col-lg-3 col-sm-6 col-md-6 col-12 res-text-center res-row-margin-bottom991">
                  <div class="counter-box counter-width">
                     <p class="subtitle"><span class="count-num">19</span><sup>+</sup></p>
                     <h5 class="title-counterup text-capitalize">Dance<br> Studios</h5>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-6 col-12 res-text-center res-row-margin-bottom991">
                  <div class="counter-box counter-width">
                     <p class="subtitle"><span class="count-num">100000</span><sup>+</sup></p>
                     <h5 class="title-counterup text-capitalize">Students<br> Trained</h5>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-6 col-12 res-text-center res-row-margin-bottom">
                  <div class="counter-box counter-width">
                     <p class="subtitle"><span class="count-num">4000</span><sup>+</sup></p>
                     <h5 class="title-counterup text-capitalize">Events<br> Performed</h5>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-6 col-12 res-text-center ">
                  <div class="counter-box counter-width">
                     <p class="subtitle"><span class="count-num">25</span></p>
                     <h5 class="title-counterup text-capitalize">Years of <br>Dance Expertise</h5>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--=============================== COUNTER AREA END ========================-->
      <!--=============================== ACADEMY AREA START =======================-->
      <section class="section-space section-white-bg animate-scroll" data-animate="animate__animated animate__fadeInUp">
         <div class="container">
            <div class="row section-heading wordtype-home">
               <div class="col-lg-7 col-md-7 col-12">
                  <h2 class="res-bot10 theme-color">RAACK 
					<span class="animate-typing theme-color font-weight300 academy-raack" data-animate-loop="true" data-type-speed="100" data-type-delay="100" data-remove-speed="50" data-remove-delay="500" data-cursor-speed="200">
						 Rhythm-frenzy |
						 Body language |
						 Dynamics |
						 Creativity |
						 Self expression
					  </span>
                     <!--<span class="theme-color font-weight300">Rhythm-frenzy</span>
                     <span class="theme-color font-weight300">Body language</span>
                     <span class="theme-color font-weight300">Dynamics</span>
                     <span class="theme-color font-weight300">Creativity</span>
                     <span class="theme-color font-weight300">Self expression</span> -->
                  </h2>
                  
                </div>
               <div class="clo-lg-3 col-md-3 col-8">
                  <p class=" intro-content res-bot10">Igniting passion, creativity, <br>and the love for movement<br>in every dancer.</p>
               </div>
               <div class="col-lg-2 col-md-2 col-4">
                  <img src="{{asset('/resources/images-raack/Ascent-Short.png')}}" alt="Ascent Short" class="float-right animate-scroll img-fluid" data-animate="animate__animated animate__zoomIn">
               </div>
            </div>
            <div class="row rowsafari align-items-center">
               <div class="col-lg-6 col-sm-12 col-md-12 col-12 res-width-padding-bottom">
                  <img src="{{asset('/resources/images-raack/682x674.png')}}" alt="Dance classes in Neelankarai" class="img-fluid animate-scroll" data-animate="animate__animated animate__zoomIn">
               </div>
               <div class="col-lg-6 col-sm-12 col-md-12 col-12">
                  <div>
                     <h4 class="section-margin-bottom font-weight600">The Amplifiers of Dance As a <br>Way of Life in <span class="theme-color font-weight900">South India</span></h4>
                     <p class="section-padding-bottom">Raack is an independent dance academy exclusively for Kids and Adults wishing to start and go a long way in their dance journey. Raack believes in creating movement-based art and commits in bringing out every individual’s uniqueness through the powerful expression of dance!</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--=============================== ACADEMY AREA END ======================-->
      <!--=============================== VIDEO AREA START =======================-->
      <section class="position-relative" id="video-section">
            <!-- <iframe class="loadframeLazy" width="100%" height="550" src="https://www.youtube.com/embed/2SdEYP04XOE?muted=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; autostop; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen data-loadframe="pause"></iframe> -->
            <video src="{{asset('/resources/images-raack/About Raack promo.mp4')}}" type="video/mp4" style="width: 100%; height: 550;" id="video" autoplay muted></video>
     </section>
	<script>
		 // Get the video element
	const video = document.getElementById('video');
	let isVideoInViewport = false;

	// Function to play the video
	function playVideo() {
		if (video.play) {
			video.play();
		}
	}

	// Function to pause the video
	function pauseVideo() {
		if (!video.paused) {
			video.pause();
		}
	}

	// Create an Intersection Observer
	const observer = new IntersectionObserver(entries => {
		entries.forEach(entry => {
			if (entry.isIntersecting) {
				// The section is in the viewport
				if (!isVideoInViewport) {
					// Play the video only when it initially scrolls in
					playVideo();
					isVideoInViewport = true;
				}
			} else {
				// The section is out of the viewport
				if (isVideoInViewport) {
					// Pause the video only when it initially scrolls out
					pauseVideo();
					isVideoInViewport = false;
				}
			}
		});
	});

	// Observe the video section
	observer.observe(document.getElementById('video-section'));

	</script>
      <!--=============================== VIDEO AREA END ======================-->

      <!--=============================== Entrepreneurship AREA START =======================-->
      <section class="section-space event-gallery-show section-white-bg">
         <div class="container"> 
            
            <div class="row rowsafari align-items-center" >
               <div class="col-lg-12 mx-auto text-center">
                  <div class="client-logo-slider">
                     <img src="{{asset('/resources/images-raack/Ascent-Short.png')}}" alt="Ascent-Short" class="img-fluid team-ul-img animate-scroll" data-animate="animate__animated animate__zoomIn">
                     <h2 class="mx-auto text-dark text-center section-grp-margin-bottom">OUR  <span class="theme-color font-weight400">PHILOSOPHY</span></h2>
                     <img src="{{asset('/resources/images-raack/Ascent-Short.png')}}" alt="Dance classes in sholinganallur" class="img-fluid team-ul-img-right animate-scroll animate__animated animate__zoomIn" data-animate="animate__animated animate__zoomIn">                  </div>
               </div>
               <div class="col-lg-6 col-sm-12 col-md-12 col-12 res-width-padding-bottom">
                  
                  <div>
                     <h5 class="res-bot10 text-transform-lowercase font-weight400">
                        <span class="txt-dark font-weight900">Our Philosophy is Simple</span></h5>
                     <p class="section-padding-bottom justify">Think of dance as fluid like water, and style as its adaptable vessel. At Raack, we ensure our students grasp the essence of dance, enabling them to seemlessly adapt to various forms, all while celebrating its inherent beauty."</p>
                    <h5 class="res-bot10 text-transform-lowercase font-weight400">The magic is in the <svg xmlns="http://www.w3.org/2000/svg" class="theme-color" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M464 6.1c9.5-8.5 24-8.1 33 .9l8 8c9 9 9.4 23.5 .9 33l-85.8 95.9c-2.6 2.9-4.1 6.7-4.1 10.7V176c0 8.8-7.2 16-16 16H384.2c-4.6 0-8.9 1.9-11.9 5.3L100.7 500.9C94.3 508 85.3 512 75.8 512c-8.8 0-17.3-3.5-23.5-9.8L9.7 459.7C3.5 453.4 0 445 0 436.2c0-9.5 4-18.5 11.1-24.8l111.6-99.8c3.4-3 5.3-7.4 5.3-11.9V272c0-8.8 7.2-16 16-16h34.6c3.9 0 7.7-1.5 10.7-4.1L464 6.1zM432 288c3.6 0 6.7 2.4 7.7 5.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8-14.8 51.7c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8l-14.8-51.7-51.7-14.8c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8 14.8-51.7c1-3.4 4.1-5.8 7.7-5.8zM87.7 69.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8L87.7 218.2c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8L57.5 166.5 5.8 151.7c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8L72.3 69.8c1-3.4 4.1-5.8 7.7-5.8s6.7 2.4 7.7 5.8zM208 0c3.7 0 6.9 2.5 7.8 6.1l6.8 27.3 27.3 6.8c3.6 .9 6.1 4.1 6.1 7.8s-2.5 6.9-6.1 7.8l-27.3 6.8-6.8 27.3c-.9 3.6-4.1 6.1-7.8 6.1s-6.9-2.5-7.8-6.1l-6.8-27.3-27.3-6.8c-3.6-.9-6.1-4.1-6.1-7.8s2.5-6.9 6.1-7.8l27.3-6.8 6.8-27.3c.9-3.6 4.1-6.1 7.8-6.1z"/></svg><br><span class="theme-color font-weight900">Magic behind the Movement</h5>
                  </div>
               </div>
               <div class="col-lg-6 col-sm-12 col-md-12 col-12 res-width-padding-bottom res-left-mar0">
                  <img src="{{asset('/resources/images-raack/Our-Philosophy.png')}}" alt="Dance classes in saidapet" class="img-fluid animate-scroll" data-animate="animate__animated animate__zoomIn" style="border-radius: 66px;"> 
               </div>
            </div>   
         </div>
      </section>
      <!--=============================== ACADEMY AREA END ======================-->
	  <!--================================= TEAM AREA START =======================-->
      <section class="section-space sec-team section-white-bg" id="team" data-animate="animate__animated animate__fadeInUp">
         <div class="container">
            <div class="row section-heading align-items-center">
               <div class="client-logo-slider">
                  <img src="{{asset('/resources/images-raack/Ascent-Short.png')}}" alt="Ascent-Short" class="img-fluid team-ul-img animate-scroll" data-animate="animate__animated animate__zoomIn">
                  <h2 class="mx-auto text-dark text-center section-grp-margin-bottom">THE CORE <span class="theme-color font-weight400">TEAM</span></h2>
                  <img src="{{asset('/resources/images-raack/Ascent-Short.png')}}" alt="Ascent-Short" class="img-fluid team-ul-img-right animate-scroll" data-animate="animate__animated animate__zoomIn">
               </div>
            </div>
            <div id="team-slider" class="owl-carousel owl-theme ">
               <div class="item text-center res-text-center">
                  <div class="res-team-circle res-team-area-width res-width-team-area res-mar-right res-team-area-right">
                     <div class="our-team">
                        <div class="pic img-margin-bottom core-team-bg">
                           <img src="{{asset('/resources/images-raack/core-team/team-2.png')}}" alt="Dance classes in Mogappair" class="feature-circle-img img-fluid">
                        </div>
                     </div>
                     <div class="pos-relative">
                        <h6 class="text-uppercase font-weight600"><a href="#" class="txt-dark">Ramana Balaji</a></h6>
                        <h6 class="text-uppercase theme-color font-weight900">Founder</h6>
                        <p class="core-para-txt">I strongly believe that <b>‘Your thoughts create your reality’</b> Your thought flows freely every instant, similar to your dance moves. There is no limit in innovating and hence have a whole path of creativity to own up your dance style</p>
                        <p class="core-para-txt"><b>Raack is here to act as a bridge connecting you with the element of dance within you</b></p>
                     </div>
                  </div>
               </div> 
			   
               <div class="item text-center res-text-center">
                  <div class="res-team-circle res-team-area-width res-width-team-area res-mar-left res-team-area-left">
                     <div class="our-team">
                        <div class="pic img-margin-bottom core-team-bg">
                           <img src="{{asset('/resources/images-raack/core-team/Kavi-chakravarthi.png')}}" alt="Dance classes in Tambaram" class="feature-circle-img img-fluid">
                        </div>
                     </div>
                     <div class="pos-relative">
                        <h6 class="text-uppercase font-weight600"><a href="#" class="txt-dark">Kavi Chakravarthy</a></h6>
                        <h6 class="text-uppercase theme-color font-weight900">Curriculum Head</h6>
                        <p class="core-para-txt"><b>Our vision is to cultivate a curriculum that nurtures a profound understanding of self-expression and fosters creative performance among our students.</b></p>
                        <p class="core-para-txt">Each program is designed to unlock the innate potential within every dancer, elevating their skills to meet and exceed international standards while honoring and reinforcing our rich cultural roots. We aim to craft an educational journey that encourages innovation, artistic depth, and technical excellence, empowering our students to shine on the global stage while cherishing our heritage</p>
                     </div>
                  </div>
               </div>
			   
               <div class="item text-center res-text-center">
                  <div class="res-team-circle res-team-area-width res-width-team-area res-mar-right res-team-area-right">
                     <div class="our-team">
                        <div class="pic img-margin-bottom core-team-bg">
                           <img src="{{asset('/resources/images-raack/core-team/Gugan.png')}}" alt="Dance classes in kilpauk" class="feature-circle-img img-fluid">
                        </div>
                     </div>
                     <div class="pos-relative">
                        <h6 class="text-uppercase font-weight600"><a href="#" class="txt-dark">Gugan</a></h6>
                        <h6 class="text-uppercase theme-color font-weight900">Instructor Head</h6>
                        <p class="core-para-txt"><b>Our vision is to equip our instructors with versatile teaching methods, expert technique, and tailored creativity for diverse age groups.</b></p>
                        <p class="core-para-txt">We empower them as a torch bearer of tradition, technique, creativity, and mentorship. Our goal is to enrich the dance community with skilled, passionate, and globally competitive artists while preserving Raack's essence as 'The Place for Self-Expression,' blending innovation and excellence in dance education.</p>
                     </div>
                  </div>
               </div>
               <div class="item text-center">
                  <div class="res-team-circle res-team-area-width res-width-team-area res-mar-left res-team-area-left">
                     <div class="our-team">
                        <div class="pic img-margin-bottom core-team-bg">
                           <img src="{{asset('/resources/images-raack/core-team/Vijay-Kumar.png')}}" alt="Dance classes in Keelkatalai" class="feature-circle-img img-fluid">
                        </div>
                     </div>
                     <div class="pos-relative">
                        <h6 class="text-uppercase font-weight600"><a href="#" class="txt-dark">Vijay Kumar</a></h6>
                        <h6 class="text-uppercase theme-color font-weight900">Counsellor Head</h6>
                        <p class="core-para-txt"><b>Our vision is to equip our counselors with comprehensive knowledge of each course, enabling them to adeptly guide patrons towards courses that best suit their individual needs.</b></p>
                        <p class="core-para-txt">We are committed to maintaining a secure and welcoming environment for parents and students alike. Our goal is to foster confident, well-balanced individuals who excel in their artistic pursuits, championing self-discovery and holistic well-being within our dance community."</p>
                     </div>
                  </div>
               </div>
               <div class="item text-center res-text-center">
                  <div class="res-team-circle res-team-area-width res-width-team-area res-mar-left res-team-area-left">
                     <div class="our-team">
                        <div class="pic img-margin-bottom core-team-bg">
                           <img src="{{asset('/resources/images-raack/core-team/Vibinesh.png')}}" alt="Dance classes in sholinganallur" class="feature-circle-img img-fluid">
                        </div>
                     </div>
                     <div class="pos-relative">
                        <h6 class="text-uppercase font-weight600"><a href="#" class="txt-dark">Vibinesh Vijayan</a></h6>
                        <h6 class="text-uppercase theme-color font-weight900">Event Head</h6>
                        <p class="core-para-txt"><b>Our vision is to curate and execute captivating and culturally enriching events that celebrate the diversity, talent, and artistry within our dance academy.</b></p>
                        <p class="core-para-txt">We aim to create immersive experiences that not only entertain but also educate and inspire our audience. By meticulously planning and orchestrating events that showcase the brilliance of our dancers while fostering a sense of community and cultural pride, we strive to establish our academy as a beacon of creativity and excellence in the world of performing arts."</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <style>
            .core-para-txt {
               padding-top: 10px;
               font-size: 14px;
               text-align: justify;
               line-height: 20px;
            }
         </style>
      </section>
      <!--================================ TEAM AREA END ============================-->
      <!--=============================== DIVERSE RANGE OF COURSES AREA START =======================-->
      <section class="position-relative section-space animate-scroll" data-animate="animate__animated animate__fadeInUp">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 mx-auto text-center">
                  <h4 class="section-padding-bottom font-weight600">Registration for the academic year 2023-2024 are open now!</h4>
                  <div class="client-logo-slider">
                     <img src="{{asset('/resources/images-raack/Ascent-Short.png')}}" alt="Ascent-Short" class="img-fluid team-ul-img animate-scroll" data-animate="animate__animated animate__zoomIn">
                     <h2 class="mx-auto text-dark text-center section-grp-margin-bottom">OUR <span class="theme-color font-weight400">COURSES</span></h2>
                     <img src="{{asset('/resources/images-raack/Ascent-Short.png')}}" alt="Ascent-Short" class="img-fluid team-ul-img-right animate-scroll" data-animate="animate__animated animate__zoomIn">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--=============================== DIVERSE RANGE OF COURSES AREA END ======================-->
      <!--================================= CLIENT LOGO AREA START =======================-->
      <section class="client-logo-border animate-scroll" style="padding-top: 30px; padding-bottom: 30px;" data-animate="animate__animated animate__fadeInUp">
         <div class="container">
            <div id="logo-slider" class="owl-carousel owl-theme ">
               <div class="item text-center">
                  <div class="home-logo-alider">
                     <a <a href="{{ URL('/dance-classes-for-adults') }}">
                        <img src="{{asset('/resources/images-raack/client-logo-1.png')}}" alt="Dance classes in Kolathur" class="feature-circle-img img-fluid">
                        <img src="{{asset('/resources/images-raack/client-logo-1-clr.png')}}" alt="Dance classes in Guduvanchery" class="feature-circle-hover-image img-fluid">
                     </a>
                  </div>                  
               </div>
               <div class="item text-center">
                  <div class="home-logo-alider">
                     <a <a href="{{ URL('/dance-academy') }}">
                        <img src="{{asset('/resources/images-raack/client-logo-2-clr.png')}}" alt="Dance classes for kids Chennai" class="feature-circle-img img-fluid">
                        <img src="{{asset('/resources/images-raack/client-logo-2.png')}}" alt="Dance-schools-in-Chennai" class="feature-circle-hover-image img-fluid">
                     </a>
                  </div>  
               </div>
               <div class="item text-center">
                  <div class="home-logo-alider">
                     <a <a href="{{ URL('/dance-schools') }}">
                        <img src="{{asset('/resources/images-raack/client-logo-3-clr.png')}}" alt="Dance classes in Chennai" class="feature-circle-img img-fluid">
                        <img src="{{asset('/resources/images-raack/client-logo-3.png')}}" alt="Dance studios in Chennai" class="feature-circle-hover-image img-fluid">
                     </a>
                  </div> 
               </div>
               <div class="item text-center">
                  <div class="home-logo-alider">
                     <a <a href="{{ URL('/dance-classes') }}">
                        <img src="{{asset('/resources/images-raack/client-logo-4-clr.png')}}" alt="Dance academy in Chennai" class="feature-circle-img img-fluid">
                        <img src="{{asset('/resources/images-raack/client-logo-4.png')}}" alt="Dance classes in Thoraipakkam" class="feature-circle-hover-image img-fluid">
                     </a>
                  </div> 
               </div>
               <div class="item text-center">
                  <div class="home-logo-alider">
                     <a <a href="{{ URL('/dance-academy-chennai') }}">
                        <img src="{{asset('/resources/images-raack/client-logo-5-clr.png')}}" alt="Dance classes in Mylapore" class="feature-circle-img img-fluid">
                        <img src="{{asset('/resources/images-raack/client-logo-5.png')}}" alt="Dance classes in old perungalathur" class="feature-circle-hover-image img-fluid">
                     </a>
                  </div> 
               </div>
               <div class="item text-center">
                  <div class="home-logo-alider">
                     <a <a href="{{ URL('/dance-classes-for-kids') }}">
                        <img src="{{asset('/resources/images-raack/client-logo-6-clr.png')}}" alt="Dance classes in Velachery" class="feature-circle-img img-fluid">
                        <img src="{{asset('/resources/images-raack/client-logo-6.png')}}" alt="Dance classes in Neelankarai" class="feature-circle-hover-image img-fluid">
                     </a>
                  </div> 
               </div>
            </div>
         </div>
      </section>
      <!--================================ CLIENT LOGO AREA END ============================-->
      <!--================================= BUTTON AREA START =======================-->
      <section class="section-white-bg animate-scroll" style="padding-top: 50px; padding-bottom: 50px;" data-animate="animate__animated animate__fadeInUp">
         <div class="container text-center">
            <a <a href="{{ URL('/dance-classes-in-chennai') }}" class="primary-btn" style="border-radius: 10px;">
               Learn More
               <svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'>
                  <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <path d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'/>
               </svg>
            </a>
         </div>
      </section>
      <!--================================ BUTTON AREA END ============================-->
      <!--================================= CTA START ==========================================-->
      <section class="section-white-bg cta-bg-img animate-scroll"  style="padding-top: 400px; padding-bottom: 30px;" data-animate="animate__animated animate__fadeInUp">
               <div class="container">
                  <div class="text-center no-pad">
                     <div class="header-div">
                  <!-- <button class="primary-btn" style="border-radius: 10px;">
						   Learn More
						   <svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'>
							 
							  <path d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'/>
						   </svg>
						</button> -->
                     </div>
                  </div>
               </div>
      </section>
      <!--================================= CTA END ==========================================-->
      <!--=============================== STUDIOS AREA START =======================-->
      <section class="section-space section-white-bg animate-scroll" data-animate="animate__animated animate__fadeInUp">
         <div class="container">
            <div class="row rowsafari"> 
               <div class="col-lg-12 mx-auto text-center">
                  <div class="client-logo-slider">
                     <img src="{{asset('/resources/images-raack/Ascent-Short.png')}}" alt="Ascent-Short" class="img-fluid team-ul-img animate-scroll" data-animate="animate__animated animate__zoomIn">
                     <h2 class="mx-auto text-dark text-center section-grp-margin-bottom">19+ <span class="theme-color font-weight400">STUDIOS</span></h2>
                     <img src="{{asset('/resources/images-raack/Ascent-Short.png')}}" alt="Ascent-Short" class="img-fluid team-ul-img-right animate-scroll" data-animate="animate__animated animate__zoomIn">
                  </div>
                  <a <a href="{{ URL('/dance-studios-in-chennai') }}" class="primary-btn res-bot20" style="margin-top: 30px; border-radius: 10px;">Know More</a>
               </div>
            </div>
           
         </div>
      </section>
      <!--=============================== STUDIOS AREA END ======================-->
      <!--=============================== TESTIMONIAL AREA START =================================-->
      <section class="section-space testimonial animate-scroll" data-animate="animate__animated animate__fadeInUp">
         <div class="container">
            <div class="row rowsafari"> 
               <div class="col-lg-12 mx-auto text-center">
                  <div class="client-logo-slider">
                     <img src="{{asset('/resources/images-raack/Ascent-Short.png')}}" alt="Ascent-Short" class="img-fluid team-ul-img animate-scroll" data-animate="animate__animated animate__zoomIn">
                     <h2 class="mx-auto text-dark text-center section-grp-margin-bottom">HAPPY <span class="theme-color font-weight400">STORIES</span></h2>
                     <img src="{{asset('/resources/images-raack/Ascent-Short.png')}}" alt="Ascent-Short" class="img-fluid team-ul-img-right animate-scroll" data-animate="animate__animated animate__zoomIn">
                  </div>
                  <h4 class="section-padding-bottom font-weight600">What our client says about us</h4>
               </div>
            </div>
            <div class="row rowsafari home-testimonial">
               <div class="col-lg-10 mx-auto">
                  <div class="owl-carousel owl-theme client-testimonial"> 
                     <div class="item row rowsafari align-items-center test-content testimonial-card">
                        <div class="col-lg-5 col-md-5 tab-res-margin-bot text-center" style="padding-left: 0;">
                           <img src="{{asset('/resources/images-raack/testimonial/mudita-mehta.png')}}" alt="Dance classes in Avadi" class="img-fluid section-margin-bottom">
                              <h5 class="section-grp-margin-bottom font-weight900 text-gray-clr text-capitalize">Mudita Mehta</h5>
                              <p class="intro-content text-uppercase lt-spacing font-weight100 theme-color">Chartered Accountant</p>
                        </div>
                        <div class="col-lg-7 col-md-7">
                           <div class="text-center">
                              <!-- <div class="section-padding-bottom">
                                 <h4 class="theme-color">"Happy Pilot"</h4>
                              </div> -->
                              <p class="section-margin-bottom justify">The dance fitness classes at Raack Academy, taken by Preeti, are engaging and fun! The routines are changed from time to time to keep the classes interesting. It's a great way to burn calories while dancing your heart out, and it's my stress buster. At work, I can feel a lot of happiness and positive change</p>
                           </div>
                        </div>
                     </div>
                     <div class="item row rowsafari align-items-center test-content testimonial-card">
                        <div class="col-lg-5 col-md-5 tab-res-margin-bot text-center" style="padding-left: 0;">
                           <img src="{{asset('/resources/images-raack/testimonial/karthick.png')}}" alt="Dance classes in Mogappair" class="img-fluid section-margin-bottom">
                              <h5 class="section-grp-margin-bottom font-weight900 text-gray-clr text-capitalize">Karthic Sankar Senthippan</h5>
                              <p class="intro-content text-uppercase lt-spacing font-weight100 theme-color">Engineer</p>
                        </div>
                        <div class="col-lg-7 col-md-7">
                           <div class="text-center">
                              <!-- <div class="section-padding-bottom">
                                 <h4 class="theme-color">"Happy Pilot"</h4>
                              </div> -->
                              <p class="section-margin-bottom justify">"Sitting at a laptop all day used to make me physically inactive. However, after enrolling in the Film Covers class, I've become active throughout the day and can now accomplish much more. The instructor is fantastic, skillfully blending entertainment with the teaching of some impressive moves. I wholeheartedly recommend enrolling in these dance fitness sessions to enjoy quality time while maintaining your fitness.</p>
                           </div>
                        </div>
                     </div>

                     <div class="item row rowsafari align-items-center test-content testimonial-card">
                        <div class="col-lg-5 col-md-5 tab-res-margin-bot text-center" style="padding-left: 0;">
                           <img src="{{asset('/resources/images-raack/testimonial/meenakshi.png')}}" alt="Dance classes in Tambaram" class="img-fluid section-margin-bottom">
                              <h5 class="section-grp-margin-bottom text-capitalize text-gray-clr" >Meenakshi</h5>
                              <!-- <p class="intro-content font-weight100 text-uppercase lt-spacing theme-color">Chartered Accountant</p> -->
                        </div>
                        <div class="col-lg-7 col-md-7">
                           <div class="text-center">
                              <!-- <div class="section-padding-bottom">
                                 <h4 class="theme-color">"Happy Pilot"</h4>
                              </div> -->
                              <p class="section-margin-bottom justify">"The best place to learn dance! The instructor is encouraging and teaches so well that even if you've never danced before, you'll find yourself dancing. The environment is incredibly positive. I always look forward to the weekends for my classes. I'm confident that everyone who comes here will enjoy it and want to continue."
                              </p>
                           </div>
                        </div>
                     </div>
                     
                     <div class="item row rowsafari align-items-center test-content testimonial-card">
                        <div class="col-lg-5 col-md-5 tab-res-margin-bot text-center" style="padding-left: 0;">
                              <img src="{{asset('/resources/images-raack/testimonial/athirai.png')}}" alt="Dance classes in kilpauk" class="img-fluid section-margin-bottom">
                              <h5 class="section-grp-margin-bottom text-capitalize text-gray-clr">Athirai</h5>
                              <p class="intro-content font-weight100 text-uppercase lt-spacing theme-color">Dance Enthusiast</p>
                        </div>
                        <div class="col-lg-7 col-md-7">
                           <div class="text-center">
                              <!-- <div class="section-padding-bottom">
                                 <h4 class="theme-color">"Happy Pilot"</h4>
                              </div> -->
                              <p class="section-margin-bottom justify">Dance has been an integral part of my life. As a classical dancer, I sought out Raack Academy to delve into various styles and explore the intricacies of Western dance. I am now filled with immense happiness and satisfaction, realizing that Raack offers even more for a passionate dancer like myself. The approach to dance at Raack is profoundly unique and blissful, expanding my thought process in ways I never imagined</p>
                           </div>
                        </div>
                     </div>

                     <div class="item row rowsafari align-items-center test-content testimonial-card">
                        <div class="col-lg-5 col-md-5 tab-res-margin-bot text-center" style="padding-left: 0;">
                              <img src="{{asset('/resources/images-raack/testimonial/sivaranjani.png')}}" alt="Dance classes in Mugalivakkam" class="img-fluid section-margin-bottom">
                              <h5 class="section-grp-margin-bottom text-capitalize text-gray-clr">Sivaranjini</h5>
                              <p class="intro-content font-weight100 text-uppercase lt-spacing theme-color">Toddler Parent</p>
                        </div>
                        <div class="col-lg-7 col-md-7">
                           <div class="text-center">
                              <!-- <div class="section-padding-bottom">
                                 <h4 class="theme-color">"Happy Pilot"</h4>
                              </div> -->
                              <p class="section-margin-bottom justify">I've enrolled my 3-year-old son in the Little Legends program, and he absolutely adores coming to Raack for the customized monthly themes, soundtracks, and props.The instructor is friendly and caters to students of all ages and skill levels.  It's truly the best dance studio! I wholeheartedly recommend it to anyone eager to learn dance</p>
                           </div>
                        </div>
                     </div>

                     <div class="item row rowsafari align-items-center test-content testimonial-card">
                        <div class="col-lg-5 col-md-5 tab-res-margin-bot text-center" style="padding-left: 0;">
                              <img src="{{asset('/resources/images-raack/testimonial/elanthirayan.png')}}" alt="Dance classes in Keelkatalai" class="img-fluid section-margin-bottom">
                              <h5 class="section-grp-margin-bottom text-capitalize text-gray-clr">Dr.P.Elanthirayan</h5>
                              <p class="intro-content font-weight100 text-uppercase lt-spacing theme-color">pediatric surgeon</p>
                        </div>
                        <div class="col-lg-7 col-md-7">
                           <div class="text-center">
                              <!-- <div class="section-padding-bottom">
                                 <h4 class="theme-color">"Happy Pilot"</h4>
                              </div> -->
                              <p class="section-margin-bottom justify">My journey with Raack has been delightful. Starting with my son's classes in Raack Cuddalore, I soon joined in. It's been a fun and enriching experience. Here, both children and adults learn to be themselves without inhibitions. The instructors are highly professional and connect well with everyone. Mrs. Purni, the proprietor, is always enthusiastic, showcasing our kids' talents and keeping us motivated. At Raack, we're one big family of fun and frolic!</p>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--================================== TESTIMONIAL AREA END	===================================-->
      <!--=============================== FORM AREA START =======================-->
      <section class="section-space section-white-bg animate-scroll" data-animate="animate__animated animate__fadeInUp">
         <div class="container">		 
            <div class="row rowsafari"> 
               <div class="col-lg-12 mx-auto">
                  <div class="section-head-space">
					<div class="testimonial-slider">
						<h2 class="section-margin-bottom font-weight900">UNLOCK YOUR <br><span class="academy-raack">DANCING POTENTIAL NOW!</span></h2><img src="{{asset('/resources/images-raack/Ascent-Short.png')}}" alt="Dance classes in sholinganallur" class="img-fluid team-ul-img-right animate-scroll" data-animate="animate__animated animate__zoomIn">
					</div>
                  </div>
               </div>
            </div>
            <div class="row section-heading">
               <div  class="col-lg-6">                  
                  <p class="section-padding-bottom justify">Join us at Raack Dance Academy and let the music guide your steps. Get ready to be part of a dynamic, supportive, and electrifying dance family that celebrates the art of movement.
                     Don't wait any longer, take the leap and join us on the dance floor. 
                  </p>
               </div>
               <div class="col-lg-5 offset-1  res-left-mar0"> 
				  @include('forms.contactus')
               </div>
            </div>
         </div>
      </section>
      <!--=============================== FORM AREA END ======================-->

@endsection

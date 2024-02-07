@extends('layouts.base')
@section('content') 
<!--=============================== VIDEO AREA START =======================-->
	  <header class="section-dark-bg position-relative">
      <div class="loader"></div>
		<div id="home">
			<div class="video-bgimage video-section bgimage-property">
				<div class="pattern-overlay video-padding">	<a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=u4SVngJQCZk',containment:'.video-section', quality:'large', autoPlay:true, mute:true, opacity:1}"></a>
					<div class="container">
						<div class="col-sm-12 col-md-12 col-lg-8">
							<div class="header-div">
								<div class="event-book-header">
								 <h1 style="letter-spacing: 2px; padding-top: 200px;" class="text-white">FILM<SPAN class="font-weight400 text-white">COVERS</span></h1>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>  
      <!--=============================== VIDEO AREA END ======================-->
      <!--=============================== Entrepreneurship AREA START =======================-->
      <section class="section-space event-gallery-show section-white-bg animate-scroll" data-animate="animate__animated animate__fadeInUp">
         <div class="container">
            <div class="section-heading">
               <div>
                  <p class="justify section-padding-bottom">Lights, camera, dance! Step into the world of our Cinema with the Film Cover program, where you'll groove to the beats of trending film songs. Unleash your inner Bollywood, Kollywood or Dapang Kuthu star and relive the magic of Indian cinema through high-energy choreography. With dramatic expressions and vibrant moves, you'll experience the flavorful essence of film music. Join us on the dance floor, have a blast, and become the star of our own cinema!
                     Age : 07 - 12 years | 13 years & above</p>
				  <div class="text-center">
					<img src="{{asset('/resources/images-raack/courses/client-logo-3.png') }}" alt="Dance classes in Thoraipakkam" style="height:180px; margin: 0 auto;" class="img-fluid text-center">
					</div>
               </div>
            </div>
         </div>
      </section>
      
      <!--=============================== ACADEMY AREA END ======================-->
	  
      <!--=============================== VIDEO AREA START =======================-->
      <section class="position-relative animate-scroll" style="padding-bottom: 80px;" data-animate="animate__animated animate__fadeInUp">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 mx-auto text-center">
                  <div class="client-logo-slider">
                     <img src="{{asset('/resources/images-raack/Ascent-Short.png') }}" alt="Ascent-Short" class="img-fluid team-ul-img animate-scroll" data-animate="animate__animated animate__zoomIn">
                     <h3 class="mx-auto text-dark text-center section-grp-margin-bottom">WATCH <span class="theme-color font-weight400">SHORTS</span></h3>
                     <img src="{{asset('/resources/images-raack/Ascent-Short.png') }}" alt="Ascent-Short" class="img-fluid team-ul-img-right animate-scroll" data-animate="animate__animated animate__zoomIn">
                  </div>
               </div>
            </div>
			<div class="container">
			  <div class="section-heading pb-md-0">
				<div class="mob-position-relative">
				  <div class="mobile-wrapper">
					 <div id="yt-shorts" class="owl-carousel owl-theme ">
					   <div class="item text-center">
						  <iframe class="yt-shorts-frame"
							 width="100%"
							 height="100%"
							 src="https://www.youtube.com/embed/jFSDM1wMVWg"
							 title="YouTube video player"
							 frameborder="0"
							 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
							 allowfullscreen>
							</iframe>
					   </div>
					   <div class="item text-center">
						   <iframe class="yt-shorts-frame"
							 width="100%"
							 height="100%"
							 src="https://www.youtube.com/embed/UKAc2SdY-94"
							 title="YouTube video player"
							 frameborder="0"
							 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
							 allowfullscreen>
							</iframe>
					   </div>
					   <div class="item text-center">
						   <iframe class="yt-shorts-frame"
							 width="100%"
							 height="100%"
							 src="https://www.youtube.com/embed/uWW7VA3rgS0"
							 title="YouTube video player"
							 frameborder="0"
							 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
							 allowfullscreen>
							</iframe>
					   </div>   
					   
					</div>
				  </div>
				</div>
			  </div>
           <div class="pb-5 mx-auto text-center">
            <a href="#hst-pop-modal_name" class="btn-hst-pop-modal primary-btn" style="margin-top: 40px; min-width: 150px; text-align: center; padding: 10px 20px;">
               Register Now
            </a>
         </div>
			  <h5 class="font-weight800 theme-color font-weight900 text-center section-margin-bottom">What to expert from this program?</h5> 
				<ul class="mx-auto"	style="display: table;">
				   <li class="mb-1" style="list-style: disc; margin-left: 20px;">Explore the flavour of dramatical expression in cinema</li>
				   <li class="mb-1" style="list-style: disc; margin-left: 20px;">Opportunity to showcase your talent on stage</li>
				   <li class="mb-1" style="list-style: disc; margin-left: 20px;">Wholesome experience of dancing to film songs</li>
				   <li class="mb-1" style="list-style: disc; margin-left: 20px;">High-energy and entertaining choreography sessions</li>
               <li class="mb-1" style="list-style: disc; margin-left: 20px;">Experienced and passionate instructors</li>
               <li class="mb-1" style="list-style: disc; margin-left: 20px;">Fun and vibrant learn</li>
               <li class="mb-1" style="list-style: disc; margin-left: 20px;">Ing environment</li>
				</ul>
			</div>

         </div>
      </section>
 <!-- career popup-->
 <div class="hst-pop-modal-wrapper">
   <div id="hst-pop-modal_name" class="hst-pop-modal modal">
         <div class="text-center">
            <h4 class="section-margin-bottom text-white">Register<span class="academy-raack"> Now</span></h4>
         </div> 
		@include('forms.contactus')

   <a href="#close-modal" class="close-hst-pop-modal"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg></a>
   </div>
</div>
<!-- career popup end-->

      <!--=============================== VIDEO AREA END ======================-->
      <!--================================= CTA START ==========================================-->
      <section class="section-white-bg cta-bg-img animate-scroll" style="padding-top: 700px; padding-bottom: 30px;"  data-animate="animate__animated animate__fadeInUp">
      </section>
      <!--================================= CTA END ==========================================-->
      <!--=============================== ACADEMY AREA START =======================-->
      <section class="section-space section-white-bg animate-scroll" data-animate="animate__animated animate__fadeInUp">
         <div class="container">
			<div class="section-heading">
               <div class="client-logo-slider">
                  <h1 class="mx-auto theme-color text-center">SIGN UP <span class="font-weight400 text-dark">TODAY</span></h1><img src="{{asset('/resources/images-raack/114x52.png') }}" alt="Dance classes in old perungalathur" class="img-fluid course-ul-img-right animate-scroll" data-animate="animate__animated animate__zoomIn">
               </div>
            </div>
            <div class="row section-heading">
               <div  class="col-lg-6">
                  <p class="section-padding-bottom">Embark on your dance journey with Raack Dance Academy and discover the transformative power of movement-based art. Join us in celebrating the uniqueness of every individual through the powerful expression of dance. Enroll in your desired course today and let your dance story unfold.</p>
                  <div class="row rowsafari align-items-center" style="margin-top: 30px;">
                     <div class="col-lg-5 col-6 col-sm-6 col-md-6">
                        <div style="display: flex; align-items: center; margin-bottom: 5px;">
                           <img src="{{asset('/resources/images-raack/dance-studios-in-chennai.png') }}" alt="Dance classes in Velachery" class="img-fluid" style="width: 24px; height: 24px; margin-right: 10px;">
                           <h6>Phone</h6>
                        </div>
                        <p><a href="tel:+919003024113" class="letter-spacing">+91 90030 24113</a></p>
                     </div>
                     <div class="col-lg-5 col-6 col-sm-6 col-md-6">
                        <div style="display: flex; align-items: center; margin-bottom: 5px;">
                           <img src="{{asset('/resources/images-raack/dance-schools-in-chennai.png') }}" alt="Dance classes in Neelankarai" class="img-fluid" style="width: 24px; height: 24px; margin-right: 10px">
                           <h6>Email</h6>
                        </div>
                        <p><a href="mailto:enquiry@raack.com">enquiry@raack.com</a></p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-5 offset-1  res-left-mar0">                  
                  @include('forms.contactus')
               </div>
            </div>
         </div>
      </section>
      <!--=============================== ACADEMY AREA END ======================-->
@endsection	  
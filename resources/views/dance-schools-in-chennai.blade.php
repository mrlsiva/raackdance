@extends('layouts.base')
@section('content') 
<!--================================= HEADER START ==========================================-->
<section class="animate-scroll gallery-bg-img" data-animate="animate__animated animate__fadeInUp">
 <div class="container">
	<div class="text-left no-pad">
	   <h1 class="section-margin-bottom font-weight900">ANNUAL <br><span class="stroke-text">EVENTS</span></h1>
	</div>
 </div>
</section>
<!--================================= HEADER END ==========================================-->
<!--=============================== Entrepreneurship AREA START =======================-->
<section class="section-space event-gallery-show section-white-bg">
 <div class="container">
	<div class="section-heading">
	   <h3 class="section-margin-bottom">GET READY FOR A DAZZLING SHOWCASE OF<br><span class="theme-color font-weight400">TALENT & ARTISTRY<img src="{{asset('/resources/images-raack/Ascent-Short.png') }}" alt="Dance classes in Thoraipakkam" class="video-ul-img"></h3>
	</div>
	<div class="row rowsafari align-items-center" >
	   <div class="col-lg-6 col-sm-12 col-md-12 col-12 res-width-padding-bottom res-left-mar0">
		  <img src="{{asset('/resources/images-raack/gallery/heal.png') }}" alt="Dance classes in Mylapore" class="img-fluid" style="border-radius: 66px;"> 
	   </div>
	   <div class="col-lg-6 col-sm-12 col-md-12 col-12 res-width-padding-bottom">
		  <div>
			 <h4 class="text-center theme-color">HEAL THE WORLD</h4>
			 <h4 class="section-padding-bottom font-weight400 text-center">(A tribute to Michael Jackson)</h4>
			 <p class="section-padding-bottom">29 August 2023, Raack Academy orchestrated an awe-inspiring mega dance flash mob featuring 1200 students across its branches. This grand event, held at VR Mall Chennai, was dedicated to the iconic Michael Jackson, with the profound purpose of promoting world peace. The mega dance flash mob, a testament to Raack Academy's commitment to creativity and unity, drew participants from various branches and backgrounds. The theme, "World Peace," resonated strongly with the participants, showcasing that dance and music can transcend barriers and inspire positive change. The event was graced by the presence of esteemed celebrities and film music directors, who not only added star power to the occasion but also contributed to the atmosphere of artistic celebration.</p>
			 <div class="text-center">
				<a href="{{ URL('/dance-studios-chennai') }}" class="primary-btn" style="min-width: 150px; border-radius: 66px; padding: 10px 20px;">View Album</a>	
			 </div>
		  </div>
	   </div>
	</div>
	<div class="row rowsafari align-items-center mt-4 pt-4" >
	   <div class="col-lg-6 col-sm-12 col-md-12 col-12 res-width-padding-bottom">
		  <div>
			 <h4 class="text-center theme-color">Happy Feet</h4>
			 <h4 class="section-padding-bottom font-weight400 text-center">(In House Dance Contest)</h4>
			 <p class="section-padding-bottom">We are thrilled to announce "Happy Feet," an exhilarating in-house dance competition that will bring together the vibrant talent from every branch of Raack Academy of Dance. This spirited event aims not only to showcase the incredible dance abilities of our students but also to foster invaluable qualities such as resilience, sportsmanship, and confidence.</p>
			 <div class="gallery-btns">
				<a href="{{ URL('/dance-schools-chennai') }}" class="primary-btn" style="min-width: 150px; padding: 10px 20px;">Know More</button>                              
				<a href="#hst-pop-modal_name" class="btn-hst-pop-modal primary-btn" style="min-width: 150px; padding: 10px 20px;">
				   Register Now
				</a>
				<div class="hst-pop-modal-wrapper">
				   <div id="hst-pop-modal_name" class="hst-pop-modal modal">
					  <div class="text-center">
						 <h4 class="section-margin-bottom text-white">Register<span class="academy-raack"> Now</span></h4>
					  </div> 
					  @include('forms.register-student')
				
				   <a href="#close-modal" class="close-hst-pop-modal"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg></a>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	   <div class="col-lg-6 col-sm-12 col-md-12 col-12 res-width-padding-bottom res-left-mar0 order-lg-last">
		  <img src="{{asset('/resources/images-raack/gallery/happy.png') }}" alt="Dance classes in old perungalathur" class="img-fluid">
	   </div>
	</div>
	<div class="row rowsafari align-items-center mt-4 pt-4">
	   <div class="col-lg-6 col-sm-12 col-md-12 col-12 res-width-padding-bottom res-left-mar0">
		  <img src="{{asset('/resources/images-raack/gallery/first.png') }}" alt="Dance classes in Velachery" class="img-fluid">
	   </div>
	   <div class="col-lg-6 col-sm-12 col-md-12 col-12 res-width-padding-bottom">
		  <div>
			 <h4 class="text-center theme-color">FIRST STEP</h4>
			 <h4 class="section-padding-bottom font-weight400 text-center">(“The Annual Recital”)</h4>
			 <p class="section-padding-bottom text-center intro-content text-dark"><b>Get ready for a dance<br> extravaganza like never before!</b></p>
			 <p class="section-padding-bottom">We are thrilled to present the first step of Raack's journey, our grand Annual Recital -  an event that transcends  boundaries and unites our dance community in a celebration of talent, passion, and the pure magic of movement</p>
			 <div class="gallery-btns">
				<a href="{{ URL('/dance-classes-chennai') }}" class="primary-btn" style="min-width: 150px; padding: 10px 20px;">Know more</a>
				<a href="#hst-pop-modal_name" class="btn-hst-pop-modal primary-btn" style="min-width: 150px; text-align: center; padding: 10px 20px;">
				   Register
				</a>
				<div class="hst-pop-modal-wrapper">
				   <div id="hst-pop-modal_name" class="hst-pop-modal modal">
					  <div class="hst-pop-modal-wrapper">
						 <div id="hst-pop-modal_name" class="hst-pop-modal modal">
							<div class="text-center">
							   <h4 class="section-margin-bottom text-white">Register<span class="academy-raack"> Now</span></h4>
							</div> 
							@include('forms.register-student')
					  
						 <a href="#close-modal" class="close-hst-pop-modal"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg></a>
						 </div>
					  </div>
				
				   <a href="#close-modal" class="close-hst-pop-modal"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg></a>
				   </div>
				</div>
				<a href="{{ URL('/events-ticket-booking') }}" class="primary-btn" style="min-width: 150px; padding: 10px 20px;">Book Tickets</a>
			 </div>
		  </div>
	   </div>
	</div>
 </div>
</section>
<!--=============================== ACADEMY AREA END ======================-->
<!--=============================== Entrepreneurship AREA START =======================-->
<section class="section-space section-white-bg pb-50 animate-scroll" data-animate="animate__animated animate__fadeInUp">
 <div class="container">
	<div class="row section-heading">
	   <div class="col-lg-7 res-bot10">
		  <h3 class="theme-color">BOOK YOUR <br><span class="font-weight400 text-dark"> FRONT ROW </span> SEATS</h3>
		  <img src="{{asset('/resources/images-raack/114x52.png') }}" alt="Dance classes in Neelankarai" class="img-fluid phylosophy-ul-img">
	   </div>			   
	</div>
	<p class="section-padding-bottom font-weight600">Be sure to mark your calendars for these exciting events and join us in witnessing the incredible talent and passion of our students. Experience the joy, energy, and transformation that dance brings to their lives. Stay tuned for updates on dates, timings, and ticket information. Don't miss out on these unforgettable moments that define the vibrant spirit of Raack Dance Academy.</p>
 </div>
</section>
<!--=============================== ACADEMY AREA END ======================-->
 <!--================================= CLIENT LOGO AREA START =======================-->
<section class="section-space animate-scroll gallery-slider" style="padding-bottom: 0;" data-animate="animate__animated animate__fadeInUp">
 <div class="container">
	<div class="row">
	   <div class="col-lg-10 mx-auto text-center">
		  <h4 class="section-margin-bottom">RESERVE YOUR <span class="theme-color font-weight400">TICKETS TODAY</span>!</h4>
		  <img src="{{asset('/resources/images-raack/114x52.png') }}" alt="Dance classes in Ramapuram" class="img-fluid animate-scroll" data-animate="animate__animated animate__zoomIn"><br>
		  <a href="{{ URL('/events-ticket-booking') }}" class="primary-btn" style="border-radius: 66px; margin-top: 30px;  min-width: 200px; margin-top: 50px; margin-bottom: 50px;">
			 BOOK TICKETS
		  </a>
		</div>
	</div>
 </div>
</section>
<!--================================ CLIENT LOGO AREA END ============================-->
@endsection	  
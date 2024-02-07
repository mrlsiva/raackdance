@extends('layouts.base')
@section('content')
<!--=============================== VIDEO AREA START =======================-->
<section class="position-relative section-space event-book-bg-img section-gray-bg animate-scroll" data-animate="animate__animated animate__fadeInUp">
   <div class="container">
		<div class="row">
			<div class="col-lg-7 mx-auto">
			  <div class="event-book-header text-center">
				 <h1 style="font-weight: 900;" class="section-margin-bottom">FIRST STEP <br><span class="theme-color">2023</span> IS HERE!</h1>
				 <p class="text-white intro-content section-padding-bottom">This spectacular showcase brings together over 2000 talented students who take their first step onto the stage to express their unique style of dance</p>
			  </div>
			</div>
		</div>
	  <div class="play-icon text-center">
		 <div class="wrapper">
			<img src="{{asset('/resources/images-raack/play-icon.svg') }}" alt="play-icon">
		 </div>
	  </div>
   </div>
</section>
<!--=============================== VIDEO AREA END ======================-->
<!--=============================== FIRST STEP AREA START =======================-->
<section class="section-space section-white-bg animate-scroll" data-animate="animate__animated animate__fadeInUp">
 <div class="container">
	<img src="{{asset('/resources/images-raack/Ascent-Shortx3.png') }}" alt="Ascent-Short" class="img-fluid fran2-ul float-right res-bot10" >		
	<div class="row rowsafari align-items-center">
	   <div class="col-lg-8 mx-auto">
		  <div class="section-heading text-center">
			 <h3 class="section-margin-bottom"><span class="theme-color">First</span> Step 2024 <br> Starts in</h3>
			 <div class="row rowsafari full-width-page section-padding-bottom mt-4 pt-4">
				<div class="col-lg-3 col-sm-6 col-md-3 col-12 res-margin-bottom text-center">
				   <div class="number-bg res-float-right">
					  <div class="number-bg-content">
						 <p class="book-day-col text-dark"><span class="countdown" id="days"></span>
						 </p>
						 <h6 class="title-booknow text-dark">DAYS</h6>
					  </div>
				   </div>
				</div>
				<div class="col-lg-3 col-sm-6 col-md-3 col-12 text-center res-margin-bottom">
				   <div class="number-bg res-float-left">
					  <div class="number-bg-content">
						 <p class="book-day-col text-dark"><span class="countdown" id="hours"></span>
						 </p>
						 <h6 class="title-booknow text-dark">HOURS</h6>
					  </div>
				   </div>
				</div>
				<div class="col-lg-3 col-sm-6 col-md-3 col-12 text-center res-margin-bottom">
				   <div class="number-bg res-float-right">
					  <div class="number-bg-content">
						 <p class="book-day-col text-dark"><span class="countdown" id="minutes"></span>
						 </p>
						 <h6 class="title-booknow text-dark">MINUTES</h6>
					  </div>
				   </div>
				</div>
				<div class="col-lg-3 col-sm-6 col-md-3 col-12 text-center res-margin-bottom">
				   <div class="number-bg res-float-left">
					  <div class="number-bg-content">
						 <p class="book-day-col text-dark"><span class="countdown" id="seconds"></span>
						 </p>
						 <h6 class="title-booknow text-dark">SECONDS</h6>
					  </div>
				   </div>
				</div>
			 </div>
			 <!-- <button class="primary-btn" style="margin-top: 30px;">
				Book Tickets
				<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'>
				   
				   <path d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'/>
				</svg>
			 </button> -->
			 <div class="mt-2">
				<button class="primary-btn btn-disabled" style="margin-top: 30px;" disabled="disabled">BOOKING CURRENTLY <br> NOT AVAILABLE</button>
			 </div>
		  </div>
	   </div>
	</div>
 </div>
</section>
<!--=============================== FIRST STEP AREA END ======================-->
<!--=============================== EVENT DETAILS AREA START =======================-->
<!-- <section class="section-space section-dark-bg-2 animate-scroll" data-animate="animate__animated animate__fadeInUp">
 <div class="container">
	<div class="row rowsafari align-items-center">
	   <div class="col-lg-8  text-center mx-auto">
		  <div class="section-heading text-center">
			 <h3 class="section-padding-bottom text-light">Event <span class="theme-color">Details</span>  </h3>
			 <div class="details section-margin-bottom pb-2">
				<h6 class="text-uppercase text-white">Dates</h6>
				<p class="intro-content text-white">February 17-18, Feb 24-25</p>
			 </div>
			 <div class="details section-margin-bottom pb-2">
				<h6 class="text-uppercase text-white">Venue</h6>
				<p class="intro-content text-white">Rajah Annamalai Mandram</p>
			 </div>
			 <div class="details">
				<h6 class="text-uppercase text-white">Address</h6>
				<p class="intro-content text-white">5, Esplanade Road, George Town, Chennai, Tamil Nadu</p>
			 </div>
		  </div>
		  <button class="primary-btn hover-text-white" style="margin-top: 0;">
			 Click Here To Navigate
			 <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M429.6 92.1c4.9-11.9 2.1-25.6-7-34.7s-22.8-11.9-34.7-7l-352 144c-14.2 5.8-22.2 20.8-19.3 35.8s16.1 25.8 31.4 25.8H224V432c0 15.3 10.8 28.4 25.8 31.4s30-5.1 35.8-19.3l144-352z"/></svg>
		  </button>
	   </div>
	</div>
 </div>
</section> -->
<!--=============================== EVENT DETAILS AREA END ======================-->

<!--=============================== EVENT DETAILS AREA START =======================-->
<section class="section-space section-dark-bg-2 animate-scroll" data-animate="animate__animated animate__fadeInUp">
 <div class="container">
	<div class="row rowsafari align-items-center">
	   <div class="col-lg-8 text-white text-center mx-auto">
		  <div class="text-center">
			 <h3 class="section-margin-bottom section-padding-bottom text-light">EVENT DETAILS</h3>
				<div class="section-margin-bottom">
				   <div class="details">
					  <h5 class="text-uppercase theme-color">Dates</h5>
					  <p class="text-white">FEBRUARY 17,18,24, & 25</p>
				   </div>
				</div>
				<div>
				   <div class="details">
					  <h5 class="text-uppercase theme-color">Venue</h5>
					  <p class="text-white">ANNA CENTENARY LIBRARY, <br>KOTTURPURAM</p>
				   </div>
				</div>
		  </div>
	   </div>
	</div>
 </div>
</section>
<!--=============================== EVENT DETAILS AREA END ======================-->

<!--================================= CLIENT LOGO AREA START =======================-->
<section class="animate-scroll section-space" data-animate="animate__animated animate__fadeInUp">
 <div class="container">
	<h3 class="section-padding-bottom mb-4 pb-4 text-center">Event <span class="academy-raack">Sponsors</span></h3>
	<div id="event-logo-slider" class="owl-carousel owl-theme ">
	   <div class="item text-center">
		  <img src="{{asset('/resources/images-raack/events/1.png') }}" alt="1" class="feature-circle-img img-fluid">
	   </div>
	   <div class="item text-center">
		  <img src="{{asset('/resources/images-raack/events/2.png') }}" alt="2" class="feature-circle-img img-fluid">
	   </div>
	   <div class="item text-center">
		  <img src="{{asset('/resources/images-raack/events/3.png') }}" alt="3" class="feature-circle-img img-fluid">
	   </div>
	   <div class="item text-center">
		  <img src="{{asset('/resources/images-raack/events/4.png') }}" alt="4" class="feature-circle-img img-fluid">
	   </div>
	   <div class="item text-center">
		  <img src="{{asset('/resources/images-raack/events/5.png') }}" alt="5" class="feature-circle-img img-fluid">
	   </div>
	   <div class="item text-center">
		  <img src="{{asset('/resources/images-raack/events/6.png') }}" alt="6" class="feature-circle-img img-fluid">
	   </div>
	</div>
 </div>
</section>
<!--================================ CLIENT LOGO AREA END ============================-->
@endsection	  
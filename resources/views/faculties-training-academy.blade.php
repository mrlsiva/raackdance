@extends('layouts.base')
@section('content') 
<!--================================= HEADER START ==========================================-->
<header>
<div id="home">
	<div class="video-bgimage video-section bgimage-property">
		<div class="pattern-overlay video-padding">	<a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/embed/_ud5hr7pBVQ',containment:'.video-section', quality:'large', autoPlay:true, mute:true, opacity:1}"></a>
			<div class="container">
				<div class="col-sm-12 col-md-12 col-lg-8">
					<div class="header-div">
						<div class="text-left no-pad">
						 <h1>Become A <br><span class="stroke-text">Coach</span></h1>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header> 
<!--================================= HEADER END ==========================================-->	
<!--=============================== FACULTIES TRAINING AREA START =======================-->
<section class="section-space section-white-bg fta-page">
 <div class="container">
	<div class="section-heading">
	   <h3 class="section-margin-bottom"><span class="theme-color">Raack </span> Academy’s <br><span style="font-weight: 500;">Faculties Training Academy</span></h3>
	   <img src="{{asset('/resources/images-raack/franchise-1/arrow-icon.png ')}}" alt="underline" class="img-fluid fran-ul float-right res-bot10">					
	</div>
	<div class="row rowsafari align-items-start">
	   <div class="col-lg-5 col-sm-12 col-md-12 col-12 res-width-padding-bottom">
		  <div class="mt-lg-5">
			 <p class="justify">At Raack Dance Academy, we believe in empowering our staff and faculties to become exceptional coaches and mentors. Our Faculties Training Academy is designed to provide comprehensive training and development programs that equip our team members with the skills, knowledge, and expertise needed to guide and inspire our valued clients.</p>
			 <a href="#hst-pop-modal_name" class="btn-hst-pop-modal primary-btn" style="margin-top: 40px; min-width: 150px; text-align: center; padding: 10px 20px;">
				Apply Now
			 </a>
		  </div>
	   </div>
	   <div class="col-lg-6 offset-1 col-sm-12 col-md-12 col-12 res-width-padding-bottom res-left-mar0">
		  <img src="{{asset('/resources/images-raack/faculties/header.jpg ')}}" alt="Dance classes in Mylapore" class="img-fluid" style="width: 500px;height: 500px; border-radius: 50px;">
	   </div>
	</div>
 </div>
</section>
<!--=============================== FACULTIES TRAINING AREA END ======================-->
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
<!--=============================== WHY CHOOSE FACULTY AREA START =======================-->
<section class="section-space section-white-bg animate-scroll" data-animate="animate__animated animate__fadeInUp">
 <div class="container">
	<div class="row section-heading">
	   <div class="col-lg-7 res-bot10">
		  <h3 class="align-top">Why Choose The <img src="{{asset('/resources/images-raack/114x52.png ')}}" alt="Dance classes in old perungalathur" class="img-fluid align-top mx-2" style="margin-top: -5px;"> <br><span class="theme-color"> Faculty</span> Training Academy?</h3>
	   </div>
	</div>
	<div class="row rowsafari">
	   <div class="col-lg-4 col-sm-6 col-md-6 col-12 section-padding-bottom res-text-center">
		  <div class="our-services">
			 <div class="service-sec">
				<span class="service-num">1</span>
				<h5 class="ser-head text-capitalize">Career Roadmap</h5>
			 </div>
			 <p>We believe in continuous learning and growth. Even after completing the training programs, you'll have access to ongoing support and resources to further enhance your coaching skills. We foster a collaborative and supportive community where our faculties can exchange ideas, seek guidance, and stay connected.</p>
		  </div>
	   </div>
	   <div class="col-lg-4 col-sm-6 col-md-6 col-12 section-padding-bottom res-text-center">
		  <div class="our-services">
			 <div class="service-sec">
				<span class="service-num">2</span>
				<h5 class="ser-head text-capitalize">Professional <br>Development</h5>
			 </div>
			 <p>Our training programs are tailored to enhance the professional development of our faculties. We provide in-depth training sessions led by industry experts, covering a wide range of topics including dance techniques, teaching methodologies, choreography, communication skills, and more..</p>
		  </div>
	   </div>
	   <div class="col-lg-4 col-sm-6 col-md-6 col-12 section-padding-bottom res-text-center">
		  <div class="our-services">
			 <div class="service-sec">
				<span class="service-num">3</span>
				<h5 class="ser-head text-capitalize">Leadership  <br>Opportunities</h5>
			 </div>
			 <p>The Faculties Training Academy opens doors to leadership opportunities within Raack Dance Academy. As a trained coach, you'll have the chance to take on greater responsibilities, lead dance classes, mentor fellow instructors, and contribute to the growth and success of our academy..</p>
		  </div>
	   </div>
	   <div class="col-lg-4 offset-2 col-sm-6 col-md-6 col-12 res-text-center res-row-margin-bottom res-text-left res-left-mar0">
		  <div class="our-services">
			 <div class="service-sec">
				<span class="service-num">4</span>
				<h5 class="ser-head text-capitalize">Specialized <br>Coaching Skills</h5>
			 </div>
			 <p>Our training programs focus on equipping you with specialized coaching skills that go beyond dance instruction. You'll learn how to create a positive and inclusive learning environment, effectively communicate with clients of all ages and skill levels, and tailor your teaching approach to meet individual needs..</p>
		  </div>
	   </div>
	   <div class="col-lg-4 col-sm-6 col-md-6 col-12 res-text-center">
		  <div class="our-services">
			 <div class="service-sec">
				<span class="service-num">5</span>
				<h5 class="ser-head text-capitalize">Impactful Client <br>Relationships</h5>
			 </div>
			 <p>By becoming a trained coach through our Faculties Training Academy, you'll have the privilege of forming meaningful relationships with our clients. You'll inspire and guide them on their dance journey, witness their progress, and make a positive impact on their lives through the power of dance..</p>
		  </div>
	   </div>
	</div>
 </div>
</section>
<!--=============================== WHY CHOOSE FACULTY AREA END ======================-->	
<!--=============================== JOIN OUR FACULTY AREA START =======================-->
<section class="section-space section-gray-bg-2 animate-scroll" data-animate="animate__animated animate__fadeInUp">
 <div class="container">
	<div class="row">
	   <div class="col-lg-6 col-sm-12 col-md-12 col-12 res-width-padding-bottom">
		  <h3>Join Our <span class="theme-color"> Faculty</span> <br>Training Academy</h3>
		  <span class="text-left mt-3 ml-2">
		  <img src="{{asset('/resources/images-raack/114x52.png ')}}" alt="Dance classes in Velachery" class="img-fluid">
		  </span>
	   </div>
	   <div class="col-lg-5 offset-1 col-sm-12 col-md-12 col-12 res-left-mar0">
		  <p class="section-padding-bottom justify">Join the Faculties Training Academy and unlock your full potential as a dance coach. We are committed to providing you with the necessary tools, knowledge, and support to excel in your role and make a difference in the lives of our clients.</p>
	   </div>
	</div>
 </div>
</section>
<!--=============================== JOIN OUR FACULTY AREA END ======================-->	
<!--=============================== SIGNUP TODAY AREA START =======================-->
<section class="section-space section-white-bg animate-scroll" data-animate="animate__animated animate__fadeInUp">
 <div class="container">
	<div class="row section-heading">
	   <div  class="col-lg-6">
		  <h4 class="section-margin-bottom"><span class="theme-color">Signup</span> Today!</h4>
		  <p class="section-padding-bottom justify">To learn more about the training programs offered at the Faculties Training Academy and how to enroll, please contact us directly. We look forward to helping you embark on this exciting journey of personal and professional growth at Raack Dance Academy.. </p>
		  <div class="row rowsafari align-items-center" style="margin-top: 30px;">
			 <div class="col-lg-5 col-6 col-sm-6 col-md-6">
				<div style="display: flex; align-items: center; margin-bottom: 5px;">
				   <img src="{{asset('/resources/images-raack/dance-studios-in-chennai.png ')}}" alt="Dance classes in Neelankarai" class="img-fluid" style="width: 24px; height: 24px; margin-right: 10px;">
				   <h6>Phone</h6>
				</div>
				<p><a href="tel:+919003024113" class="letter-spacing">+91 90030 24113</a></p>
			 </div>
			 <div class="col-lg-5 col-6 col-sm-6 col-md-6">
				<div style="display: flex; align-items: center; margin-bottom: 5px;">
				   <img src="{{asset('/resources/images-raack/dance-schools-in-chennai.png ')}}" alt="Dance classes in Ramapuram" class="img-fluid" style="width: 24px; height: 24px; margin-right: 10px">
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
<!--=============================== SIGNUP TODAY AREA END ======================-->
@endsection

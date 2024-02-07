@extends('layouts.base')
@section('content') 
<!--=============================== VIDEO AREA START =======================-->
      <section class="position-relative  animate-scroll" data-animate="animate__animated animate__fadeInUp">
         <div class="container-fluid p-0">
            <div class="section-gray-bg">
               <div class="container-fluid p-0">
                  <div class="new-header-sec">
                     <img src="{{asset('/resources/images-raack/courses/header.jpg ')}}" class="img-fluid" alt="Dance classes in Thoraipakkam">
                     <!-- <h2>DANCE COURSES</h2> -->
                        <h2>DANCE<br><span class="stroke-text">COURSES</span></h2>   
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--=============================== VIDEO AREA END ======================-->

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

      <!--=============================== Entrepreneurship AREA START =======================-->
      <section class="section-space event-gallery-show section-white-bg animate-scroll" data-animate="animate__animated animate__fadeInUp">
         <div class="container">
            <div class="row section-heading">
               <div class="col-lg-6">
                  <h3><span class="academy-raack">6 Programs </span><img src="{{asset('/resources/images-raack/Ascent-Short.png') }}" alt="Dance classes in Mylapore" class="video-ul-img"></h3>
				  <h3 class="font-weight400">TAILORED TO <br> MEET YOUR NEEDS</h3>
               </div>
               <div class="col-lg-6 justify">
                  <p>At Raack Academy, we offer a diverse range of dance programs tailored to meet the unique needs and aspirations of individuals at every stage of their dance journey. Whether you're a beginner taking your first steps or an experienced dancer looking to refine your skills, we have something for you. Explore our offerings below and embark on an extraordinary dance experience.</p>
                  <p class="dark-color mt-3"><img src="{{asset('/resources/images-raack/Ascent-Long.png') }}" alt="Dance classes in old perungalathur"></p>
               </div>
            </div>
            <div class="row rowsafari align-items-center mt-4 pt-4" >
               <div class="col-lg-6 col-sm-12 col-md-5 col-12 res-width-padding-bottom res-left-mar0">
                  <img src="{{asset('/resources/images-raack/courses/course-1.png') }}" alt="Dance classes in Velachery" class="img-fluid">
               </div>
               <div class="col-lg-6 col-sm-12 col-md-7 col-12 res-width-padding-bottom">
                  <div class="text-center small-logo">
					<img src="{{asset('/resources/images-raack/courses/client-logo-5.png') }}" alt="Dance classes in Neelankarai" class="img-fluid">
                     <h4 class="section-padding-bottom font-weight400">(03-06 years)</h4>
                     <h5 class="theme-color font-weight900">A toddler's journey to sensory exploration</h5>
                     <div class="gallery-btns">
                        <a href="{{ URL('/dance-academy-chennai') }}" class="primary-btn" style="min-width: 150px; padding: 10px 20px; margin-top: 30px;">Watch Videos</a>
                        <a href="#hst-pop-modal_name" class="btn-hst-pop-modal primary-btn" style="min-width: 150px; padding: 10px 20px;  margin-top: 30px;">
                           Register now
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row rowsafari align-items-center mt-4 pt-4" >
               <div class="col-lg-6 col-sm-12 col-md-5 col-12 order-md-2 res-width-padding-bottom res-left-mar0">
                  <img src="{{asset('/resources/images-raack/courses/course-2.png') }}" alt="Dance classes in Ramapuram" class="img-fluid">
               </div>
               <div class="col-lg-6 col-sm-12 col-md-7 col-12 res-width-padding-bottom">
                 <div class="text-center small-logo">
                     <img src="{{asset('/resources/images-raack/courses/client-logo-6.png') }}" alt="Dance classes in saidapet" class="img-fluid">
                     <h4 class="section-padding-bottom font-weight400">(07-12 years)</h4>
                     <h5 class="theme-color font-weight900">Building confidence, creating leaders through dance.</h5>
                     <div class="gallery-btns">
                        <a href="{{ URL('/dance-classes-for-kids') }}" class="primary-btn" style="min-width: 150px; padding: 10px 20px; margin-top: 30px;">Watch Videos</a>
                        <a href="#hst-pop-modal_name" class="btn-hst-pop-modal primary-btn" style="min-width: 150px; padding: 10px 20px;  margin-top: 30px;">
                           Register now
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row rowsafari align-items-center mt-4 pt-4" >
               <div class="col-lg-6 col-sm-12 col-md-5 col-12 res-width-padding-bottom res-left-mar0">
                  <img src="{{asset('/resources/images-raack/courses/course-3.png') }}" alt="Dance classes in Avadi" class="img-fluid">
               </div>
               <div class="col-lg-6 col-sm-12 col-md-7 col-12 res-width-padding-bottom">
                  <div class="text-center small-logo">
                     <img src="{{asset('/resources/images-raack/courses/client-logo-1.png') }}" alt="Dance classes in Mogappair" class="img-fluid">
                     <h4 class="section-padding-bottom font-weight400">(07-12 years | 13 years & above)</h4>
                     <h5 class="theme-color font-weight900">Get Inspired, get creative, get groovin'</h5>
                     <div class="gallery-btns">
                        <a href="{{ URL('/dance-classes-for-adults') }}" class="primary-btn" style="min-width: 150px; padding: 10px 20px; margin-top: 30px;">Watch Videos</a>
                        <a href="#hst-pop-modal_name" class="btn-hst-pop-modal primary-btn" style="min-width: 150px; padding: 10px 20px;  margin-top: 30px;">
                           Register now
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row rowsafari align-items-center mt-4 pt-4" >
               <div class="col-lg-6 col-sm-12 col-md-5 col-12 order-md-2 res-width-padding-bottom res-left-mar0">
                  <img src="{{asset('/resources/images-raack/courses/course-4.png') }}" alt="Dance classes in Tambaram" class="img-fluid">
               </div>
               <div class="col-lg-6 col-sm-12 col-md-7 col-12 res-width-padding-bottom">
                  <div class="text-center small-logo">
                     <img src="{{asset('/resources/images-raack/courses/client-logo-3.png') }}" alt="Dance classes in kilpauk" class="img-fluid">
                     <h4 class="section-padding-bottom font-weight400">(07-12 years | 13 years & above)</h4>
                     <h5 class="theme-color font-weight900">From screen to stage <br> Groove with filmy tunes</h5>
                     <div class="gallery-btns">
                        <a href="{{ URL('/dance-schools') }}" class="primary-btn" style="min-width: 150px; padding: 10px 20px; margin-top: 30px;">Watch Videos</a>
                        <a href="#hst-pop-modal_name" class="btn-hst-pop-modal primary-btn" style="min-width: 150px; padding: 10px 20px;  margin-top: 30px;">
                           Register now
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row rowsafari align-items-center mt-4 pt-4" >
               <div class="col-lg-6 col-sm-12 col-md-5 col-12 res-width-padding-bottom res-left-mar0">
                  <img src="{{asset('/resources/images-raack/courses/course-5.png') }}" alt="Dance classes in Mugalivakkam" class="img-fluid">
               </div>
               <div class="col-lg-6 col-sm-12 col-md-7 col-12 res-width-padding-bottom">
                  <div class="text-center small-logo">
                     <img src="{{asset('/resources/images-raack/courses/client-logo-2.png') }}" alt="Dance classes in Keelkatalai" class="img-fluid">
                     <h4 class="section-padding-bottom font-weight400">(Adults)</h4>
                     <h5 class="theme-color font-weight900">Dance your way to a healthier and happier you!</h5>
                     <div class="gallery-btns">
                        <a href="{{ URL('/dance-academy') }}" class="primary-btn" style="min-width: 150px; padding: 10px 20px; margin-top: 30px;">Watch Videos</a>
                        <a href="#hst-pop-modal_name" class="btn-hst-pop-modal primary-btn" style="min-width: 150px; padding: 10px 20px;  margin-top: 30px;">
                           Register now
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row rowsafari align-items-center mt-4 pt-4" >
               <div class="col-lg-6 col-sm-12 col-md-5 col-12 order-md-2 res-width-padding-bottom res-left-mar0">
                  <img src="{{asset('/resources/images-raack/courses/course-6.png') }}" alt="Dance classes in sholinganallur" class="img-fluid">
               </div>
               <div class="col-lg-6 col-sm-12 col-md-7 col-12 res-width-padding-bottom">
                  <div class="text-center small-logo">
                     <img src="{{asset('/resources/images-raack/courses/client-logo-4.png') }}" alt="Dance classes in Pallikaranai" class="img-fluid">
                     <h4 class="section-padding-bottom font-weight400">(07-12 years | 13 years & above)</h4>
                     <h5 class="theme-color font-weight900">One hour of zero baggage <br>Your weekily dosage of rythem and dance</h5>
                     <div class="gallery-btns">
                        <a href="{{ URL('/dance-classes') }}" class="primary-btn" style="min-width: 150px; padding: 10px 20px; margin-top: 30px;">Watch Videos</a>
                        <a href="#hst-pop-modal_name" class="btn-hst-pop-modal primary-btn" style="min-width: 150px; padding: 10px 20px;  margin-top: 30px;">
                           Register now
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      <!--=============================== ACADEMY AREA END ======================-->
      <!--================================= CTA START ==========================================-->
      <section class="section-white-bg cta-bg-img animate-scroll" style="padding-top: 400px; padding-bottom: 30px;"  data-animate="animate__animated animate__fadeInUp">
      </section>
      <!--================================= CTA END ==========================================-->
      <!--=============================== ACADEMY AREA START =======================-->
      <section class="section-space section-white-bg animate-scroll" data-animate="animate__animated animate__fadeInUp">
         <div class="container">
			<div class="section-heading">
               <div class="client-logo-slider">
                  <h1 class="mx-auto theme-color text-center">SIGN UP <span class="font-weight400 text-dark">TODAY</span></h1><img src="{{asset('/resources/images-raack/114x52.png') }}" alt="Dance classes in Kolathur" class="img-fluid course-ul-img-right animate-scroll" data-animate="animate__animated animate__zoomIn">
               </div>
            </div>
            <div class="row section-heading">
               <div  class="col-lg-6">
                  <p class="section-padding-bottom">Embark on your dance journey with Raack Dance Academy and discover the transformative power of movement-based art. Join us in celebrating the uniqueness of every individual through the powerful expression of dance. Enroll in your desired course today and let your dance story unfold.</p>
               </div>
               <div class="col-lg-5 offset-1  res-left-mar0">                  
                  @include('forms.contactus')
               </div>
            </div>
         </div>
      </section>
      <!--=============================== ACADEMY AREA END ======================-->
@endsection	  
@extends('layouts.base')
@section('content') 
<!--=============================== VIDEO AREA START =======================-->
	  <header  class="section-dark-bg position-relative">
      <div class="loader"></div>
		<div id="home">
			<div class="video-bgimage video-section bgimage-property">
				<div class="pattern-overlay video-padding"  style="padding-top: 80px;">	<a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=px38XjQ4zEI',containment:'.video-section', quality:'large', autoPlay:true, mute:true, opacity:1}"></a>
					<div class="container">
						<div class="col-sm-12 col-md-12 col-lg-8">
							<div class="header-div">
								<div class="event-book-header">
								 <h1 class="section-margin-bottom font-weight900" style="padding-bottom: 200px;">FIRST STEP <br><span class="font-weight400">2024</span></h1>
								<h5 style="letter-spacing: 2px;" class="font-weight400 text-white">THE ANNUAL RECITAL</h5>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>    
      <!--=============================== VIDEO AREA END ======================-->
      <!--=============================== FIRST STEP AREA START =======================-->
      <section class="section-space section-white-bg animate-scroll pt-0" data-animate="animate__animated animate__fadeInUp">
         <div class="container">
            <div class="row rowsafari align-items-center">
               <div class="col-lg-8 mx-auto">
                  <div class="section-heading text-center">
				     <img src="{{asset('/resources/images-raack/gallery/first.png') }}" alt="Dance classes in Thoraipakkam" class="img-fluid img-overlap-top">
                     <h3 class="section-margin-bottom"><span class="theme-color">STARTS IN</h3>
                     <div class="row rowsafari full-width-page section-padding-bottom mt-4 pt-4">
                        <div class="col-lg-3 col-sm-6 col-md-3 col-12 res-margin-bottom text-center">
                           <div class="number-bg res-float-right">
                              <div class="number-bg-content">
                                 <p class="book-day-col text-dark"><span class="countdown theme-color" id="days"></span>
                                 </p>
                                 <h6 class="title-booknow text-dark">DAYS</h6>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-3 col-12 text-center res-margin-bottom">
                           <div class="number-bg res-float-left">
                              <div class="number-bg-content">
                                 <p class="book-day-col text-dark"><span class="countdown theme-color" id="hours"></span>
                                 </p>
                                 <h6 class="title-booknow text-dark">HOURS</h6>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-3 col-12 text-center res-margin-bottom">
                           <div class="number-bg res-float-right">
                              <div class="number-bg-content">
                                 <p class="book-day-col text-dark"><span class="countdown theme-color" id="minutes"></span>
                                 </p>
                                 <h6 class="title-booknow text-dark">MINUTES</h6>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-3 col-12 text-center res-margin-bottom">
                           <div class="number-bg res-float-left">
                              <div class="number-bg-content">
                                 <p class="book-day-col text-dark"><span class="countdown theme-color" id="seconds"></span>
                                 </p>
                                 <h6 class="title-booknow text-dark">SECONDS</h6>
                              </div>
                           </div>
                        </div>
                     </div> 
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--=============================== FIRST STEP AREA END ======================-->
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
	  
      <!--=============================== EVENT DETAILS AREA START =======================-->
     <section class="section-space health-world-1200-com animate-scroll" data-animate="animate__animated animate__fadeInUp">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 mx-auto text-center">
                  <div class="client-logo-slider">
                     <img src="{{asset('/resources/images-raack/Ascent-Short.png') }}" alt="Ascent-Short" class="img-fluid team-ul-img animate-scroll" data-animate="animate__animated animate__zoomIn">
                     <h2 class="mx-auto text-dark text-center section-grp-margin-bottom">4000<sup>+</sup> <span class="theme-color font-weight400">PARTICIPANTS</span></h2>
                     <img src="{{asset('/resources/images-raack/Ascent-Short.png') }}" alt="Ascent-Short" class="img-fluid team-ul-img-right animate-scroll" data-animate="animate__animated animate__zoomIn">
                  </div>
                  <h4 class="section-margin-bottom text-center theme-color">A Gala Beyond Compare</h4>
                  <p>This is not just a recital; it's Chennai's grandest dance gala, a stage where over 400 talented participants from all corners of Raack's extensive network will come together to showcase their artistic brilliance. From the youngest Little legends to the seasoned Adult Achievers, each performer will express their emotions through dance, weaving stories that will leave you mesmerised. </p>
               </div>
            </div>
            <!-- <div class="row section-heading align-items-center">
				<div class="col-lg-6">
					<h4 class="section-margin-bottom text-center theme-color">A Gala Beyond Compare</h4>
					<p>This is not just a recital; it's Chennai's grandest dance gala, a stage where over 400 talented participants from all corners of Raack's extensive network will come together to showcase their artistic brilliance. From the youngest Little legends to the seasoned Adult Achievers, each performer will express their emotions through dance, weaving stories that will leave you mesmerised. </p>
				</div>
			   <div class="col-lg-6 mx-auto text-center">
				<h1 class="font-weight400 text-dark"><span class="health-world-1200">4000<sup>+</sup></span><br>participants</h1>
			   </div>
            </div>  -->
         </div> 
      </section>
      <!--=============================== EVENT DETAILS AREA END ======================-->
	  
      <!--=============================== EVENT DETAILS AREA START =======================-->
      <section class="section-padding-bottom section-margin-bottom" data-animate="animate__animated animate__fadeInUp">
         <div class="container">
		   <div class="client-logo-slider">
			  <h4 class="mx-auto text-dark text-center"><span class="theme-color">Why Attend?</span></h4>
		   </div>
         </div> 
      </section>
      <!--=============================== EVENT DETAILS AREA END ======================-->
	  
      <!--=============================== EVENT DETAILS AREA START =======================-->
      <section class="section-space section-dark-bg-2 animate-scroll" data-animate="animate__animated animate__fadeInUp">
         <div class="container">
            <div class="row rowsafari align-items-center section-margin-bottom pb-2">
               <div class="col-lg-8 text-white text-center mx-auto">
                  <div class="text-center">
						   <div class="section-padding-bottom">
                           <div class="details">
                              <h6 class="theme-color pb-2">Inspiration and Aspiration</h6>
                              <p class="text-white normal-p">Witnessing the dedication and talent of our dancers will inspire you to pursue your own dreams, whether they lie in dance or any other endeavor.</p>
                           </div>
                        </div>
                        <div class="section-padding-bottom">
                           <div class="details">
                              <h6 class="theme-color pb-2">Community and Connection</h6>
                              <p class="text-white normal-p">

                                 Community and Connection: The Annual Recital is a gathering of like-minded individuals who share a passion for dance. It's a chance to connect and be part of a supportive community.</p>
                           </div>
                        </div>
                        <div>
                           <div class="details">
                              <h6 class="theme-color pb-2">Pure Entertainment:</h6>
                              <p class="text-white normal-p">Be prepared to be wowed by the sheer talent and creativity on display. From graceful ballet to energetic hip-hop, there's something for everyone.
                              </p>
                           </div>
                        </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--=============================== EVENT DETAILS AREA END ======================-->
	  
      <!--================================= CLIENT LOGO AREA START =======================-->
      <section class="section-space animate-scroll gallery-slider"  data-animate="animate__animated animate__fadeInUp">
         <div class="container">
            <div class="row">
               <div class="col-lg-10 text-center mx-auto">
					<img src="{{asset('/resources/images-raack/icons/Firststeppage.gif') }}" width="120px" alt="Dance classes in Mylapore">
					<h3 class="theme-color section-margin-bottom">Join Us in Celebration</h3>
					<p class="intro-content text-center">Come, be a part of Raack's journey as we take the first step towards creating memories that will last a lifetime. Let's make this year's Annual Recital an experience that leaves us all spellbound.</p>
               <p class="dark-color text-center letter-spacing theme-color"><b>See you on the dance floor!</b></p>
				</div>
			</div>
         </div>
      </section>
      <!--================================ CLIENT LOGO AREA END ============================-->
	  
      <!--=============================== EVENT DETAILS AREA START =======================-->
      <section class="section-space animate-scroll" style="padding-bottom: 50px;" data-animate="animate__animated animate__fadeInUp">
         <div class="container">
            <div class="">
               <div class="row">
                  <div class="col-lg-12 mx-auto text-center">
                     <div class="client-logo-slider">
                        <img src="{{asset('/resources/images-raack/Ascent-Short.png') }}" alt="Ascent-Short" class="img-fluid team-ul-img animate-scroll" data-animate="animate__animated animate__zoomIn">
                        <h2 class="mx-auto text-dark text-center section-grp-margin-bottom">EVENT <span class="theme-color font-weight400">GALLERY</span></h2>
                        <img src="{{asset('/resources/images-raack/Ascent-Short.png') }}" alt="Ascent-Short" class="img-fluid team-ul-img-right animate-scroll" data-animate="animate__animated animate__zoomIn">
                     </div>
                  </div>
               </div>

               <div class="row mt-4">
                  <div class="col-lg-10 mx-auto">
                   <p class="intro-content text-center">Relive the exhilaration of past events through captivating snapshots in our Events Gallery, capturing the essence of Raack Dance Academy's mesmerizing Performances.</p>
                  </div>
               </div>
            </div>
            
         </div> 
      </section>
      <!--=============================== EVENT DETAILS AREA END ======================-->
	  
      <!--================================= CLIENT LOGO AREA START =======================-->
      <section class="section-dark-bg section-space animate-scroll gallery-slider"  data-animate="animate__animated animate__fadeInUp">
         <div class="container">
            <div class="section-heading">
               <h3 class="section-margin-bottom text-white"><span class="theme-color">First </span>Step (2023)</h3>
               <img src="{{asset('/resources/images-raack/gallery/arrow.png') }}" alt="Dance classes in old perungalathur" class="img-fluid gallery-ul float-right res-bot10" >
            </div>
         </div>
         <div class="container-fluid" style="overflow: hidden;">
            <div id="logo-slider" class="owl-carousel owl-theme " style="right: 50%; transform: translateX(56%); opacity: 1; display: block;">
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-classes-in-chennai.png') }}" alt="Dance classes in Velachery" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-academy-in-chennai.png') }}" alt="Dance classes in Neelankarai" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-classes-for-kids-in-chennai.png') }}" alt="Dance classes in Ramapuram" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-classes-for-adults-in-chennai.png') }}" alt="Dance classes in saidapet" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-classes-in-chennai.png') }}" alt="Dance classes in Avadi" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-academy-in-chennai.png') }}" alt="Dance classes in Mogappair" class="feature-circle-img img-fluid">
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div id="logo-slider2" class="owl-carousel owl-theme " style="left: 50%; transform: translateX(-60%);">
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-classes-in-chennai.png') }}" alt="Dance classes in Tambaram" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-academy-in-chennai.png') }}" alt="Dance classes in kilpauk" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-classes-for-kids-in-chennai.png') }}" alt="Dance classes in Mugalivakkam" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-classes-for-adults-in-chennai.png') }}" alt="Dance classes in Keelkatalai" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-classes-in-chennai.png') }}" alt="Dance classes in sholinganallur" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-academy-in-chennai.png') }}" alt="Dance classes in Pallikaranai" class="feature-circle-img img-fluid">
               </div>
            </div>
         </div>
      </section>
      <!--================================ CLIENT LOGO AREA END ============================-->
	  
      <!--================================= CLIENT LOGO AREA START =======================-->
      <section class="section-space animate-scroll gallery-slider"  data-animate="animate__animated animate__fadeInUp">
         <div class="container">
            <div class="row">
               <div class="col-lg-7 text-left section-padding-bottom">
					<h2 class="theme-color">BOOK YOUR</h2>
					<h4 class="theme-color"><span class="font-weight400 text-dark">FRONT ROW</span> SEATS</h4>
					<img src="{{asset('/resources/images-raack/114x52.png') }}" alt="Dance classes in Kolathur" class="img-fluid animate-scroll" data-animate="animate__animated animate__zoomIn">
				</div>
			</div>
			<p class="intro-content">Be sure to mark your calendars for these exciting events and join us in witnessing the incredible talent and passion of our students. Experience the joy, energy, and transformation that dance brings to their lives. Stay tuned for updates on dates, timing, and ticket information. Don't miss out on these unforgettable moments that define the vibrant spirit of Raack Dance Academy.</p>
         </div>
      </section>
      <!--================================ CLIENT LOGO AREA END ============================-->
      <!--================================= CLIENT LOGO AREA START =======================-->
      <section class="section-space animate-scroll gallery-slider" data-animate="animate__animated animate__fadeInUp">
         <div class="container">
            <div class="row">
               <div class="col-lg-10 mx-auto text-center">
                  <h4 class="section-margin-bottom">RESERVE YOUR <span class="theme-color font-weight400">TICKET TODAY</span>!</h4>
                  <img src="{{asset('/resources/images-raack/114x52.png') }}" alt="Dance classes in Guduvanchery" class="img-fluid animate-scroll" data-animate="animate__animated animate__zoomIn"><br>
                  <a href="{{ URL('/events-ticket-booking') }}" class="primary-btn" style="border-radius: 66px; margin-top: 30px;  min-width: 200px;">
                     BOOK TICKETS
                  </a>
				</div>
			</div>
         </div>
      </section>
      <!--================================ CLIENT LOGO AREA END ============================-->
@endsection	  
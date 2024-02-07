@extends('layouts.base')
@section('content') 
<!--================================= HEADER START ==========================================-->
<header>
<div id="home">
	<div class="video-bgimage video-section bgimage-property">
		<div class="pattern-overlay video-padding">	<a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=4uBIqKXmpC0',containment:'.video-section', quality:'large', autoPlay:true, mute:true, opacity:1}"></a>
			<div class="container">
				<div class="col-sm-12 col-md-12 col-lg-8">
					<div class="header-div">
						<div class="text-left no-pad">
				   <h1>join the raack<br><span class="stroke-text">family today</span></h1>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header> 
<!--================================= HEADER END ==========================================-->	
<!--=============================== Entrepreneurship AREA START =======================-->
<section class="section-space section-white-bg animate-scroll" data-animate="animate__animated animate__fadeInUp">
 <div class="container">
	<div class="row rowsafari align-items-center">
	   <div class="col-lg-8 mx-auto">
		  <div class="section-heading text-center">
			 <h3 class="section-margin-bottom">Passionate About <br><span class="theme-color">Dance</span> & Entrepreneurship?</h3>
			 <img src="{{asset('/resources/images-raack/114x52.png') }}" alt="Dance classes in Thoraipakkam" class="img-fluid fran2-ul float-right res-bot20" >		
			 <p class="section-margin-bottom res-bot10">A once in a lifetime opportunity to set up your own dance studio backed by the most sought after dance academy of South India! RAACK is now a family of 19 studios and looking out for people with creativity in heart and dance in mind to take up franchises of RAACK at your place!</p>
			 <p class="section-margin-bottom res-bot10">Open your own well-furnished dance studio at a low investment and be at the forefront of dance academies with best-in-class trainers and top-notch dance syllabus to take up dancing to a whole new level for the students.</p>
			 <a <a href="{{ URL('/dance-studios-in-chennai') }}" class="primary-btn" style="margin-top: 30px;">
				Browse Our Locations
				<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 320 512'>
				   <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
				   <path d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'/>
				</svg>
			 </a>
		  </div>
	   </div>
	</div>
 </div>
</section>
<!--=============================== Entrepreneurship AREA END ======================-->
<!--=============================== TESTIMONIAL AREA START =================================-->
<section class="section-space testimonial section-gray-bg animate-scroll" data-animate="animate__animated animate__fadeInUp">
 <div class="container">
	<div class="row rowsafari">
	   <div class="col-lg-10 text-center mx-auto">
		  <div class="section-head-space">
			 <h3 class="section-margin-bottom">Hear From Our <br><span class="academy-raack">Franchisee</span> Owners</h3>
			 <p>The success of any franchise is determined by the success of its franchise partners. Raack is fortunate to have many such success stories to tell. Learn why our franchisee owners chose Raack Dance Academy.</p>
		  </div>
	   </div>
	</div>
	<div class="row rowsafari">
	   <div class="col-lg-10 mx-auto">
		  <div class="team" id="col-carousel" >
			 <div class="item test-content row testimonial-card">
				<div class="tab-res-margin-bot col-lg-4" style="padding-left: 0;">
				   <img src="{{asset('/resources/images-raack/franchise-head/muthu.png') }}" alt="Dance classes in Mylapore" class="img-fluid" style="border-radius: 40px;">
				</div>
				<div class="res-textcenter-767 col-lg-8" style="padding: 30px 30px 40px;">
				   <div class="quote">
					  <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
						 <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
						 <path d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z"/>
					  </svg>
				   </div>
				   <p class="section-margin-bottom justify">"In 2020, we envisioned creating a nurturing art and dance community for kids' mental well-being. Pallikaranai was our chosen location, with a professional team by our side. When it came to dance, 'RAACK' was the clear choice, and it remains my best decision to date. It's a space for self-expression where our ideas are valued. With strong leaders and mentors, we work as a close-knit family. So far, it's been an amazing journey towards becoming the top dance brand, not just in Pallikaranai, but across the country. This is only the beginning."</p>
				   <h5 class="section-grp-margin-bottom text-capitalize">Muthu Kumar</h5>
				   <p class="lt-spacing">Pallikaranai</p>
				</div>
			 </div>
			 <div class="item test-content row testimonial-card">
				<div class="tab-res-margin-bot col-lg-4" style="padding-left: 0;">
				   <img src="{{asset('/resources/images-raack/franchise-head/smitha.png') }}" alt="Dance classes in old perungalathur" class="img-fluid" style="border-radius: 40px;">
				</div>
				<div class="res-textcenter-767 col-lg-8" style="padding: 30px 30px 40px;">
				   <div class="quote">
					  <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
						 <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
						 <path d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z"/>
					  </svg>
				   </div>
				   <p class="section-margin-bottom justify">"I became a Raack franchisee at the Kolathur centre, driven by my love for children and dance. It's been a fulfilling journey. Seeing the kids' smiles and their dedication to mastering dance steps reaffirms my decision. The genuine joy in parents' eyes is heartwarming. Raack has provided invaluable support, especially since I'm not a dancer. Excited for more years of learning and spreading happiness with parents and children!"</p>
				   <h5 class="section-grp-margin-bottom text-capitalize">Smitha Arun</h5>
				   <p class="lt-spacing">Kolathur</p>
				</div>
			 </div>
			 <div class="item test-content row testimonial-card">
				<div class="tab-res-margin-bot col-lg-4" style="padding-left: 0;">
				   <img src="{{asset('/resources/images-raack/franchise-head/aiswarya.png') }}" alt="Dance classes in Velachery" class="img-fluid" style="border-radius: 40px;">
				</div>
				<div class="res-textcenter-767 col-lg-8" style="padding: 30px 30px 40px;">
				   <div class="quote">
					  <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
						 <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
						 <path d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z"/>
					  </svg>
				   </div>
				   <p class="section-margin-bottom justify">Starting in RAACK during lockdown was a unique challenge, but it's time to redefine the norm! Grateful that dance lets us spread positivity, uplift our staff, and give back to the community. Creative courses ignite our students' imagination, celebrating its beauty while fostering competition and participation. Founder's Vision, Core Team, and CEO's genuine care for every Franchise Partner sets it apart.
					 <br> Proud to be part of the RAACK FAMILY!"</p>
				   <h5 class="section-grp-margin-bottom text-capitalize">Aishwarya</h5>
				   <p class="lt-spacing">Old Perungalathur</p>
				</div>
			 </div>
			 <div class="item test-content row testimonial-card">
				<div class="tab-res-margin-bot col-lg-4" style="padding-left: 0;">
				   <img src="{{asset('/resources/images-raack/franchise-head/purni-magesh.png') }}" alt="Dance classes in Neelankarai" class="img-fluid" style="border-radius: 40px;">
				</div>
				<div class="res-textcenter-767 col-lg-8" style="padding: 30px 30px 40px;">
				   <div class="quote">
					  <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
						 <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
						 <path d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z"/>
					  </svg>
				   </div>
				   <p class="section-margin-bottom justify">As a female entrepreneur, I'm proud to be part of Raack, South India's premier dance academy. My mission: thrive with passion, live with compassion, and embrace life's vibrancy, fun, and style. Taking this franchise aligns perfectly with that goal. Dance is my everything and nothing all at once, providing balance in life. Raack is the perfect place for my mission</p>
				   <h5 class="section-grp-margin-bottom text-capitalize">Purni Magesh</h5>
				   <p class="lt-spacing">Cuddalore</p>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
 </div>
</section>
<!--================================== TESTIMONIAL AREA END	===================================-->
<!--============================= COUNTER AREA START ======================-->
<section class="section-space section-white-bg animate-scroll" data-animate="animate__animated animate__fadeInUp">
 <div class="container">
	<div class="row section-heading">
	   <div class="col-lg-7 res-bot10">
		  <h3>Why Choose<br><span class="academy-raack"> Raack</span> Academy?</h3>
		  <img src="{{asset('/resources/images-raack/114x52.png') }}" alt="Dance classes in Ramapuram" class="img-fluid phylosophy-ul-img">
	   </div>
	   <div class="col-lg-5">
		  <p class="section-padding-bottom justify">As a Raack Dance Academy franchisee, you'll have the opportunity to create a thriving dance community in your own area. Our proven business model, extensive support system, and renowned brand reputation will provide you with a solid foundation for success.</p>
	   </div>
	</div>
	<div class="row rowsafari floral-space">
	   <div class="col-lg-3 col-sm-6 col-md-3 col-12 res-text-center res-margin-bottom">
		  <div class="counter-box counter-width">
			 <p class="subtitle"><span class="count-num">19</span>+</p>
			 <h5 class="title-counterup text-capitalize">Dance<br> Studios</h5>
		  </div>
	   </div>
	   <div class="col-lg-3 col-sm-6 col-md-3 col-12 res-text-center res-margin-bottom">
		  <div class="counter-box counter-width">
			 <p class="subtitle"><span class="count-num">100000</span>+</p>
			 <h5 class="title-counterup text-capitalize">Students<br> Trained</h5>
		  </div>
	   </div>
	   <div class="col-lg-3 col-sm-6 col-md-3 col-12 res-text-center res-row-margin-bottom">
		  <div class="counter-box counter-width">
			 <p class="subtitle"><span class="count-num">4000</span>+</p>
			 <h5 class="title-counterup text-capitalize">Events<br> Performed</h5>
		  </div>
	   </div>
	   <div class="col-lg-3 col-sm-6 col-md-3 col-12 res-text-center ">
		  <div class="counter-box counter-width">
			 <p class="subtitle"><span class="count-num">25</span></p>
			 <h5 class="title-counterup text-capitalize">Years of Dance <br>Expertise</h5>
		  </div>
	   </div>
	</div>
 </div>
</section>
<!--=============================== COUNTER AREA END ========================-->
<!--=============================== ACADEMY AREA START =======================-->
<section class="section-space section-white-bg animate-scroll" data-animate="animate__animated animate__fadeInUp">
 <div class="container">
	<img src="{{asset('/resources/images-raack/franchise-1/arrow-icon.png') }}" alt="Dance classes in saidapet" class="img-fluid fran2-ul-2 float-left res-bot10" >		
	<div class="row rowsafari align-items-center">
	   <div class="col-lg-8 mx-auto">
		  <div class="section-heading text-center">
			 <h3 class="section-margin-bottom"><span class="theme-color">Franchise <br></span> Support & Benefits</h3>
		  </div>
	   </div>
	</div>
	<div class="row rowsafari">
	   <div class="col-lg-4 col-sm-6 col-md-6 col-12 section-padding-bottom res-text-center">
		  <div class="our-services">
			 <div class="service-sec">
				<span class="service-num">1</span>
				<h5 class="ser-head text-capitalize">Established Brand</h5>
			 </div>
			 <p>Raack Dance Academy is a well-known name in the dance industry, trusted by students and parents alike. Benefit from our strong brand recognition and reputation, which will give you a competitive edge in the market.</p>
		  </div>
	   </div>
	   <div class="col-lg-4 col-sm-6 col-md-6 col-12 section-padding-bottom res-text-center">
		  <div class="our-services">
			 <div class="service-sec">
				<span class="service-num">2</span>
				<h5 class="ser-head text-capitalize">Comprehensive <br>Training</h5>
			 </div>
			 <p>We believe in equipping our franchisees with the knowledge and skills needed to run a successful dance academy. Our comprehensive training program covers various aspects, including operations, marketing, curriculum implementation, and business management.</p>
		  </div>
	   </div>
	   <div class="col-lg-4 col-sm-6 col-md-6 col-12 section-padding-bottom res-text-center">
		  <div class="our-services">
			 <div class="service-sec">
				<span class="service-num">3</span>
				<h5 class="ser-head text-capitalize">Business Operation <br>Support</h5>
			 </div>
			 <p>We are committed to your success every step of the way. Our experienced team will provide ongoing support and guidance, helping you navigate challenges and maximize growth opportunities. From marketing assistance to curriculum updates, we'll be there to support you.</p>
		  </div>
	   </div>
	   <div class="col-lg-4 offset-2 col-sm-6 col-md-6 col-12 res-text-center res-row-margin-bottom res-text-left res-left-mar0">
		  <div class="our-services">
			 <div class="service-sec">
				<span class="service-num">4</span>
				<h5 class="ser-head text-capitalize">Exclusive Territory</h5>
			 </div>
			 <p>As a Raack Dance Academy franchisee, you'll enjoy the benefits of an exclusive territory, ensuring that you have a dedicated market to serve and grow within.</p>
		  </div>
	   </div>
	   <div class="col-lg-4 col-sm-6 col-md-6 col-12 res-text-center">
		  <div class="our-services">
			 <div class="service-sec">
				<span class="service-num">5</span>
				<h5 class="ser-head text-capitalize">Inspire Lives</h5>
			 </div>
			 <p>By becoming a Raack Dance Academy franchisee, you'll have the incredible opportunity to make a positive impact on the lives of students in your community. Witness the transformation and joy as you inspire individuals of all ages through the powerful art of dance.</p>
		  </div>
	   </div>
	</div>
 </div>
</section>
<!--=============================== ACADEMY AREA END ======================-->
<!--=============================== FORM AREA START =======================-->
<section class="section-space section-white-bg animate-scroll" data-animate="animate__animated animate__fadeInUp">
 <div class="container">
	<div class="row">
	   <div class="section-heading col-lg-6 mx-auto text-center">
		  <h3 class="section-margin-bottom"> Join Us On This<br>	<span class="academy-raack"> Exciting</span> Journey!</h3>
		  <p class="section-margin-bottom res-bot10">Join us on this exciting dance adventure and unleash your entrepreneurial spirit with Raack Dance Academy. Let's work together to create a vibrant, thriving dance community that brings happiness, creativity, and self-expression to countless lives.</p>
		  <p class="section-margin-bottom res-bot10">To learn more about franchise opportunities, investment details, and how to get started, please fill out our franchise inquiry form or contact us directly. We look forward to welcoming you to the Raack Dance Academy family!</p>
	   </div>
	</div>
	<div class="row rowsafari align-items-center">
	   <div class="col-lg-6 col-sm-12 col-md-12 col-12 mx-auto">
		  @include('forms.contactus')
	   </div>
	</div>
 </div>
</section>
<!--=============================== FORM AREA END ======================-->
@endsection

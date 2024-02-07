@extends('layouts.base')
@section('content')
<!--================================= HEADER START ==========================================-->
<section class="animate-scroll studio-bg-img" data-animate="animate__animated animate__fadeInUp" style="background-image: url({{asset('/resources/images-raack/studio-bg-image/velachery.png') }});">
   <div class="container">
	  <!-- <div class="text-right">
		 <h1 style="color: #ffffff;" class="font-weight400 rounded-box">Velachery</span></h1>
	  </div> -->
   </div>
</section>

<!--================================= HEADER END ==========================================-->
<!--=============================== ACADEMY AREA START =======================-->
<section class="section-space section-white-bg animate-scroll" data-animate="animate__animated animate__fadeInUp">
 <div class="container">
	<div class="row">
	   <div class="col-lg-12 mx-auto text-center">
		  <div class="client-logo-slider">
			 <img src="{{asset('/resources/images-raack/Ascent-Short.png') }}" alt="Ascent-Short" class="img-fluid team-ul-img animate-scroll" data-animate="animate__animated animate__zoomIn">
			 <h2 class="mx-auto text-dark text-center section-grp-margin-bottom">Studio <span class="theme-color font-weight400">Locations</span></h2>
			 <img src="{{asset('/resources/images-raack/Ascent-Short.png') }}" alt="Ascent-Short" class="img-fluid team-ul-img-right animate-scroll" data-animate="animate__animated animate__zoomIn">
		  </div>
	   </div>
	   <ul class="studio-locate">
		  <ul>
			<li><a href="{{ URL('/studios-kilpauk') }}">Kilpauk</a></li>
			<li><a href="{{ URL('/studios-mylapore') }}">Mylapore</a></li>
			<li><a href="{{ URL('/studios-velachery') }}">Velachery</a></li>
			<li><a href="{{ URL('/studios-cuddalore') }}">Cuddalore</a></li>
			<li><a href="{{ URL('/studios-tambaram') }}">Tambaram</a></li>
			<li><a href="{{ URL('/studios-mogappair') }}">Mogappair</a></li>
			<li><a href="{{ URL('/studios-thoraipakkam') }}">Thoraipakkam</a></li>
			<li><a href="{{ URL('/studios-avadi') }}">Avadi</a></li>
			<li><a href="{{ URL('/studios-keelkattalai') }}">Keelkattalai</a></li>
			<li><a href="{{ URL('/studios-mugalivakkam') }}">Mugalivakkam</a></li>
			<li><a href="{{ URL('/studios-neelankarai') }}">Neelankarai</a></li>
			<li><a href="{{ URL('/studios-kolathur') }}">Kolathur</a></li>
			<li><a href="{{ URL('/studios-pallikaranai') }}">Pallikaranai</a></li>
			<li><a href="{{ URL('/studios-sholinganallur') }}">Sholinganallur</a></li>
			<li><a href="{{ URL('/studios-old-perungalathur') }}">Old Perungalathur</a></li>
			<li><a href="{{ URL('/studios-guduvanchery') }}">Guduvanchery</a></li>
			<li><a href="{{ URL('/studios-ramapuram') }}">Ramapuram</a></li>
			<li><a href="{{ URL('/studios-pondicherry') }}">Pondicherry</a></li>
			<li><a href="{{ URL('/studios-saidapet') }}">Saidapet</a></li>
	   </ul>
	</div> 
 </div>
</section>
<!--=============================== ACADEMY AREA END ======================-->
<!--=============================== ACADEMY AREA START =======================-->
<section class="section-space section-gray-bg animate-scroll" data-animate="animate__animated animate__fadeInUp">
 <div class="container">
	<div class="row section-heading">
	   <div  class="col-lg-6 res-row-margin-bottom">
		  <img src="{{asset('/resources/images-raack/studios/arrow.png') }}" alt="Dance classes in Thoraipakkam" class="img-fluid phylosophy-ul-img">		
		  <h3 style="margin-top: 10px;">Join <span class="academy-raack"> Raack </span> Academy <br>Today!</h3>
		  <div class="row rowsafari align-items-center" style="margin-top: 50px;">
			 <div class="col-lg-5 col-6 col-sm-6 col-md-6">
				<div style="display: flex; align-items: center; margin-bottom: 5px;">
				   <img src="{{asset('/resources/images-raack/dance-studios-in-chennai.png') }}" alt="Dance classes in Mylapore" class="img-fluid" style="width: 24px; height: 24px; margin-right: 10px;">
				   <h6>Phone</h6>
				</div>
				<p><a href="tel:+919003024113" class="letter-spacing">+91 90030 24113</a></p>
			 </div>
			 <div class="col-lg-5 col-6 col-sm-6 col-md-6">
				<div style="display: flex; align-items: center; margin-bottom: 5px;">
				   <img src="{{asset('/resources/images-raack/dance-schools-in-chennai.png') }}" alt="Dance classes in old perungalathur" class="img-fluid" style="width: 24px; height: 24px; margin-right: 10px">
				   <h6>Email</h6>
				</div>
				<p><a href="mailto:enquiry@raack.com">enquiry@raack.com</a></p>
			 </div>
		  </div>
	   </div>
	   <div class="col-lg-5 res-left-mar0">
		  <p class="section-padding-bottom justify">Join us at Raack Dance Academy and be part of a community that celebrates movement, creativity, and the power of dance. Together, let's unlock your true potential and embark on a remarkable dance adventure.</p>
		  @include('forms.contactus')
	   </div>
	</div>
 </div>
</section>
<!--=============================== ACADEMY AREA END ======================--> 
@endsection	  
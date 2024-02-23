<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">	
	
	<title> Raack - Dance Schools in Chennai, Best Dance Studio in Chennai, Dance classes for Kids, Adults Chennai</title>
	
	<meta name="description" content="Raack, Dance Schools in Chennai, Best Dance Studio in Chennai, Dance Classes for kids Chennai, Dance Classes for Adults Chennai, Dance Classes in Thoraipakkam,Mylapore,Perungalathur,Velachery,Neelankarai,Ramapuram,Saidapet,Avadi,Mogappair,Tambaram,Kilpauk,Mugalivakkam,Keelkatalai,Sholinganallur,Pallikaranai,Kolathur,Guduvanchery.">

	<meta name="keyword" content="Dance schools in Chennai, Dance classes in Chennai, Dance studios in Chennai, Dance academy in Chennai, Dance classes in Thoraipakkam, Dance classes in Mylapore, Dance classes in old perungalathur, Dance classes in Velachery, Dance classes in Neelankarai, Dance classes in Ramapuram, Dance classes in saidapet, Dance classes in Avadi, Dance classes in Mogappair, Dance classes in Tambaram, Dance classes in kilpauk, Dance classes in Mugalivakkam, Dance classes in Keelkatalai, Dance classes in sholinganallur, Dance classes in Pallikaranai, Dance classes in Kolathur, Dance classes in Guduvanchery, Dance classes for adults Chennai, Dance classes for kids Chennai.">	

	<!-- FAVICON LINK -->
	<link rel="shortcut icon" href="{{asset('/resources/images-raack/logo.png')}}" type="image/x-icon">
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{asset('/resources/css/vendor/animate.min.css')}}">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('/resources/css/vendor/bootstrap.min.css')}}">
	<!-- FONT AWESOME -->
	<link rel="stylesheet" type="text/css" href="{{asset('/resources/css/vendor/fontawesome.min.css')}}">
	<!-- CALENDER -->
	<link rel="stylesheet" type="text/css" href="{{asset('/resources/css/vendor/calendar.css')}}">
	<!-- CAROUSEL STYLE LINK Test -->
	<link rel="stylesheet" type="text/css" href="{{asset('/resources/css/vendor/owl-carousel/owl.carousel.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/resources/css/vendor/owl-carousel/owl.theme.css')}}">


	<link rel="stylesheet" href="{{asset('/resources/css/vendor/owl-carousel/owl.carousel2.min.css')}}">
	<link rel="stylesheet" href="{{asset('/resources/css/vendor/owl-carousel/owl.theme.default.min.css')}}">
	<!-- Carousel Bootstrap CSS and JavaScript 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->


	<!-- CUSTOM CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('/resources/css/custom/style.css')}}">

	<style>
	   .animate-typing[data-animate-index="0"]::after {
		   content: '|';
		   animation: animateCursor 200ms infinite alternate cubic-bezier(.68,-0.55,.27,1.55);
	   }
	</style>

	<style>
		@keyframes animateCursor {
			0% { opacity: 0; }
			100% { opacity: 1; }
		}
	</style>
</head>
<body data-spy="scroll" data-target="#navbarSupportedContent" data-offset="100">
	<div>
		<div id="header">
			@include('partials.header')
		</div>
		
		@yield('content')
		
		<div id="footer">
			@include('partials.footer')
		</div>
	</div>
	<!-- /.container -->

	<!-- Jquery 
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
	<!-- JQUERY LIBRARY -->
	<script type="text/javascript" src="{{asset('/resources/js/vendor/jquery.min.js')}}"></script>
	<!-- BOOTSTRAP -->
	<script type="text/javascript" src="{{asset('/resources/js/vendor/bootstrap.min.js')}}"></script>
	<!-- JQUERY VALIDATION -->
	<script type="text/javascript" src="{{asset('/resources/js/vendor/jquery.validate.min.js')}}"></script>
	<!--JQUERY COUNTER -->
	<script type="text/javascript" src="{{asset('/resources/js/vendor/counter/jquery.counterup.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('/resources/js/vendor/counter/counter-lib.js')}}"></script>
	<script type="text/javascript" src="{{asset('/resources/js/vendor/countdown/countdown.js')}}"></script>
	<!-- SLIDER JS FILES -->
	<script type="text/javascript" src="{{asset('/resources/js/vendor/slider/owl-carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('/resources/js/vendor/slider/owl-slider.js')}}"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
	<!-- VIDEO -->
	<script type="text/javascript" src="{{asset('/resources/js/vendor/video/video.js')}}"></script>
	<!-- THEME JS -->
	<script src="{{asset('/resources/js/vendor/lazyload.min.js')}}"></script>
	@if( request()->route()->uri == '/' || request()->route()->uri == 'index' ) 
        <script src="{{asset('/resources/js/vendor/slider/owl.carousel2.min.js')}}"></script>
    @endif		

	<script type="text/javascript" src="{{asset('/resources/js/vendor/jquery.animateTyping.min.js')}}"></script>
	
	<script> 
		var contactformActionRoute = "{!! route('contactusmail.store') !!}"; 
		var registerstudentformActionRoute = "{!! route('registerstudentmail.store') !!}";
	</script>
	<script type="text/javascript" src="{{asset('/resources/js/custom/contact-form.js')}}"></script>
	<script type="text/javascript" src="{{asset('/resources/js/custom/custom.js')}}"></script>
</body>
</html>


<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Car Rental Portal</title>
<!--Bootstrap -->
@if(LaravelLocalization::getCurrentLocale() == 'en' )
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('assets/css/owl.transitions.css')}}" type="text/css">
<link href="{{asset('assets/css/slick.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/bootstrap-slider.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
		<link rel="stylesheet" id="switcher-css" type="text/css" href="{{asset('assets/switcher/css/switcher.css')}}" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('assets/switcher/css/red.css')}}" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('assets/switcher/css/orange.css')}}" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('assets/switcher/css/blue.css')}}" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('assets/switcher/css/pink.css')}}" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('assets/switcher/css/green.css')}}" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('assets/switcher/css/purple.css')}}" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets/images/favicon-icon/apple-touch-icon-144-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets/images/favicon-icon/apple-touch-icon-114-precomposed.html')}}">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/images/favicon-icon/apple-touch-icon-72-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" href="{{asset('assets/images/favicon-icon/apple-touch-icon-57-precomposed.png')}}">
<link rel="shortcut icon" href="{{asset('assets/images/favicon-icon/favicon.png')}}">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
@elseif(LaravelLocalization::getCurrentLocale() == 'ar')
		<link rel="stylesheet" href="{{asset('assets/rtlcss/bootstrap.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('assets/rtlcss/style.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('assets/rtlcss/owl.carousel.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('assets/rtlcss/owl.transitions.css')}}" type="text/css">
<link href="{{asset('assets/rtlcss/slick.css')}}" rel="stylesheet">
<link href="{{asset('assets/rtlcss/bootstrap-slider.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/rtlcss/font-awesome.min.css')}}" rel="stylesheet">
		<link rel="stylesheet" id="switcher-css" type="text/css" href="{{asset('assets/switcher/css/switcher.css')}}" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('assets/switcher/css/red.css')}}" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('assets/switcher/css/orange.css')}}" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('assets/switcher/css/blue.css')}}" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('assets/switcher/css/pink.css')}}" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('assets/switcher/css/green.css')}}" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('assets/switcher/css/purple.css')}}" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets/images/favicon-icon/apple-touch-icon-144-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets/images/favicon-icon/apple-touch-icon-114-precomposed.html')}}">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/images/favicon-icon/apple-touch-icon-72-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" href="{{asset('assets/images/favicon-icon/apple-touch-icon-57-precomposed.png')}}">
<link rel="shortcut icon" href="{{asset('assets/images/favicon-icon/favicon.png')}}">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
@endif
<!-- CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
<style>
@yield('style')    
</style> 
</head>
<body>

<!-- Start Switcher -->
 @include('includes.colorswitcher')
<!-- /Switcher -->  
        
<!--Header-->
 @include('includes.header')
<!-- /Header --> 
<main>
    @yield('content')
</main>

<!--Footer -->
 @include('includes.footer')
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
 @include('includes.login')
<!--/Login-Form --> 

<!--Register-Form -->
 @include('includes.registration')

<!--/Register-Form --> 

<!--Forgot-password-Form -->
 @include('includes.forgotpassword')
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('assets/js/interface.js')}}"></script> 
<!--Switch-->
<script src="{{asset('assets/switcher/js/switcher.js')}}"></script>
<!--bootstrap-slider-JS--> 
<script src="{{asset('assets/js/bootstrap-slider.min.js')}}"></script> 
<!--Slider-JS--> 
<script src="{{asset('assets/js/slick.min.js')}}"></script> 
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<!-- JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
<script>
	$(document).ready(function() {
		toastr.options.timeOut = 10000;
		@if (Session::has('failed'))
			toastr.error('{{ Session::get('failed') }}');
		@elseif(Session::has('success'))
			toastr.success('{{ Session::get('success') }}');
		@endif
	});

</script>
</body>
</html>
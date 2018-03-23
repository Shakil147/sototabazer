
<!DOCTYPE html>
<html lang="en">
<head>
<title> @yield('title') ::Electronic Store a Ecommerce Online Shopping </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="{{ asset('frontend')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('frontend')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('frontend')}}/css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('frontend')}}/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="{{ asset('frontend')}}/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="{{ asset('frontend')}}/js/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('frontend')}}/css/jquery.countdown.css" /> <!-- countdown --> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts -->  
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling --> 
</head> 
<body>
	<!-- for bootstrap working -->
	<script type="text/javascript" src="{{ asset('frontend')}}/js/bootstrap-3.1.1.min.js"></script>
	<!-- //for bootstrap working -->
	<!-- header modal -->
	<!-- @include('frontend.includs.HeaderModal') -->

	<script>
		$('#myModal88').modal('show');
	</script>  
	<!-- header modal -->
	<!-- header -->
	@include('frontend.includs.header')
			
	<!-- //header -->
	<!-- navigation -->
	@include('frontend.includs.navigation')
	<!-- //navigation -->
	<!-- banner -->
		@yield('banner')
	<!-- //banner --> 
		<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			@yield('breadcrumbs')
		</div>
	</div>
	<!-- //breadcrumbs -->

	@yield('content') 

	<!-- newsletter -->
	@include('frontend.includs.newsletter')
	<!-- //newsletter -->
	<!-- footer -->
	@include('frontend.includs.footer')
	<!-- //footer --> 
	<!-- cart-js -->

	<!-- //cart-js -->   

	@yield('plugjs')
</body>
</html>
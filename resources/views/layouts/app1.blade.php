
<!DOCTYPE html>
<head>
<title>@yield('title') :: Sotatabazar</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{ asset('backend') }}/css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{ asset('backend') }}/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="{{ asset('backend') }}/stylesheet" href="css/font.css" type="text/css"/>
<link href="{{ asset('backend') }}/css/font-awesome.css" rel="stylesheet"> 
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- //font-awesome icons -->
</head>
<body class="signup-body">
        <div class="agile-signup">  
            
            @yield('content')
            
        </div>
    <script src="{{ asset('backend') }}/js/proton.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<head>
<title>Colored  an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
<link rel="stylesheet" href="{{ asset('backend') }}/css/font.css" type="text/css"/>
<link href="{{ asset('backend') }}/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="{{ asset('backend') }}/js/jquery2.0.3.min.js"></script>
<script src="{{ asset('backend') }}/js/modernizr.js"></script>
<script src="{{ asset('backend') }}/js/jquery.cookie.js"></script>
<script src="{{ asset('backend') }}/js/screenfull.js"></script>
        <script>
        $(function () {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

            if (!screenfull.enabled) {
                return false;
            }

            

            $('#toggle').click(function () {
                screenfull.toggle($('#container')[0]);
            }); 
        });
        </script>
<!-- charts -->
<script src="{{ asset('backend') }}/js/raphael-min.js"></script>
<script src="{{ asset('backend') }}/js/morris.js"></script>
<link rel="stylesheet" href="{{ asset('backend') }}/css/morris.css">
<!-- //charts -->
<!--skycons-icons-->
<script src="{{ asset('backend') }}/js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body class="dashboard-page">
    <script>
            var theme = $.cookie('protonTheme') || 'default';
            $('body').removeClass (function (index, css) {
                return (css.match (/\btheme-\S+/g) || []).join(' ');
            });
            if (theme !== 'default') $('body').addClass(theme);
        </script>
    @include('admin.includs.sidebar')
    <section class="wrapper scrollable">
        <nav class="user-menu">
            <a href="{{ asset('backend') }}/javascript:;" class="main-menu-access">
            <i class="icon-proton-logo"></i>
            <i class="icon-reorder"></i>
            </a>
        </nav>
        <section class="title-bar">
            @include('admin.includs.heder')
        </section>
        <div class="main-grid">
        @if($message = Session::get('message'))    
            <div class="grid_3 grid_5 wow fadeInUp animated" data-wow-delay=".5s">
                <div class="alert alert-success" role="alert" style="text-align: center;">
                    <strong><h4> {{ $message }} </h4> </strong>
                </div>
            </div>
            @endif
            
            @yield('minContent')
        </div>
        <!-- footer -->
        <div class="footer">
            <p>© 2016 Colored . All Rights Reserved . Design by <a href="{{ asset('backend') }}/http://w3layouts.com/">W3layouts</a></p>
        </div>
        <!-- //footer -->
    </section>
    <script src="{{ asset('backend') }}/js/bootstrap.js"></script>
    <script src="{{ asset('backend') }}/js/proton.js"></script>
    @yield('plugjs')
</body>
</html>

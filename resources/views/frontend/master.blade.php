<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Basic page needs
    ============================================ -->
    <title> @yield('title') :: Sototabazar</title>
    <meta charset="utf-8">
    <meta name="keywords" content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
    <meta name="description" content="eMarket is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
   
    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('emarket')}}/ico/favicon-16x16.png"/>
  
   
    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('emarket')}}/css/bootstrap/css/bootstrap.min.css">
    <link href="{{ asset('emarket')}}/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('emarket')}}/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="{{ asset('emarket')}}/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('emarket')}}/css/themecss/lib.css" rel="stylesheet">
    <link href="{{ asset('emarket')}}/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="{{ asset('emarket')}}/js/minicolors/miniColors.css" rel="stylesheet">
    
    <!-- Theme CSS
    ============================================ -->
    <link href="{{ asset('emarket')}}/css/themecss/so_searchpro.css" rel="stylesheet">
    <link href="{{ asset('emarket')}}/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="{{ asset('emarket')}}/css/themecss/so-categories.css" rel="stylesheet">
    <link href="{{ asset('emarket')}}/css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="{{ asset('emarket')}}/css/themecss/so-newletter-popup.css" rel="stylesheet">

    <link href="{{ asset('emarket')}}/css/footer/footer1.css" rel="stylesheet">
    <link href="{{ asset('emarket')}}/css/header/header1.css" rel="stylesheet">
    <link id="color_scheme" href="{{ asset('emarket')}}/css/theme.css" rel="stylesheet"> 
    <link href="{{ asset('emarket')}}/css/responsive.css" rel="stylesheet">

     <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700' rel='stylesheet' type='text/css'>
    <style type="text/css">
         body{font-family:'Roboto', sans-serif}
    </style>

</head>

@yield('body')

    <!-- Header Container  -->
    <header id="header" class=" typeheader-1">
        <!-- Header Top -->
        @include('frontend.includs.haderTop')
        <!-- //Header Top -->

        <!-- Header center -->
        @include('frontend.includs.header')
        <!-- //Header center -->

        <!-- Header Bottom -->
        @include('frontend.includs.haderBottom')
        <!-- //Header Bottom -->
    </header>
    <!-- //Header Container  -->
    
   
<!-- Main Container  -->


   @yield('mainContainer')

<!-- //Main Container -->   

    <!-- Footer Container -->
    <footer class="footer-container typefooter-1">
        <!-- Footer Top Container -->
        @include('frontend.includs.newslatter')
        <!-- /Footer Top Container -->
        
        @include('frontend.includs.footer')

        <!-- Footer Bottom Container -->
        <div class="footer-bottom ">
            <div class="container">
                <div class="copyright">
                    eMarket © 2018 Demo Store. All Rights Reserved. Designed by 
                    <a href="{{ asset('emarket')}}/http://www.opencartworks.com/" target="_blank">OpenCartWorks.Com</a> Devolope by <a href="http://arshakil.ml" target="_blank">AR SHAKIL</a>
                </div>
            </div>
        </div>
        <!-- /Footer Bottom Container -->
        
        <!--Back To Top-->
        <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
            <!--Back To Top-->
        <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
    </footer>
    <!-- //end Footer Container -->

    </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>    
 @yield('plgin')
   

<!-- End Color Scheme
============================================ -->



<!-- Include Libs & Plugins
============================================ -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="{{ asset('emarket')}}/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="{{ asset('emarket')}}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('emarket')}}/js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="{{ asset('emarket')}}/js/themejs/libs.js"></script>
<script type="text/javascript" src="{{ asset('emarket')}}/js/unveil/jquery.unveil.js"></script>
<script type="text/javascript" src="{{ asset('emarket')}}/js/countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="{{ asset('emarket')}}/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
<script type="text/javascript" src="{{ asset('emarket')}}/js/datetimepicker/moment.js"></script>
<script type="text/javascript" src="{{ asset('emarket')}}/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="{{ asset('emarket')}}/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{ asset('emarket')}}/js/modernizr/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="{{ asset('emarket')}}/js/minicolors/jquery.miniColors.min.js"></script>


<!-- Theme files
============================================ -->

<script type="text/javascript" src="{{ asset('emarket')}}/js/themejs/application.js"></script>

<script type="text/javascript" src="{{ asset('emarket')}}/js/themejs/homepage.js"></script>

<script type="text/javascript" src="{{ asset('emarket')}}/js/themejs/toppanel.js"></script>
<script type="text/javascript" src="{{ asset('emarket')}}/js/themejs/so_megamenu.js"></script>
<script type="text/javascript" src="{{ asset('emarket')}}/js/themejs/addtocart.js"></script>
</body>
</html>
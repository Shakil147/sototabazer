<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title')</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="" />
<meta name="keywords" content="admin, admin dashboard, admin template" />
<meta name="author" content="SRGIT"/>
<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('backend') }}/plugins/assets/img/favicon/favicon.png">
<link rel="icon" href="{{ asset('backend') }}/plugins/assets/img/favicon/favicon.png" type="image/x-icon">
<!-- Custom CSS -->
<!-- Data table CSS -->
<link href="{{ asset('backend') }}/plugins/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
<link href="{{ asset('backend') }}/plugins/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
<!--alerts CSS -->
<link href="{{ asset('backend') }}/plugins/vendors/bower_components/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">

@yield('plgCss')
<!-- Custom CSS -->
<link href="{{ asset('backend') }}/plugins/assets/css/default.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Preloader -->
<div class="preloader-it">
  <div class="preloader">
    <div class="circles-1">
      <div class="circles-1-center"></div>
      <div class="circles-1"></div>
      <div class="circles-1"></div>
      <div class="circles-1"></div>
      <div class="circles-1"></div>
      <div class="circles-1"></div>
      <div class="circles-1"></div>
    </div>
  </div>
</div>
<!-- //Preloader --> 

<!-- Begin page -->
<div class="wrapper light-theme"> 
  <!-- Top Header -->
  @include('admin.includs.topHeader')
  <!-- /Top Menu Items --> 
  <!-- Left Sidebar Menu -->
  @include('admin.includs.leftSidebar')
  <!-- /Left Sidebar Menu --> 
  <!-- Right Sidebar Menu -->
  @include('admin.includs.rightSidebar')
  <!-- /Right Sidebar Menu --> 
 
  <!-- Main Content -->
 <div class="page-wrapper">
    @yield('minContent')
    <div class="clearfix"></div>
    <!-- Row--> 
    <!-- Footer -->
    <footer class="footer container-fluid pt-10 pb-10  pl-30 pr-30">
      <div class="row">
        <div class="col-sm-12 ">
          <div class="pull-left text-dark pt-5 small">Copyright @ 2018  Hyrax UX  Panel. All Rights Reserved</div>
          <div class="pull-right">Created with by <img src="{{ asset('backend') }}/plugins/assets/img/heartbeat.svg" alt="srgit" class="heart"> <a href="http://www.srgit.com/" target="_blank">SRGIT</a></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </footer>
    <!-- /Footer --> 
  </div>
  <!-- /Main Content --> 
</div>
<!-- /Main Content --> 
<!-- /#wrapper --> 
<!-- AJAX -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- jQuery --> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/jquery/dist/jquery.min.js"></script> 
<!-- Bootstrap Core JavaScript --> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> 
<!-- Data table JavaScript --> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script> 
<!-- Slimscroll JavaScript --> 
<script src="{{ asset('backend') }}/plugins/assets/js/jquery.slimscroll.js"></script> 
<!-- Owl JavaScript --> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script> 
<!-- Progressbar Animation JavaScript --> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script> 
<!-- Fancy Dropdown JS --> 
<script src="{{ asset('backend') }}/plugins/assets/js/dropdown-bootstrap-extended.js"></script> 
<!-- FlotChart JavaScript --> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/flot/jquery.flot.js"></script> 
<script src="{{ asset('backend') }}/plugins/assets/js/flot-data-dashboard.js"></script> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/skycons/skycons.js"></script> 
<!-- Sparkline JavaScript --> 
<script src="{{ asset('backend') }}/plugins/vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script> 
<!-- Switchery JavaScript --> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/switchery/dist/switchery.min.js"></script> 
<!-- EChartJS JavaScript --> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/echarts/dist/echarts-en.min.js"></script> 
<!-- Toast JavaScript --> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script> 
<!-- Init JavaScript --> 
<script src="{{ asset('backend') }}/plugins/assets/js/init.js"></script> 
<!-- Sweet-Alert  --> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script> 
<script src="{{ asset('backend') }}/plugins/assets/js/sweetalert-data.js"></script> 
<!-- JavaScript -->
@yield('plugjs')
@if($message = Session::get('message'))   
<script type="text/JavaScript">
  $(window).load(function(){
  window.setTimeout(function(){
    $.toast({
      heading: 'MESSAGE',
      text: '{{ $message }}.',
      position: 'bottom-right',
      loaderBg:'#2bb9c3',
      icon: 'success',
      hideAfter: 3500, 
      stack: 6
    });
  }, 3000);
});
</script>
<!-- !JavaScript -->
@endif

</body>
</html>

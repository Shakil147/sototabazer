<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SHOTOTABAZER</title>
<meta name="description" content="" />
<meta name="keywords" content="admin, admin dashboard, admin template" />
<meta name="author" content="SRGIT"/>
<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('backend') }}/plugins/assets/img/favicon/favicon.png">
<link rel="icon" href="{{ asset('backend') }}/plugins/assets/img/favicon/favicon.png" type="image/x-icon">
<!-- Custom CSS -->
<link href="{{ asset('backend') }}/plugins/assets/css/default.css" rel="stylesheet" type="text/css">
</head>
<body class="login-sidebar-background">
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
<section id="wrapper" class="login-register login-sidebar">
  @yield('content')
</section>
<!-- /Main Content --> 
<!-- /#wrapper --> 
<!-- JavaScript --> 
<!-- jQuery --> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/jquery/dist/jquery.min.js"></script> 
<!-- Bootstrap Core JavaScript --> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> 
<!-- Slimscroll JavaScript --> 
<script src="{{ asset('backend') }}/plugins/assets/js/jquery.slimscroll.js"></script> 
<!-- Fancy Dropdown JS --> 
<script src="{{ asset('backend') }}/plugins/assets/js/dropdown-bootstrap-extended.js"></script> 
<!-- Switchery JavaScript --> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/switchery/dist/switchery.min.js"></script> 
<!-- Init JavaScript --> 
<script src="{{ asset('backend') }}/plugins/assets/js/init.js"></script>
</body>
</html>

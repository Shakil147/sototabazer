<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from creativethemes.co.in/demo/studioux/admin-dashborad-template/form-elements-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 May 2018 23:12:51 GMT -->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hyrax Admin dashboard Template</title>
<meta name="description" content="" />
<meta name="keywords" content="admin, admin dashboard, admin template" />
<meta name="author" content="SRGIT"/>
<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('back')}}/plugins/assets/img/favicon/favicon.png">
<link rel="icon" href="{{ asset('back')}}/plugins/assets/img/favicon/favicon.png" type="image/x-icon">
<!-- Custom CSS -->
<!-- Data table CSS -->
<link href="{{ asset('back')}}/plugins/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
<link href="{{ asset('back')}}/plugins/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
<!-- Custom CSS -->
<link href="{{ asset('back')}}/plugins/assets/css/default.css" rel="stylesheet" type="text/css">
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
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="mobile-only-brand pull-left">
      <div class="nav-header pull-left">
        <div class="logo-wrap"> <a href="index.html"> <img class="brand-img" src="{{ asset('back')}}/plugins/assets/img/logo.png" alt="brand"/> <span class="brand-text">[ Hyrax<strong>UX</strong> ]</span> </a> </div>
      </div>
      <a id="toggle-btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="mdi mdi-format-list-bulleted"></i></a> <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="mdi mdi-search"></i></a> <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="mdi mdi-more"></i></a>
      <form id="search_form" role="search" class="top-nav-search collapse pull-left">
        <div class="input-group">
          <input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
          <span class="input-group-btn">
          <button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="pe-7s-search"></i></button>
          </span> </div>
      </form>
    </div>
    <div id="mobile_right_sidebar" class="mobile-right-sidebar pull-right">
      <ul class="nav navbar-right top-nav pull-right">
        <li> <a id="open_right_sidebar" href="#"><i class="pe-7s-chat top-nav-icon"></i></a> </li>
        <li class="dropdown app-drp"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="pe-7s-edit top-nav-icon"></i></a>
          <ul class="dropdown-menu app-dropdown"  data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
            <li>
              <div class="app-nicescroll-bar">
                <ul class="app-icon-wrap pa-10">
                  <li> <a href="weather.html" class="connection-item"> <i class="pe-7s-sun txt-info"></i> <span class="block">weather</span> </a> </li>
                  <li> <a href="vector-map.html" class="connection-item"> <i class="pe-7s-way txt-danger"></i> <span class="block">map</span> </a> </li>
                  <li> <a href="chats.html" class="connection-item"> <i class="pe-7s-chat txt-warning"></i> <span class="block">chat</span> </a> </li>
                  <li> <a href="calendar.html" class="connection-item"> <i class="pe-7s-date txt-primary"></i> <span class="block">calendar</span> </a> </li>
                  <li> <a href="email-inbox.html" class="connection-item"> <i class="pe-7s-mail-open-file txt-success"></i> <span class="block">e-mail</span> </a> </li>
                  <li> <a href="contact-card.html" class="connection-item"> <i class="pe-7s-config"></i> <span class="block">configure</span> </a> </li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li class="dropdown alert-drp"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="pe-7s-alarm top-nav-icon"></i><span class="top-nav-icon-badge btn-sonar">1</span></a>
          <ul class="dropdown-menu alert-dropdown" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
            <li>
              <div class="notification-box-head-wrap"> <span class="notification-box-head pull-left inline-block">notifications</span> <a class="txt-danger pull-right clear-notifications inline-block" href="javascript:void(0)"> clear all </a>
                <div class="clearfix"></div>
                <hr class="light-grey-hr ma-0"/>
              </div>
            </li>
            <li>
              <div class="streamline message-nicescroll-bar">
                <div class="sl-item"> <a href="javascript:void(0)">
                  <div class="icon bg-green"> <i class="mdi mdi-alarm-check"></i> </div>
                  <div class="sl-content"> <span class="inline-block capitalize-font  pull-left truncate head-notifications"> Neque porro quisquam est</span> <span class="inline-block font-11  pull-right notifications-time">5pm</span>
                    <div class="clearfix"></div>
                    <p class="truncate">Neque porro quisquam est.</p>
                  </div>
                  </a> </div>
                <hr class="light-grey-hr ma-0"/>
                <div class="sl-item"> <a href="javascript:void(0)">
                  <div class="icon bg-yellow"> <i class="mdi mdi-video-input-antenna"></i> </div>
                  <div class="sl-content"> <span class="inline-block capitalize-font  pull-left truncate head-notifications txt-warning">Neque porro quisquam est</span> <span class="inline-block font-11 pull-right notifications-time">12pm</span>
                    <div class="clearfix"></div>
                    <p class="truncate">Neque porro quisquam est.</p>
                  </div>
                  </a> </div>
                <hr class="light-grey-hr ma-0"/>
                <div class="sl-item"> <a href="javascript:void(0)">
                  <div class="icon bg-blue"> <i class="mdi mdi-comment-text"></i> </div>
                  <div class="sl-content"> <span class="inline-block capitalize-font  pull-left truncate head-notifications">61 new messages</span> <span class="inline-block font-11  pull-right notifications-time">6am</span>
                    <div class="clearfix"></div>
                    <p class="truncate"> Neque porro quisquam est.</p>
                  </div>
                  </a> </div>
                <hr class="light-grey-hr ma-0"/>
                <div class="sl-item"> <a href="javascript:void(0)">
                  <div class="sl-avatar"> <img class="img-responsive" src="{{ asset('back')}}/plugins/assets/img/users/avatar-1.jpg" alt="avatar"/> </div>
                  <div class="sl-content"> <span class="inline-block capitalize-font  pull-left truncate head-notifications">Vivian Rox</span> <span class="inline-block font-11  pull-right notifications-time">3pm</span>
                    <div class="clearfix"></div>
                    <p class="truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit</p>
                  </div>
                  </a> </div>
                <hr class="light-grey-hr ma-0"/>
                <div class="sl-item"> <a href="javascript:void(0)">
                  <div class="icon bg-red"> <i class="mdi mdi-storage"></i> </div>
                  <div class="sl-content"> <span class="inline-block capitalize-font  pull-left truncate head-notifications txt-danger">99% server space occupied.</span> <span class="inline-block font-11  pull-right notifications-time">1pm</span>
                    <div class="clearfix"></div>
                    <p class="truncate">consectetur, adipisci velit.</p>
                  </div>
                  </a> </div>
              </div>
            </li>
            <li>
              <div class="notification-box-bottom-wrap">
                <hr class="light-grey-hr ma-0"/>
                <a class="block text-center read-all" href="javascript:void(0)"> read all </a>
                <div class="clearfix"></div>
              </div>
            </li>
          </ul>
        </li>
        <li class="dropdown auth-drp"> <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="{{ asset('back')}}/plugins/assets/img/users/avatar-2.jpg" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
          <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
            <li> <a href="profile.html"><i class="mdi mdi-account"></i><span>Profile</span></a> </li>
            <li> <a href="#"><i class="mdi mdi-credit-card"></i><span>my balance</span></a> </li>
            <li> <a href="email-inbox.html"><i class="mdi mdi-email"></i><span>Inbox</span></a> </li>
            <li> <a href="#"><i class="mdi mdi-settings"></i><span>Settings</span></a> </li>
            <li class="divider"></li>
            <li class="sub-menu show-on-hover"> <a href="#" class="dropdown-toggle pr-0 level-2-drp"><i class="mdi mdi-check text-success"></i> available</a>
              <ul class="dropdown-menu open-left-side">
                <li> <a href="#"><i class="mdi mdi-check text-success"></i><span>available</span></a> </li>
                <li> <a href="#"><i class="mdi mdi-circle-o text-warning"></i><span>busy</span></a> </li>
                <li> <a href="#"><i class="mdi mdi-minus-circle-outline text-danger"></i><span>offline</span></a> </li>
              </ul>
            </li>
            <li class="divider"></li>
            <li> <a href="#"><i class="mdi mdi-power"></i><span>Log Out</span></a> </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /Top Menu Items --> 
  <!-- Left Sidebar Menu -->
  <div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
      <li class="navigation-header"> <span>Main</span> <i class="mdi mdi-more"></i> </li>
      <li> <a href="javascript:void(0);" data-toggle="collapse" data-target="#admin-dash">
        <div class="pull-left"><i class="mdi mdi-apps mr-20"></i><span class="right-nav-text">Dashboard</span></div>
        <div class="pull-right"><i class="mdi mdi-chevron-down"></i></div>
        <div class="clearfix"></div>
        </a>
        <ul id="admin-dash" class="collapse collapse-level-1">
          <li><a href="index.html">Dashboard V1</a></li>
          <li><a href="index-dark.html">Dashboard V2</a></li>
          <li><a href="index-stock-data.html">Dashboard V3</a></li>
          <li><a href="index-boxed.html">Dashboard Boxed</a></li>
        </ul>
      </li>
      <li> <a href="javascript:void(0);" data-toggle="collapse" data-target="#admin-uir">
        <div class="pull-left"><i class="mdi mdi-apps mr-20"></i><span class="right-nav-text">Admin UI</span></div>
        <div class="pull-right"><span class="label label-primary">new</span></div>
        <div class="clearfix"></div>
        </a>
        <ul id="admin-uir" class="collapse collapse-level-1">
          <li><a href="admin-grid.html">Grid system</a></li>
          <li><a href="admin-sweet-alert.html">Sweet Alert</a></li>
          <li><a href="admin-rangeslider.html">Range Slider</a></li>
          <li><a href="admin-lightbox.html">Lightbox</a></li>
          <li><a href="admin-scrollbar.html">Scroll bar</a></li>
          <li><a href="admin-slider.html">Slider</a></li>
        </ul>
      </li>
      <li>
        <hr class="light-grey-hr mb-10"/>
      </li>
      <li class="navigation-header"> <span>component</span> <i class="mdi mdi-more"></i> </li>
      <li> <a href="javascript:void(0);" data-toggle="collapse" data-target="#ui_element">
        <div class="pull-left"><i class="mdi mdi-puzzle mr-20"></i><span class="right-nav-text">UI elements</span></div>
        <div class="pull-right"><i class="mdi mdi-chevron-down"></i></div>
        <div class="clearfix"></div>
        </a>
        <ul id="ui_element" class="collapse collapse-level-1">
          <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
          <li><a href="ui-typography.html">Typography</a></li>
          <li><a href="ui-panels.html">Panels</a></li>
          <li><a href="ui-buttons.html">Buttons</a></li>
          <li><a href="ui-modals.html">Modals</a></li>
          <li><a href="ui-checkbox-radio.html">Checkboxes-Radios</a></li>
          <li><a href="ui-spinners.html">Spinners</a></li>
          <li><a href="ui-accordions.html">Accordions/Toggles</a></li>
          <li><a href="ui-progressbars.html">Progress Bars</a></li>
          <li><a href="ui-notifications.html">Notification</a></li>
          <li><a href="ui-carousel.html">Carousel</a></li>
          <li><a href="ui-tooltips-popovers.html">Tooltips & Popovers</a></li>
          <li><a href="ui-calendar.html">Calendar</a></li>
        </ul>
      </li>
      <li> <a href="javascript:void(0);" data-toggle="collapse" data-target="#icon_list">
        <div class="pull-left"><i class="mdi mdi-cube-outline mr-20"></i><span class="right-nav-text">Icons</span></div>
        <div class="pull-right"><i class="mdi mdi-chevron-down"></i></div>
        <div class="clearfix"></div>
        </a>
        <ul id="icon_list" class="collapse collapse-level-1">
          <li><a href="icons-colored.html">Colored Icons</a></li>
          <li><a href="icons-materialdesign.html">Material Design</a></li>
          <li><a href="icons-dripicons.html">Dripicons</a></li>
          <li><a href="icons-fontawesome.html">Font awesome</a></li>
          <li><a href="icons-flags.html">Flag Icons</a></li>
          <li><a href="icons-file.html" >File Icons</a></li>
          <li><a href="icons-folders.html">Folder Icons</a></li>
          <li><a href="icons-pe7.html">PE7 Icons</a></li>
          <li><a href="icons-typicons.html">Typicons</a></li>
        </ul>
      </li>
      <li> <a href="javascript:void(0);" data-toggle="collapse" data-target="#form_main">
        <div class="pull-left"><i class="mdi mdi-format-align-left mr-20"></i><span class="right-nav-text">Forms</span></div>
        <div class="pull-right"><i class="mdi mdi-chevron-down"></i></div>
        <div class="clearfix"></div>
        </a>
        <ul id="form_main" class="collapse collapse-level-1 in">
          <li> <a href="javascript:void(0);" data-toggle="collapse" data-target="#form_elements">Form elements
            <div class="pull-right"><i class="mdi mdi-chevron-down"></i></div>
            <div class="clearfix"></div>
            </a>
            <ul id="form_elements" class="collapse collapse-level-2">
              <li> <a href="form-element.html">Basic Forms</a> </li>
              <li> <a href="form-elements-add-on.html">Add on</a> </li>
              <li> <a href="form-elements-advance.html">Forms Advanced</a> </li>
              <li> <a class="active" href="form-elements-validation.html">Forms Validation</a> </li>
            </ul>
          </li>
          <li> <a href="form-pickers.html">Form pickers</a> </li>
          <li> <a href="form-masking.html">Form Masking</a> </li>
          <li> <a href="form-wizards.html">Form Wizards</a> </li>
          <li> <a href="form-x-editable.html">X-Editable</a> </li>
          <li> <a href="file-upload.html">File upload</a> </li>
          <li> <a href="file-summernote.html">Form Summernote</a> </li>
        </ul>
      </li>
      <li> <a href="javascript:void(0);" data-toggle="collapse" data-target="#chart_list">
        <div class="pull-left"><i class="mdi mdi-chart-donut-variant mr-20"></i><span class="right-nav-text">Charts </span></div>
        <div class="pull-right"><i class="mdi mdi-chevron-down"></i></div>
        <div class="clearfix"></div>
        </a>
        <ul id="chart_list" class="collapse collapse-level-1 two-col-list">
          <li> <a href="flot-chart.html">Flot Chart</a> </li>
          <li> <a href="echart.html">Echart Chart</a> </li>
          <li> <a href="morris-chart.html">Morris Chart</a> </li>
          <li> <a href="chart.js.html">chartjs</a> </li>
          <li> <a href="sparkline.html">Sparkline</a> </li>
          <li> <a href="peity-chart.html">Peity Chart</a> </li>
        </ul>
      </li>
      <li> <a href="javascript:void(0);" data-toggle="collapse" data-target="#table_list">
        <div class="pull-left"><i class="mdi mdi-view-dashboard mr-20"></i><span class="right-nav-text">Tables</span></div>
        <div class="pull-right"><i class="mdi mdi-chevron-down"></i></div>
        <div class="clearfix"></div>
        </a>
        <ul id="table_list" class="collapse collapse-level-1 two-col-list">
          <li> <a href="basic-table.html">Basic Table</a> </li>
          <li> <a href="javascript:void(0);" data-toggle="collapse" data-target="#data_tables">Data Table
            <div class="pull-right"><i class="mdi mdi-chevron-down"></i></div>
            <div class="clearfix"></div>
            </a>
            <ul id="data_tables" class="collapse collapse-level-2">
              <li> <a href="dt-basic.html">Basic Initialization</a> </li>
              <li> <a href="dt-advance.html">Advance Initialization</a> </li>
              <li> <a href="dt-styling.html">Table Styling</a> </li>
            </ul>
          </li>
          <li> <a href="editable-table.html">Editable Table</a> </li>
          <li> <a href="foo-table.html">Foo Table</a> </li>
          <li> <a href="jsgrid-table.html">Jsgrid Table</a> </li>
        </ul>
      </li>
      <li> <a href="javascript:void(0);" data-toggle="collapse" data-target="#maps_list">
        <div class="pull-left"><i class="mdi mdi-compass mr-20"></i><span class="right-nav-text">maps</span></div>
        <div class="pull-right"><i class="mdi mdi-chevron-down"></i></div>
        <div class="clearfix"></div>
        </a>
        <ul id="maps_list" class="collapse collapse-level-1">
          <li> <a href="vector-map.html">Vector Map</a> </li>
          <li> <a href="google-map.html">Google Map</a> </li>
        </ul>
      </li>
      <!-- ecommerce -->
      <li>
        <hr class="light-grey-hr mb-10"/>
      </li>
      <li class="navigation-header"> <span>Ecommerce</span> <i class="mdi mdi-more"></i> </li>
      <li> <a  href="javascript:void(0);" data-toggle="collapse" data-target="#pages_ecommerce">
        <div class="pull-left"><i class="mdi mdi-cart mr-20"></i><span class="right-nav-text">Ecommerce Pages</span></div>
        <div class="pull-right"><i class="mdi mdi-chevron-down"></i></div>
        <div class="clearfix"></div>
        </a>
        <ul id="pages_ecommerce" class="collapse collapse-level-2">
          <li> <a href="ecommerce-dashboard.html">Shop dashboard</a> </li>
          <li> <a href="ecommerce-products-details.html">Products List</a> </li>
          <li> <a href="ecommerce-add-product.html">Add Product</a> </li>
          <li> <a  href="ecommerce-order-details.html">Order Details</a> </li>
        </ul>
      </li>
      <li> <a  href="javascript:void(0);" data-toggle="collapse" data-target="#invoice_list">
        <div class="pull-left"><i class="mdi mdi-file-document mr-20"></i><span class="right-nav-text">Invoice Pages</span></div>
        <div class="pull-right"><i class="mdi mdi-chevron-down"></i></div>
        <div class="clearfix"></div>
        </a>
        <ul id="invoice_list" class="collapse collapse-level-2">
          <li> <a href="invoice.html">Invoice</a> </li>
          <li> <a href="invoice-list.html">Invoice List</a> </li>
          <li> <a href="invoice-archive.html">Invoice Archive</a> </li>
        </ul>
      </li>
      <li>
        <hr class="light-grey-hr mb-10"/>
      </li>
      <!-- ecommerce -->
      <li class="navigation-header"> <span>featured</span> <i class="mdi mdi-more"></i> </li>
      <li> <a href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr">
        <div class="pull-left"><i class="mdi mdi-star-circle mr-20"></i><span class="right-nav-text">Sample Pages</span></div>
        <div class="pull-right"><i class="mdi mdi-chevron-down"></i></div>
        <div class="clearfix"></div>
        </a>
        <ul id="pages_dr" class="collapse collapse-level-1 two-col-list">
          <li> <a href="blank.html">Blank Page</a> </li>
          <li> <a href="javascript:void(0);" data-toggle="collapse" data-target="#authentication_list">Authentication pages
            <div class="pull-right"><i class="mdi mdi-chevron-down"></i></div>
            <div class="clearfix"></div>
            </a>
            <ul id="authentication_list" class="collapse collapse-level-2">
              <li> <a href="login.html" target="_blank">Login</a> </li>
              <li> <a href="signup.html" target="_blank">Register</a> </li>
              <li> <a href="forgot-password.html" target="_blank">Recover Password</a> </li>
              <li> <a href="locked.html" target="_blank">Lock Screen</a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);" data-toggle="collapse" data-target="#mailbox">Mailbox
            <div class="pull-right"><i class="mdi mdi-chevron-down"></i></div>
            <div class="clearfix"></div>
            </a>
            <ul id="mailbox" class="collapse collapse-level-2">
              <li> <a href="email-inbox.html">Email Inbox</a> </li>
              <li> <a href="email-detail.html">Email Detail</a> </li>
              <li> <a href="email-compose.html">Email Compose</a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);" data-toggle="collapse" data-target="#error_pages">error pages
            <div class="pull-right"><i class="mdi mdi-chevron-down"></i></div>
            <div class="clearfix"></div>
            </a>
            <ul id="error_pages" class="collapse collapse-level-2">
              <li> <a href="404.html">Error 404</a> </li>
              <li> <a href="500.html">Error 500</a> </li>
            </ul>
          </li>
          <li> <a href="gallery.html">Gallery</a> </li>
          <li> <a href="profile.html">Profile</a> </li>
          <li> <a href="faq.html">FAQ</a> </li>
        </ul>
      </li>
      <li> <a href="documentation/index.html">
        <div class="pull-left"><i class="mdi mdi-book mr-20"></i><span class="right-nav-text">documentation</span></div>
        <div class="clearfix"></div>
        </a> </li>
      <li> <a href="javascript:void(0);" data-toggle="collapse" data-target="#dropdown_lvl1">
        <div class="pull-left"><i class="mdi mdi-chart-timeline mr-20"></i><span class="right-nav-text">multilevel</span></div>
        <div class="pull-right"><i class="mdi mdi-chevron-down"></i></div>
        <div class="clearfix"></div>
        </a>
        <ul id="dropdown_lvl1" class="collapse collapse-level-1">
          <li> <a href="#">Item level 1</a> </li>
          <li> <a href="javascript:void(0);" data-toggle="collapse" data-target="#dropdown_lvl2">Dropdown level 2
            <div class="pull-right"><i class="mdi mdi-chevron-down"></i></div>
            <div class="clearfix"></div>
            </a>
            <ul id="dropdown_lvl2" class="collapse collapse-level-2">
              <li> <a href="#">Item level 2</a> </li>
              <li> <a href="#">Item level 2</a> </li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </div>
  <!-- /Left Sidebar Menu --> 
  <!-- Right Sidebar Menu -->
  <div class="fixed-sidebar-right">
    <ul class="right-sidebar">
      <li>
        <div  class="tab-struct user-tabs">
          <ul role="tablist" class="nav nav-tabs" id="right_sidebar_tab">
            <li class="active" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="chat_tab_btn" href="#chat_tab"><i class="pe-7s-chat"></i></a></li>
            <li role="presentation" class=""><a  data-toggle="tab" id="messages_tab_btn" role="tab" href="#messages_tab" aria-expanded="false"><i class="pe-7s-mail"></i></a></li>
            <li role="presentation" class=""><a  data-toggle="tab" id="settings_tab_btn" role="tab" href="#settings_tab" aria-expanded="false"><i class="pe-7s-keypad"></i></a></li>
          </ul>
          <div class="tab-content" id="right_sidebar_content">
            <div  id="chat_tab" class="tab-pane fade active in" role="tabpanel">
              <div class="chat-cmplt-wrap">
                <div class="chat-box-wrap">
                  <div class="add-friend"> <span class="inline-block txt-dark">Recent Chats</span> <a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="mdi mdi-plus"></i></a> <a href="javascript:void(0)" class="inline-block txt-grey"> <i class="mdi mdi-more"></i> </a>
                    <div class="clearfix"></div>
                  </div>
                  <div id="chat_list_scroll">
                    <div class="nicescroll-bar">
                      <ul class="chat-list-wrap">
                        <li class="chat-list">
                          <div class="chat-body"> <a href="javascript:void(0)">
                            <div class="chat-data"> <img class="user-img img-circle"  src="{{ asset('back')}}/plugins/assets/img/users/avatar-2.jpg" alt="user"/>
                              <div class="user-data"> <span class="name block capitalize-font">Peter Wyatt</span> <span class="time block truncate txt-grey">Neque porro quisquam est.</span> </div>
                              <div class="status away"></div>
                              <div class="clearfix"></div>
                            </div>
                            </a> <a href="javascript:void(0)">
                            <div class="chat-data"> <img class="user-img img-circle"  src="{{ asset('back')}}/plugins/assets/img/users/avatar-1.jpg" alt="user"/>
                              <div class="user-data"> <span class="name block capitalize-font">Vivian Rox</span> <span class="time block truncate txt-grey">Neque porro quisquam est.</span> </div>
                              <div class="status offline"></div>
                              <div class="clearfix"></div>
                            </div>
                            </a> <a href="javascript:void(0)">
                            <div class="chat-data"> <img class="user-img img-circle"  src="{{ asset('back')}}/plugins/assets/img/users/avatar-3.jpg" alt="user"/>
                              <div class="user-data"> <span class="name block capitalize-font">Mr. Danielle</span> <span class="time block truncate txt-grey">Neque porro quisquam est.</span> </div>
                              <div class="status online"></div>
                              <div class="clearfix"></div>
                            </div>
                            </a> <a href="javascript:void(0)">
                            <div class="chat-data"> <img class="user-img img-circle"  src="{{ asset('back')}}/plugins/assets/img/users/avatar-4.jpg" alt="user"/>
                              <div class="user-data"> <span class="name block capitalize-font">Suzi Cole</span> <span class="time block truncate txt-grey">Neque porro quisquam est..</span> </div>
                              <div class="status online"></div>
                              <div class="clearfix"></div>
                            </div>
                            </a> <a href="javascript:void(0)">
                            <div class="chat-data"> <img class="user-img img-circle"  src="{{ asset('back')}}/plugins/assets/img/users/avatar-2.jpg" alt="user"/>
                              <div class="user-data"> <span class="name block capitalize-font">Tom Taylor</span> <span class="time block truncate txt-grey">Neque porro quisquam est.</span> </div>
                              <div class="status offline"></div>
                              <div class="clearfix"></div>
                            </div>
                            </a> <a href="javascript:void(0)">
                            <div class="chat-data"> <img class="user-img img-circle"  src="{{ asset('back')}}/plugins/assets/img/users/avatar-1.jpg" alt="user"/>
                              <div class="user-data"> <span class="name block capitalize-font">Mitch Blue</span> <span class="time block truncate txt-grey">Neque porro quisquam est.</span> </div>
                              <div class="status online"></div>
                              <div class="clearfix"></div>
                            </div>
                            </a> <a href="javascript:void(0)">
                            <div class="chat-data"> <img class="user-img img-circle"  src="{{ asset('back')}}/plugins/assets/img/users/avatar-3.jpg" alt="user"/>
                              <div class="user-data"> <span class="name block capitalize-font">Jason Rudd</span> <span class="time block truncate txt-grey">Neque porro quisquam est.</span> </div>
                              <div class="status away"></div>
                              <div class="clearfix"></div>
                            </div>
                            </a> <a href="javascript:void(0)">
                            <div class="chat-data"> <img class="user-img img-circle"  src="{{ asset('back')}}/plugins/assets/img/users/avatar-4.jpg" alt="user"/>
                              <div class="user-data"> <span class="name block capitalize-font">Michelle</span> <span class="time block truncate txt-grey">Neque porro quisquam est.</span> </div>
                              <div class="status online"></div>
                              <div class="clearfix"></div>
                            </div>
                            </a> <a href="javascript:void(0)">
                            <div class="chat-data"> <img class="user-img img-circle"  src="{{ asset('back')}}/plugins/assets/img/users/avatar-5.jpg" alt="user"/>
                              <div class="user-data"> <span class="name block capitalize-font">Ludacris Stack</span> <span class="time block truncate txt-grey">Neque porro quisquam est.</span> </div>
                              <div class="status away"></div>
                              <div class="clearfix"></div>
                            </div>
                            </a> </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="recent-chat-box-wrap">
                  <div class="recent-chat-wrap">
                    <div class="panel-heading ma-0">
                      <div class="goto-back"> <a  id="goto_back" href="javascript:void(0)" class="inline-block txt-grey"> <i class="mdi mdi-chevron-left"></i> </a> <span class="inline-block txt-dark">Max</span> <a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="mdi mdi-more"></i></a>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                    <div class="panel-wrapper collapse in">
                      <div class="panel-body pa-0">
                        <div class="chat-content">
                          <ul class="nicescroll-bar pt-20">
                            <li class="friend">
                              <div class="friend-msg-wrap"> <img class="user-img img-circle block pull-left"  src="{{ asset('back')}}/plugins/assets/img/users/avatar-2.jpg" alt="user"/>
                                <div class="msg pull-left">
                                  <p class="msng-name">Sam Wrote:</p>
                                  <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet?</p>
                                  <div class="msg-per-detail text-right"> <span class="msg-time txt-grey">5:01 PM</span> </div>
                                </div>
                                <div class="clearfix"></div>
                              </div>
                            </li>
                            <li class="self mb-10">
                              <div class="self-msg-wrap">
                                <div class="msg block pull-right"> Neque porro quisquam est qui dolorem ipsum quia dolor sit amet
                                  <div class="msg-per-detail text-right"> <span class="msg-time txt-light">5:01 pm</span> </div>
                                </div>
                                <div class="clearfix"></div>
                              </div>
                            </li>
                            <li class="self">
                              <div class="self-msg-wrap">
                                <div class="msg block pull-right"> Consectetur, adipisci velit.
                                  <div class="msg-per-detail text-right"> <span class="msg-time txt-light">5:13 pm</span> </div>
                                </div>
                                <div class="clearfix"></div>
                              </div>
                            </li>
                            <li class="friend">
                              <div class="friend-msg-wrap"> <img class="user-img img-circle block pull-left"  src="{{ asset('back')}}/plugins/assets/img/users/avatar-2.jpg" alt="user"/>
                                <div class="msg pull-left">
                                  <p class="msng-name">Sam Wrote:</p>
                                  <p>Neque porro quisquam.</p>
                                  <div class="msg-per-detail  text-right"> <span class="msg-time txt-grey">6:35 pm</span> </div>
                                </div>
                                <div class="clearfix"></div>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="input-group">
                          <input type="text" id="input_msg_send" name="send-msg" class="input-msg-send form-control" placeholder="Type something">
                          <div class="input-group-btn emojis">
                            <div class="dropup">
                              <button type="button" class="btn  btn-default  dropdown-toggle" data-toggle="dropdown" ><i class="mdi mdi-mood"></i></button>
                              <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="javascript:void(0)">Action</a></li>
                                <li><a href="javascript:void(0)">Another action</a></li>
                                <li class="divider"></li>
                                <li><a href="javascript:void(0)">Separated link</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="input-group-btn attachment">
                            <div class="fileupload btn  btn-default"><i class="mdi mdi-attachment-alt"></i>
                              <input type="file" class="upload">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="messages_tab" class="tab-pane fade" role="tabpanel">
              <div class="message-box-wrap">
                <div class="add-friend"> <span class="inline-block txt-dark">messages</span> <a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="mdi mdi-search"></i></a> <a href="javascript:void(0)" class="inline-block txt-grey"> <i class="mdi mdi-more"></i> </a>
                  <div class="clearfix"></div>
                </div>
                <div class="set-height-wrap">
                  <div class="streamline message-box nicescroll-bar"> <a href="javascript:void(0)">
                    <div class="sl-item">
                      <div class="sl-avatar avatar avatar-sm avatar-circle"> <img class="img-responsive img-circle" src="{{ asset('back')}}/plugins/assets/img/users/avatar-2.jpg" alt="avatar"/> </div>
                      <div class="sl-content"> <span class="inline-block capitalize-font   pull-left message-per">Peter Wyatt</span> <span class="inline-block font-11  pull-right message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class=" truncate message-subject">Neque porro quisquam est qui dolorem ipsu messm quia dolor sit amet consectetur</span>
                        <p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsu messm quia dolor sit amet consectetur, adipisci velit</p>
                      </div>
                    </div>
                    </a> <a href="javascript:void(0)">
                    <div class="sl-item">
                      <div class="sl-avatar avatar avatar-sm avatar-circle"> <img class="img-responsive img-circle" src="{{ asset('back')}}/plugins/assets/img/users/avatar-1.jpg" alt="avatar"/> </div>
                      <div class="sl-content"> <span class="inline-block capitalize-font   pull-left message-per">Vivian Rox</span> <span class="inline-block font-11  pull-right message-time">1 Feb</span>
                        <div class="clearfix"></div>
                        <span class=" truncate message-subject">Neque porro quisquam est qui dolorem ipsu messm quia dolor sit amet consectetur</span>
                        <p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit</p>
                      </div>
                    </div>
                    </a> <a href="javascript:void(0)">
                    <div class="sl-item">
                      <div class="sl-avatar avatar avatar-sm avatar-circle"> <img class="img-responsive img-circle" src="{{ asset('back')}}/plugins/assets/img/users/avatar-3.jpg" alt="avatar"/> </div>
                      <div class="sl-content"> <span class="inline-block capitalize-font   pull-left message-per">Mr. Danielle</span> <span class="inline-block font-11  pull-right message-time">31 Jan</span>
                        <div class="clearfix"></div>
                        <span class=" truncate message-subject">Neque porro quisquam est qui dolorem ipsu messm quia dolor sit amet consectetur nominees</span>
                        <p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit</p>
                      </div>
                    </div>
                    </a> <a href="javascript:void(0)">
                    <div class="sl-item">
                      <div class="sl-avatar avatar avatar-sm avatar-circle"> <img class="img-responsive img-circle" src="{{ asset('back')}}/plugins/assets/img/users/avatar-4.jpg" alt="avatar"/> </div>
                      <div class="sl-content"> <span class="inline-block capitalize-font   pull-left message-per">Tom Taylor</span> <span class="inline-block font-11  pull-right message-time">29 Jan</span>
                        <div class="clearfix"></div>
                        <span class=" truncate message-subject">Neque porro quisquam est qui dolorem ipsu messm quia dolor sit amet consectetur</span>
                        <p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit</p>
                      </div>
                    </div>
                    </a> <a href="javascript:void(0)">
                    <div class="sl-item">
                      <div class="sl-avatar avatar avatar-sm avatar-circle"> <img class="img-responsive img-circle" src="{{ asset('back')}}/plugins/assets/img/users/avatar-5.jpg" alt="avatar"/> </div>
                      <div class="sl-content"> <span class="inline-block capitalize-font   pull-left message-per">Mitch Blue</span> <span class="inline-block font-11  pull-right message-time">27 Jan</span>
                        <div class="clearfix"></div>
                        <span class=" truncate message-subject">Neque porro quisquam.</span>
                        <p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit</p>
                      </div>
                    </div>
                    </a> <a href="javascript:void(0)">
                    <div class="sl-item">
                      <div class="sl-avatar avatar avatar-sm avatar-circle"> <img class="img-responsive img-circle" src="{{ asset('back')}}/plugins/assets/img/users/avatar-2.jpg" alt="avatar"/> </div>
                      <div class="sl-content"> <span class="inline-block capitalize-font   pull-left message-per">Michelle</span> <span class="inline-block font-11  pull-right message-time">19 Jan</span>
                        <div class="clearfix"></div>
                        <span class=" truncate message-subject">Neque porro quisquam es.</span>
                        <p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit</p>
                      </div>
                    </div>
                    </a> <a href="javascript:void(0)">
                    <div class="sl-item">
                      <div class="sl-avatar avatar avatar-sm avatar-circle"> <img class="img-responsive img-circle" src="{{ asset('back')}}/plugins/assets/img/users/avatar-1.jpg" alt="avatar"/> </div>
                      <div class="sl-content"> <span class="inline-block capitalize-font   pull-left message-per">Linda Stack</span> <span class="inline-block font-11  pull-right message-time">13 Jan</span>
                        <div class="clearfix"></div>
                        <span class=" truncate message-subject">Neque porro quisquam.</span>
                        <p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit</p>
                      </div>
                    </div>
                    </a> </div>
                </div>
              </div>
            </div>
            <div id="settings_tab" class="tab-pane fade" role="tabpanel">
              <div class="settings-box-wrap">
                <div class="add-settings text-center txt-dark pt-15"> General Settings
                  <div class="clearfix"></div>
                </div>
                <div class="set-height-wrap"> 
                  <!-- settings-List -->
                  <ul class="settings-list nicescroll-bar">
                    <li class="settings-item">
                      <div class="list-settings">
                        <div class="pull-left">Email Notifications</div>
                        <div class="pull-right">
                          <input type="checkbox" class="switch-setting-bar switch-setting" data-color="#716aca" data-size="small"/>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </li>
                    <li class="settings-item">
                      <div class="list-settings">
                        <div class="pull-left">Site Tracking</div>
                        <div class="pull-right">
                          <input type="checkbox" checked class="switch-setting-bar switch-setting" data-color="#716aca" data-size="small"/>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </li>
                    <li class="settings-item">
                      <div class="list-settings">
                        <div class="pull-left">SMS Alerts </div>
                        <div class="pull-right">
                          <input type="checkbox" class="switch-setting-bar switch-setting" data-color="#716aca" data-size="small"/>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </li>
                    <li class="settings-item">
                      <div class="list-settings">
                        <div class="pull-left">Backup Storage</div>
                        <div class="pull-right">
                          <input type="checkbox" checked class="switch-setting-bar switch-setting" data-color="#716aca" data-size="small"/>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </li>
                    <li class="settings-item">
                      <div class="list-settings">
                        <div class="pull-left">Audit Logs</div>
                        <div class="pull-right">
                          <input type="checkbox" class="switch-setting-bar switch-setting" data-color="#716aca" data-size="small"/>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </li>
                    <li>
                      <div class="add-settings text-center txt-dark pt-15"> SYSTEM SETTINGS
                        <div class="clearfix"></div>
                      </div>
                    </li>
                    <li class="settings-item">
                      <div class="list-settings">
                        <div class="pull-left">System Logs </div>
                        <div class="pull-right">
                          <input type="checkbox" class="switch-setting-bar switch-setting" data-color="#716aca" data-size="small"/>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </li>
                    <li class="settings-item">
                      <div class="list-settings">
                        <div class="pull-left">Error Reporting </div>
                        <div class="pull-right">
                          <input type="checkbox" checked class="switch-setting-bar switch-setting" data-color="#716aca" data-size="small"/>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </li>
                    <li class="settings-item">
                      <div class="list-settings">
                        <div class="pull-left">Applications Logs </div>
                        <div class="pull-right">
                          <input type="checkbox" checked class="switch-setting-bar switch-setting" data-color="#716aca" data-size="small"/>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </li>
                    <li class="settings-item">
                      <div class="list-settings">
                        <div class="pull-left">Backup Servers</div>
                        <div class="pull-right">
                          <input type="checkbox" class="switch-setting-bar switch-setting" data-color="#716aca" data-size="small"/>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </li>
                    <li class="settings-item">
                      <div class="list-settings">
                        <div class="pull-left">Audit Logs</div>
                        <div class="pull-right">
                          <input type="checkbox" class="switch-setting-bar switch-setting" data-color="#716aca" data-size="small"/>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </li>
                  </ul>
                  <!-- /settings-List --> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
  <!-- /Right Sidebar Menu --> 
  <!-- Main Content -->
 <div class="page-wrapper">
    <div class="container-fluid pt-25"> 
      <!-- Row -->
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="panel panel-default card-view pa-0">
            <div class="panel-wrapper collapse in">
              <div class="panel-body pa-0">
                <div class="sm-data-box">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-xs-6 pl-20 pr-0 data-wrap-left"> <span class="txt-dark block counter"><span class="counter-anim">123,456</span></span> <span class="weight-500 uppercase-font block">TOTAL PROFIT</span> </div>
                      <div class="col-xs-6 text-center  pl-0 pr-0 pt-30 data-wrap-right">
                        <div id="sparkline_3" class="sparkline-w-100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="panel panel-default card-view pa-0">
            <div class="panel-wrapper collapse in">
              <div class="panel-body pa-0">
                <div class="sm-data-box">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-xs-6 pl-20 pr-0 data-wrap-left"> <span class="txt-dark block counter"><span class="counter-anim">12.34</span>%</span> <span class="weight-500 uppercase-font block">ACTIVE USERS </span> </div>
                      <div class="col-xs-6 text-center  pl-0 pr-0  pt-30 data-wrap-right">
                        <div id="sparkline_4" class="sparkline-w-100-h-50"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="panel panel-default card-view pa-0">
            <div class="panel-wrapper collapse in">
              <div class="panel-body pa-0">
                <div class="sm-data-box">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-xs-6 pl-20 pr-0 data-wrap-left"> <span class="txt-dark block counter"><span class="counter-anim">1,234,568</span></span> <span class="weight-500 uppercase-font block">NEW ORDERS </span> </div>
                      <div class="col-xs-6 text-center  pl-0 pr-0 pt-20 data-wrap-right">
                        <div id="e_chart_1" class="h-50"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="panel panel-default card-view pa-0">
            <div class="panel-wrapper collapse in">
              <div class="panel-body pa-0">
                <div class="sm-data-box">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-xs-6 pl-20 pr-0 data-wrap-left"> <span class="txt-dark block counter"><span class="counter-anim">35.13</span>%</span> <span class="weight-500 uppercase-font block">NEW COMMENTS </span> </div>
                      <div class="col-xs-6 text-center  pl-0 pr-0 pt-25  data-wrap-right">
                        <div class="flot-container h-55">
                          <div id="real_time_chart" class="demo-placeholder"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Row --> 
    <!-- Row-->
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <div class="panel panel-default card-view  pa-0">
        <div class="panel-wrapper collapse in">
          <div class="panel-body  pa-0">
            <div class="profile-box">
              <div class="profile-cover-pic">
                <div class="fileupload btn btn-default"> <span class="btn-text"><i class="typcn typcn-pencil"></i></span>
                  <input class="upload" type="file">
                </div>
                <div class="profile-image-overlay"></div>
              </div>
              <div class="profile-info text-center">
                <div class="profile-img-wrap"> <img class="inline-block mb-10" src="{{ asset('back')}}/plugins/assets/img/users/img-user.jpg" alt="user"/>
                  <div class="fileupload btn btn-default"> <span class="btn-text"><i class="typcn typcn-pencil"></i></span>
                    <input class="upload" type="file">
                  </div>
                </div>
                <h5 class="block mt-5 mb-5 weight-500 capitalize-font txt-primary">Michelle Abraham</h5>
                <h6 class="block capitalize-font pb-10">CEO Xyz</h6>
              </div>
              <div class="social-info">
                <div class="row">
                  <div class="col-xs-4 text-center"> <span class="counts block head-font"><span class="counter-anim">345</span></span> <span class="counts-text block">post</span> </div>
                  <div class="col-xs-4 text-center"> <span class="counts block head-font"><span class="counter-anim">246</span></span> <span class="counts-text block">followers</span> </div>
                  <div class="col-xs-4 text-center"> <span class="counts block head-font"><span class="counter-anim">898</span></span> <span class="counts-text block">tweets</span> </div>
                </div>
                <button class="btn btn-primary btn-block  btn-anim mt-10" data-toggle="modal" data-target="#myModal1"><i class="fa fa-pencil"></i><span class="btn-text">edit profile</span></button>
                <div id="myModal1" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h5 class="modal-title" id="myModalLabel">Edit Profile</h5>
                      </div>
                      <div class="modal-body"> 
                        <!-- Row -->
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="">
                              <div class="panel-wrapper collapse in">
                                <div class="panel-body pa-0">
                                  <div class="col-sm-12 col-xs-12">
                                    <div class="form-wrap">
                                      <form action="#">
                                        <div class="form-body overflow-hide">
                                          <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputuname_1">Name</label>
                                            <div class="input-group">
                                              <div class="input-group-addon"><i class="mdi mdi-account"></i></div>
                                              <input type="text" class="form-control" id="exampleInputuname_1" placeholder="willard bryant">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputEmail_1">Email address</label>
                                            <div class="input-group">
                                              <div class="input-group-addon"><i class="mdi mdi-email"></i></div>
                                              <input type="email" class="form-control" id="exampleInputEmail_1" placeholder="xyz@gmail.com">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputContact_1">Contact number</label>
                                            <div class="input-group">
                                              <div class="input-group-addon"><i class="mdi mdi-cellphone"></i></div>
                                              <input type="email" class="form-control" id="exampleInputContact_1" placeholder="+102 9388333">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputpwd_1">Password</label>
                                            <div class="input-group">
                                              <div class="input-group-addon"><i class="mdi mdi-lock"></i></div>
                                              <input type="password" class="form-control" id="exampleInputpwd_1" placeholder="Enter pwd" value="password">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label mb-10">Gender</label>
                                            <div>
                                              <div class="radio">
                                                <input type="radio" name="radio1" id="radio_1" value="option1" checked="">
                                                <label for="radio_1"> Male </label>
                                              </div>
                                              <div class="radio">
                                                <input type="radio" name="radio1" id="radio_2" value="option2">
                                                <label for="radio_2"> Female </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label mb-10">Country</label>
                                            <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                              <option value="Category 1">USA</option>
                                              <option value="Category 2">Austrailia</option>
                                              <option value="Category 3">India</option>
                                              <option value="Category 4">UK</option>
                                            </select>
                                          </div>
                                        </div>
                                        <button type="button" class="btn btn-success waves-effect" data-dismiss="modal">Save</button>
                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.modal-content --> 
                  </div>
                  <!-- /.modal-dialog --> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <div class="panel panel-default card-view panel-refresh">
        <div class="refresh-container">
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
        <div class="panel-heading">
          <div class="pull-left">
            <h6 class="panel-title txt-dark">Finance Summary </h6>
          </div>
          <div class="pull-right"> <a href="#" class="pull-left inline-block refresh mr-15"> <i class="mdi mdi-replay"></i> </a> </div>
          <div class="clearfix"></div>
        </div>
        <div class="panel-wrapper collapse in">
          <div class="panel-body pt-0">
            <div id="e_chart_3" class="h-55-m-25"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <div class="row ad-row--full-height">
        <div class="col-lg-6 col-xs-6">
          <div class="ad-portlet card-view ad-portlet--half-height ad-portlet--border-bottom-success ">
            <div class="ad-portlet__body">
              <div class="ad-widget-1">
                <div class="ad-widget-1__number"> 132 <small>All Sales</small> </div>
                <div id="sparkline_1_1" class="spakline-o-hidden" ></div>
              </div>
            </div>
          </div>
          <div class="ad--space-30"></div>
          <div class="ad-portlet card-view ad-portlet--half-height ad-portlet--border-bottom-brand ">
            <div class="ad-portlet__body">
              <div class="ad-widget-1">
                <div class="ad-widget-1__number"> 321 <small>All Orders</small> </div>
                <div id="sparkline_1"  class="spakline-o-hidden"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6  col-xs-6">
          <div class="ad-portlet card-view ad-portlet--half-height ad-portlet--border-bottom-danger ">
            <div class="ad-portlet__body">
              <div class="ad-widget-1">
                <div class="ad-widget-1__number"> 465 <small>All Transactions</small> </div>
                <div id="sparkline_1_2"  class="spakline-o-hidden"></div>
              </div>
            </div>
          </div>
          <div class="ad--space-30"></div>
          <div class="ad-portlet card-view ad-portlet--half-height ad-portlet--border-bottom-accent ">
            <div class="ad-portlet__body">
              <div class="ad-widget-1">
                <div class="ad-widget-1__number"> 798 <small>All Sales</small> </div>
                <div id="sparkline_1_3"  class="spakline-o-hidden"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <!-- Row --> 
    <!-- Row-->
    <div class="col-lg-6 col-md-12 ">
      <div class="panel panel-default card-view">
        <div class="panel-heading">
          <div class="pull-left">
            <h6 class="panel-title txt-dark">Employees</h6>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="panel-wrapper">
          <div class="panel-body row pa-0">
            <div class="table-wrapper">
              <div class="table-responsive">
                <table class="table border-none" id="data_table_employee">
                  <thead>
                    <tr>
                      <th>Employee ID</th>
                      <th>Name</th>
                      <th>Department</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><span class="txt-dark">#123654</span></td>
                      <td>Irina Sampio</td>
                      <td>Chart Analyst</td>
                      <td><span class="label label-danger">Terminated</span></td>
                      <td class="text-center"><a href="javascript:void(0)" class="text-inverse" title="Edit" data-toggle="tooltip"><i class="mdi mdi-lead-pencil"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="mdi mdi-delete"></i></a></td>
                    </tr>
                    <tr>
                      <td><span class="txt-dark">#564798</span></td>
                      <td>Michell Mark</td>
                      <td>Design Lead</td>
                      <td><span class="label label-warning">Offline</span></td>
                      <td class="text-center"><a href="javascript:void(0)" class="text-inverse" title="Edit" data-toggle="tooltip"><i class="mdi mdi-lead-pencil"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="mdi mdi-delete"></i></a></td>
                    </tr>
                    <tr>
                      <td><span class="txt-dark">#6547861</span></td>
                      <td>Tom Fiege</td>
                      <td>UI Development</td>
                      <td><span class="label label-danger">Terminated</span></td>
                      <td class="text-center"><a href="javascript:void(0)" class="text-inverse" title="Edit" data-toggle="tooltip"><i class="mdi mdi-lead-pencil"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="mdi mdi-delete"></i></a></td>
                    </tr>
                    <tr>
                      <td><span class="txt-dark">#3124564</span></td>
                      <td>James Nolan</td>
                      <td>Programming</td>
                      <td><span class="label label-success">active</span></td>
                      <td class="text-center"><a href="javascript:void(0)" class="text-inverse" title="Edit" data-toggle="tooltip"><i class="mdi mdi-lead-pencil"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="mdi mdi-delete"></i></a></td>
                    </tr>
                    <tr>
                      <td><span class="txt-dark">#7894612</span></td>
                      <td>Chris Jackson</td>
                      <td>Finance</td>
                      <td><span class="label label-success">active</span></td>
                      <td class="text-center"><a href="javascript:void(0)" class="text-inverse" title="Edit" data-toggle="tooltip"><i class="mdi mdi-lead-pencil"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="mdi mdi-delete"></i></a></td>
                    </tr>
                    <tr>
                      <td><span class="txt-dark">#3579514</span></td>
                      <td>Wanda Runners</td>
                      <td>Accounting</td>
                      <td><span class="label label-success">active</span></td>
                      <td class="text-center"><a href="javascript:void(0)" class="text-inverse" title="Edit" data-toggle="tooltip"><i class="mdi mdi-lead-pencil"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="mdi mdi-delete"></i></a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 pl-0 pr-0 col-xs-12 widget-penal">
      <div class="col-md-7 col-xs-12">
        <div class="panel panel-default card-view widget-weather">
          <div class="panel-heading">
            <div class="pull-left">
              <h6 class="panel-title txt-dark">Today's Weather</h6>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="panel-wrapper">
            <div class="panel-body row pa-0">
              <div class="col-xs-12 ">
                <div class="row mt-20">
                  <div class="col-lg-5">
                    <h4 class="no-margin">Monday</h4>
                    <p class="small hint-text">9th March 2018</p>
                  </div>
                  <div class="col-lg-7">
                    <div class="pull-left">
                      <p class="small hint-text no-margin">Currently</p>
                      <h4 class="text-danger bold no-margin">32° <span class="small">/ 30C</span> </h4>
                    </div>
                    <div class="pull-right">
                      <canvas height="64" width="64" class="clear-day"></canvas>
                    </div>
                  </div>
                </div>
                <h5>Feels like <span class="semi-bold">rainy</span> </h5>
                <p>Weather information</p>
                <div class="widget-weather">
                  <div class="col-xs-6 pt-10 pl-0">
                    <div class="row">
                      <div class="col-lg-12">
                        <p class="pull-left txt-dark">Wind</p>
                        <p class="pull-right bold">11km/h</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <p class="pull-left txt-dark">Sunrise</p>
                        <p class="pull-right bold">05:20</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <p class="pull-left txt-dark">Humidity</p>
                        <p class="pull-right bold">20%</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <p class="pull-left txt-dark">Precipitation</p>
                        <p class="pull-right bold">60%</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-6  pt-10 pl-10">
                    <div class="row">
                      <div class="col-lg-12">
                        <p class="pull-left txt-dark">Sunset</p>
                        <p class="pull-right bold">21:05</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <p class="pull-left txt-dark">Visibility</p>
                        <p class="pull-right bold">21km</p>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="mt-10 timeslot">
                  <div class="col-xs-2 pt-15 pb-15 text-center">
                    <p class="small">13:30</p>
                    <canvas height="25" width="25" class="partly-cloudy-day"></canvas>
                    <p class="text-danger bold">30°C</p>
                  </div>
                  <div class="col-xs-2 pt-15 pb-15 text-center">
                    <p class="small">14:00</p>
                    <canvas height="25" width="25" class="cloudy"></canvas>
                    <p class="text-danger bold">30°C</p>
                  </div>
                  <div class="col-xs-2 pt-15 pb-15 text-center">
                    <p class="small">14:30</p>
                    <canvas height="25" width="25" class="rain"></canvas>
                    <p class="text-danger bold">30°C</p>
                  </div>
                  <div class="col-xs-2 pt-15 pb-15 text-center">
                    <p class="small">15:00</p>
                    <canvas height="25" width="25" class="sleet"></canvas>
                    <p class="text-danger bold">30°C</p>
                  </div>
                  <div class="col-xs-2 pt-15 pb-15 text-center">
                    <p class="small">15:30</p>
                    <canvas height="25" width="25" class="snow"></canvas>
                    <p class="text-danger bold">30°C</p>
                  </div>
                  <div class="col-xs-2 pt-15 pb-15 text-center">
                    <p class="small">16:00</p>
                    <canvas height="25" width="25" class="wind"></canvas>
                    <p class="text-danger bold">30°C</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 col-xs-12 pr-0">
        <div class="panel panel-default card-view widget-weather">
          <div class="panel-heading">
            <div class="pull-left">
              <h6 class="panel-title txt-dark">Upcoming</h6>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="panel-wrapper">
            <div class="panel-body row pa-0">
              <div class="col-xs-12 ">
                <div class="">
                  <div class="forecast-day col-lg-6 text-center mt-0 ">
                    <div class="bg-master-lightest pb-10 pt-10">
                      <h4 class="pt-10 no-margin">Tuesday</h4>
                      <p class="small hint-text mb-20">11th March 2018</p>
                      <canvas class="rain" width="64" height="64"></canvas>
                      <h5 class="text-danger">32°</h5>
                      <p>Feels like <span class="bold">sunny</span> </p>
                      <p class="small">Wind <span class="bold pl-20">11km/h</span> </p>
                      <div class="mt-25 mb-15 block">
                        <div class="padding-10">
                          <div class="row">
                            <div class="col-lg-6 text-center">
                              <p class="small">Noon</p>
                              <canvas class="sleet" width="25" height="25"></canvas>
                              <p class="text-danger bold">30°C</p>
                            </div>
                            <div class="col-lg-6 text-center">
                              <p class="small">Night</p>
                              <canvas class="wind" width="25" height="25"></canvas>
                              <p class="text-danger bold">30°C</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 text-center mt-0 ">
                    <div class="bg-master-lightest pb-10 pt-10">
                      <h4 class="pt-10 no-margin">Wednesday</h4>
                      <p class="small hint-text mb-20">11th March 2018</p>
                      <canvas class="rain" width="64" height="64"></canvas>
                      <h5 class="text-danger">32°</h5>
                      <p>Feels like <span class="bold">sunny</span> </p>
                      <p class="small">Wind <span class="bold pl-20">11km/h</span> </p>
                      <div class="mt-25 mb-15 block">
                        <div class="padding-10">
                          <div class="row">
                            <div class="col-lg-6 text-center">
                              <p class="small">Noon</p>
                              <canvas class="sleet" width="25" height="25"></canvas>
                              <p class="text-danger bold">30°C</p>
                            </div>
                            <div class="col-lg-6 text-center">
                              <p class="small">Night</p>
                              <canvas class="wind" width="25" height="25"></canvas>
                              <p class="text-danger bold">30°C</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    <!-- Row--> 
    <!-- Footer -->
    <footer class="footer container-fluid pt-10 pb-10  pl-30 pr-30">
      <div class="row">
        <div class="col-sm-12 ">
          <div class="pull-left text-dark pt-5 small">Copyright @ 2018  Hyrax UX  Panel. All Rights Reserved</div>
          <div class="pull-right">Created with by <img src="{{ asset('back')}}/plugins/assets/img/heartbeat.svg" alt="srgit" class="heart"> <a href="http://www.srgit.com/" target="_blank">SRGIT</a></div>
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
<!-- JavaScript --> 
<!-- jQuery --> 
<script src="{{ asset('back')}}/plugins/vendors/bower_components/jquery/dist/jquery.min.js"></script> 
<!-- Bootstrap Core JavaScript --> 
<script src="{{ asset('back')}}/plugins/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> 
<!-- Data table JavaScript --> 
<script src="{{ asset('back')}}/plugins/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script> 
<!-- Slimscroll JavaScript --> 
<script src="{{ asset('back')}}/plugins/assets/js/jquery.slimscroll.js"></script> 
<!-- Owl JavaScript --> 
<script src="{{ asset('back')}}/plugins/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script> 
<script src="{{ asset('back')}}/plugins/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script> 
<!-- Progressbar Animation JavaScript --> 
<script src="{{ asset('back')}}/plugins/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script> 
<script src="{{ asset('back')}}/plugins/vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script> 
<!-- Fancy Dropdown JS --> 
<script src="{{ asset('back')}}/plugins/assets/js/dropdown-bootstrap-extended.js"></script> 
<!-- FlotChart JavaScript --> 
<script src="{{ asset('back')}}/plugins/vendors/bower_components/flot/jquery.flot.js"></script> 
<script src="{{ asset('back')}}/plugins/assets/js/flot-data-dashboard.js"></script> 
<script src="{{ asset('back')}}/plugins/vendors/bower_components/skycons/skycons.js"></script> 
<!-- Sparkline JavaScript --> 
<script src="{{ asset('back')}}/plugins/vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script> 
<!-- Switchery JavaScript --> 
<script src="{{ asset('back')}}/plugins/vendors/bower_components/switchery/dist/switchery.min.js"></script> 
<!-- EChartJS JavaScript --> 
<script src="{{ asset('back')}}/plugins/vendors/bower_components/echarts/dist/echarts-en.min.js"></script> 
<!-- Toast JavaScript --> 
<script src="{{ asset('back')}}/plugins/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script> 
<!-- Init JavaScript --> 
<script src="{{ asset('back')}}/plugins/assets/js/init.js"></script> 
<script src="{{ asset('back')}}/plugins/assets/js/dashboard.init.js"></script>
</body>
</html>
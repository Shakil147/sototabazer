<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
      <li class="navigation-header"> <span>Main</span> <i class="mdi mdi-more"></i> </li>
      @if(Auth::user()->post == 'admin' or Auth::user()->post == 'moderator')
      <li> <a href="javascript:void(0);" data-toggle="collapse" data-target="#admin-dash">
        <div class="pull-left"><i class="mdi mdi-arrange-bring-to-front mr-20"></i><span class="right-nav-text">Cetagory</span></div>
        <div class="pull-right"><i class="mdi mdi-chevron-down"></i></div>
        <div class="clearfix"></div>
        </a>
        <ul id="admin-dash" class="collapse collapse-level-1">
          <li><a href="{{ url('/add-cetagory') }}">Add Cetagory</a></li>
          <li><a href="{{ Url('/cetagory') }}">Menage Cetagory</a></li>
        </ul>
      </li>
      <li> <a href="javascript:void(0);" data-toggle="collapse" data-target="#admin-uir">
        <div class="pull-left"><i class="mdi mdi-apple mr-20"></i><span class="right-nav-text">Brand</span></div>
        <div class="pull-right"><span class="label label-primary">new</span></div>
        <div class="clearfix"></div>
        </a>
        <ul id="admin-uir" class="collapse collapse-level-1">
          <li><a href="{{ url('/add-brand') }}">Add brand</a></li>
          <li><a href="{{ Url('/brands') }}">Menage Brand</a></li>
        </ul>
      </li>
      <li> <a href="javascript:void(0);" data-toggle="collapse" data-target="#admin-Porduct">
        <div class="pull-left"><i class="mdi mdi-apps mr-20"></i><span class="right-nav-text">Porduct</span></div>
        <div class="pull-right"><span class="label label-primary">new</span></div>
        <div class="clearfix"></div>
        </a>
        <ul id="admin-Porduct" class="collapse collapse-level-1">
          <li><a href="{{ url('/add-product') }}">Add Porduct</a></li>
          <li><a href="{{ Url('/products') }}">Menage Porduct</a></li>
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
          <li> <a href="{{ url('/orders') }}">Shop dashboard</a> </li>
          <li> <a href="{{ url('/ordersMenage') }}">Order Menage</a> </li>
          <li> <a href="{{ Url('/products') }}">Products List</a> </li>
          <li> <a href="{{ url('/add-product') }}">Add Product</a> </li>
          <li> <a  href="ecommerce-order-details.html">Order Details</a> </li>
        </ul>
      </li>
      <li> <a  href="javascript:void(0);" data-toggle="collapse" data-target="#invoice_list">
        <div class="pull-left"><i class="mdi mdi-email mr-20"></i><span  class="right-nav-text">Mailbox</span></div>
        <div class="pull-right"><i class="mdi mdi-chevron-down"></i></div>
        <div class="clearfix"></div>
        </a>
        <ul id="invoice_list" class="collapse collapse-level-2">
          <li> <a href="{{ url('/E-mail-inbox') }}">Email Inbox</a> </li>
              <li> <a href="{{ url('/E-mail-details') }}">Email Detail</a></li>
              <li> <a href="{{ url('/E-mail-send') }}">Email Compose</a> </li>
        </ul>
      </li>
      @endif
      <li>
        <hr class="light-grey-hr mb-10"/>
      </li>
      @if(Auth::user()->post == 'admin') 
      <li> <a  href="javascript:void(0);" data-toggle="collapse" data-target="#Users">
        <div class="pull-left"><i class="mdi mdi-email mr-20"></i><span  class="right-nav-text">Users</span></div>
        <div class="pull-right"><i class="mdi mdi-chevron-down"></i></div>
        <div class="clearfix"></div>
        </a>
        <ul id="Users" class="collapse collapse-level-2">
          <li> <a href="{{ url('/users') }}">Menage Users</a> </li>
              <li> <a href="{{ url('/E-mail-details') }}">Add New User</a></li>
        </ul>
      </li>
      @endif
      <!-- ecommerce -->
    </ul>
  </div>
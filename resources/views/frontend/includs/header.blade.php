<div class="header-middle ">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="navbar-logo col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="logo"><a href="{{ url('/')}}"><img src="{{ asset('emarket')}}/image/catalog/logo.png" title="Your Store" alt="Your Store" /></a></div>
                    </div>
                    <!-- //end Logo -->

                    <!-- Main menu -->
                    <div class="main-menu col-lg-6 col-md-7 ">
                        <div class="responsive so-megamenu megamenu-style-dev">
                            <nav class="navbar-default navbar-static-top">
                                <div class=" container-megamenu  horizontal open ">
                                    <div class="navbar-header">
                                        <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    
                                    <div class="megamenu-wrapper">
                                        <span id="remove-megamenu" class="fa fa-times"></span>
                                        <div class="megamenu-pattern">
                                            <div class="container-mega">
                                                <ul class="megamenu" data-transition="slide" data-animationtime="250">
                                                    <li class="home">
                                                        <a href="{{ url('/') }}">Home <b class="caret"></b></a>
                                            
                                                    </li>
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="{{ asset('emarket')}}/#" class="clearfix">
                                                            <strong>Features</strong>
                                                            <img class="label-hot" src="{{ asset('emarket')}}/image/catalog/menu/new-icon.png" alt="icon items">
                                                            <b class="caret"></b>
                                                        </a>
                                                        <div class="sub-menu" style="width: 100%; right: auto;">
                                                            <div class="content" >
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="column">
                                                                            <a href="{{ asset('emarket')}}/#" class="title-submenu">Listing pages</a>
                                                                            <div>
                                                                                <ul class="row-list">
                                                                                    <li><a href="{{ asset('emarket')}}/category.html">Category Page 1 </a></li>
                                                                                    <li><a href="{{ asset('emarket')}}/category-v2.html">Category Page 2</a></li>
                                                                                    <li><a href="{{ asset('emarket')}}/category-v3.html">Category Page 3</a></li>
                                                                                </ul>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="column">
                                                                            <a href="{{ asset('emarket')}}/#" class="title-submenu">Product pages</a>
                                                                            <div>
                                                                                <ul class="row-list">
                                                                                    <li><a href="{{ asset('emarket')}}/product.html">Product page 1</a></li>
                                                                                    <li><a href="{{ asset('emarket')}}/product-v2.html">Product page 2</a></li>
                                                                                    <!-- <li><a href="{{ asset('emarket')}}/product-v3.html">Image size - small</a></li> -->
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="column">
                                                                            <a href="{{ asset('emarket')}}/#" class="title-submenu">Shopping pages</a>
                                                                            <div>
                                                                                <ul class="row-list">
                                                                                    <li><a href="{{ asset('emarket')}}/cart.html">Shopping Cart Page</a></li>
                                                                                    <li><a href="{{ asset('emarket')}}/checkout.html">Checkout Page</a></li>
                                                                                    <li><a href="{{ asset('emarket')}}/compare.html">Compare Page</a></li>
                                                                                    <li><a href="{{ asset('emarket')}}/wishlist.html">Wishlist Page</a></li>
                                                                                
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="column">
                                                                            <a href="{{ asset('emarket')}}/#" class="title-submenu">My Account pages</a>
                                                                            <div>
                                                                                <ul class="row-list">
                                                                                    <li><a href="{{ route('account.login') }}">Login Page</a></li>
                                                                                    <li><a href="{{ route('account.register') }}">Register Page</a></li>
                                                                                    <li><a href="{{ asset('emarket')}}/my-account.html">My Account</a></li>
                                                                                    <li><a href="{{ asset('emarket')}}/order-history.html">Order History</a></li>
                                                                                    <li><a href="{{ asset('emarket')}}/order-information.html">Order Information</a></li>
                                                                                    <li><a href="{{ asset('emarket')}}/return.html">Product Returns</a></li>
                                                                                    <li><a href="{{ asset('emarket')}}/gift-voucher.html">Gift Voucher</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="{{ asset('emarket')}}/#" class="clearfix">
                                                            <strong>Pages</strong>
                                                            <b class="caret"></b>
                                                        </a>
                                                        <div class="sub-menu" style="width: 40%; ">
                                                            <div class="content" >
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <ul class="row-list">
                                                                            <li><a class="subcategory_item" href="{{ asset('emarket')}}/faq.html">FAQ</a></li>
                                                                            
                                                                            <li><a class="subcategory_item" href="{{ asset('emarket')}}/sitemap.html">Site Map</a></li>
                                                                            <li><a class="subcategory_item" href="{{ asset('emarket')}}/contact.html">Contact us</a></li>
                                                                            <li><a class="subcategory_item" href="{{ asset('emarket')}}/banner-effect.html">Banner Effect</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <ul class="row-list">
                                                                            <li><a class="subcategory_item" href="{{ asset('emarket')}}/about-us.html">About Us 1</a></li>
                                                                            <li><a class="subcategory_item" href="{{ asset('emarket')}}/about-us-2.html">About Us 2</a></li>
                                                                            <li><a class="subcategory_item" href="{{ asset('emarket')}}/about-us-3.html">About Us 3</a></li>
                                                                            <li><a class="subcategory_item" href="{{ asset('emarket')}}/about-us-4.html">About Us 4</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="{{ asset('emarket')}}/#" class="clearfix">
                                                            <strong>Categories</strong>
                                                            <img class="label-hot" src="{{ asset('emarket')}}/image/catalog/menu/hot-icon.png" alt="icon items">
                                                  
                                                            <b class="caret"></b>
                                                        </a>
                                                        <div class="sub-menu" style="width: 100%; display: none;">
                                                            <div class="content">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="row">
                                                                            <div class="col-md-3 img img1">
                                                                                <a href="{{ asset('emarket')}}/#"><img src="{{ asset('emarket')}}/image/catalog/menu/megabanner/image-1.jpg" alt="banner1"></a>
                                                                            </div>
                                                                            <div class="col-md-3 img img2">
                                                                                <a href="{{ asset('emarket')}}/#"><img src="{{ asset('emarket')}}/image/catalog/menu/megabanner/image-2.jpg" alt="banner2"></a>
                                                                            </div>
                                                                            <div class="col-md-3 img img3">
                                                                                <a href="{{ asset('emarket')}}/#"><img src="{{ asset('emarket')}}/image/catalog/menu/megabanner/image-3.jpg" alt="banner3"></a>
                                                                            </div>
                                                                            <div class="col-md-3 img img4">
                                                                                <a href="{{ asset('emarket')}}/#"><img src="{{ asset('emarket')}}/image/catalog/menu/megabanner/image-4.jpg" alt="banner4"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <a href="{{ asset('emarket')}}/#" class="title-submenu">Automotive</a>
                                                                        <div class="row">
                                                                            <div class="col-md-12 hover-menu">
                                                                                <div class="menu">
                                                                                    <ul>
                                                                                        <li><a href="{{ asset('emarket')}}/#"  class="main-menu">Car Alarms and Security</a></li>
                                                                                        <li><a href="{{ asset('emarket')}}/#"  class="main-menu">Car Audio &amp; Speakers</a></li>
                                                                                        <li><a href="{{ asset('emarket')}}/#"  class="main-menu">Gadgets &amp; Auto Parts</a></li>
                                                                                        <li><a href="{{ asset('emarket')}}/#"  class="main-menu">More Car Accessories</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a href="{{ asset('emarket')}}/#" class="title-submenu">Funitures</a>
                                                                        <div class="row">
                                                                            <div class="col-md-12 hover-menu">
                                                                                <div class="menu">
                                                                                    <ul>
                                                                                        <li><a href="{{ asset('emarket')}}/#"  class="main-menu">Bathroom</a></li>
                                                                                        <li><a href="{{ asset('emarket')}}/#"  class="main-menu">Bedroom</a></li>
                                                                                        <li><a href="{{ asset('emarket')}}/#"  class="main-menu">Decor</a></li>
                                                                                        <li><a href="{{ asset('emarket')}}/#"  class="main-menu">Living room</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a href="{{ asset('emarket')}}/#" class="title-submenu">Jewelry &amp; Watches</a>
                                                                        <div class="row">
                                                                            <div class="col-md-12 hover-menu">
                                                                                <div class="menu">
                                                                                    <ul>
                                                                                        <li><a href="{{ asset('emarket')}}/#"  class="main-menu">Earings</a></li>
                                                                                        <li><a href="{{ asset('emarket')}}/#"  class="main-menu">Wedding Rings</a></li>
                                                                                        <li><a href="{{ asset('emarket')}}/#"  class="main-menu">Men Watches</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a href="{{ asset('emarket')}}/#" class="title-submenu">Electronics</a>
                                                                        <div class="row">
                                                                            <div class="col-md-12 hover-menu">
                                                                                <div class="menu">
                                                                                    <ul>
                                                                                        <li><a href="{{ asset('emarket')}}/#"  class="main-menu">Computer</a></li>
                                                                                        <li><a href="{{ asset('emarket')}}/#"  class="main-menu">Smartphone</a></li>
                                                                                        <li><a href="{{ asset('emarket')}}/#"  class="main-menu">Tablets</a></li>
                                                                                        <li><a href="{{ asset('emarket')}}/#"  class="main-menu">Monitors</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    
                                                    <li class="">
                                                        <p class="close-menu"></p>
                                                        <a href="{{ asset('emarket')}}/#" class="clearfix">
                                                            <strong>Accessories</strong>
                                         
                                                        </a>
                                            
                                                    </li>
                                                    <li class="">
                                                        <p class="close-menu"></p>
                                                        <a href="{{ asset('emarket')}}/blog-page.html" class="clearfix">
                                                            <strong>Blog</strong>
                                                            <span class="label"></span>
                                                        </a>
                                                    </li>
                                                    
                                                    
                                                </ul>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- //end Main menu -->

                    <div class="middle-right col-lg-4 col-md-3 col-sm-6 col-xs-8">
                                    
                        <div class="signin-w  hidden-sm hidden-xs">
                            <ul class="signin-link blank">                            
                                <li class="log login">
                           @if($customerId = Session::get('customerId')) 
                                @if($customerName = Session::get('customerName'))
                                <i class="glyphicon glyphicon-log-out"><a href="{{ route('account-logout') }}" class="link-lg">Logout</a></i>
                                <a class="link-lg" href="{{ url('/my-account') }}">{{ $customerName }}  </a>
                                @endif
                                
                            @else
                                <i class="fa fa-lock"></i>
                                 <a class="link-lg" href="{{ route('account.login')}}">Login </a>
                                  or <a href="{{ route('account.register')}}">Register</a>
                             @endif
                         </li>                                
                            </ul>                       
                        </div>
                        <div class="telephone hidden-xs hidden-sm hidden-md">
                            <ul class="blank"> <li><a href="{{ asset('emarket')}}/#"><i class="fa fa-truck"></i>track your order</a></li> <li><a href="{{ asset('emarket')}}/#"><i class="fa fa-phone-square"></i>Hotline (+123)4 567 890</a></li> </ul>
                        </div>
                                            
                        
                    </div>
                    
                </div>

            </div>
        </div>
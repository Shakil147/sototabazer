<div class="header-top hidden-compact">
            <div class="container">
                <div class="row">
                    <div class="header-top-left col-lg-7 col-md-8 col-sm-6 col-xs-4">
                        <div class="hidden-sm hidden-xs welcome-msg"><b>
                            @if($message = Session::get('message'))
                            {{ $message }}                             
                            @else
                            Welcome to Emarket ! Wrap new offers / gift every single day on Weekends - New Coupon code: Happy2018 {{ $name = Session::get('customerId') }}
                            @endif
                        </b>  </div>
                        <ul class="top-link list-inline hidden-lg hidden-md">
                            <li class="account" id="my_account">
                                <a href="{{ asset('emarket')}}/#" title="My Account " class="btn-xs dropdown-toggle" data-toggle="dropdown"> <span class="hidden-xs">My Account </span>  <span class="fa fa-caret-down"></span>
                                </a>
                                <ul class="dropdown-menu ">
                            @if(Session::get('customerId')) 
                                @if($name = Session::get('customerName')) 
                                <i class="glyphicon glyphicon-log-out"><a href="{{ route('account-logout') }}" class="link-lg">Logout</a></i>
                                <a class="link-lg" href="#">{{ $name }}  </a> 
                                @endif
                                
                            @else
                                <li>
                                   <a href="{{ route('account.register')}}"><i class="fa fa-user"></i> Register</a>
                                </li>
                                <li>
                                    <a href="{{ route('account.login')}}"><i class="fa fa-pencil-square-o"></i> Login</a>
                                </li>
                             @endif

                                </ul>
                            </li>
                        </ul>            
                    </div>
                    <div class="header-top-right collapsed-block col-lg-5 col-md-4 col-sm-6 col-xs-8">
                        <ul class="top-link list-inline lang-curr">
                            <li class="currency">
                                <div class="btn-group currencies-block">
                                    <form action="http://demo.smartaddons.com/templates/html/emarket/index.php" method="post" enctype="multipart/form-data" id="currency">
                                        <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                            <span class="icon icon-credit "></span> $ US Dollar  <span class="fa fa-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu btn-xs">
                                            <li> <a href="{{ asset('emarket')}}/#">(€)&nbsp;Euro</a></li>
                                            <li> <a href="{{ asset('emarket')}}/#">(£)&nbsp;Pounds    </a></li>
                                            <li> <a href="{{ asset('emarket')}}/#">($)&nbsp;US Dollar </a></li>
                                        </ul>
                                    </form>
                                </div>
                            </li>   
                            <li class="language">
                                <div class="btn-group languages-block ">
                                    <form action="http://demo.smartaddons.com/templates/html/emarket/index.php" method="post" enctype="multipart/form-data" id="bt-language">
                                        <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                            <img src="{{ asset('emarket')}}/image/catalog/flags/gb.png" alt="English" title="English">
                                            <span class="">English</span>
                                            <span class="fa fa-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ asset('emarket')}}/index-2.html"><img class="image_flag" src="{{ asset('emarket')}}/image/catalog/flags/gb.png" alt="English" title="English" /> English </a></li>
                                            <li> <a href="{{ asset('emarket')}}/index-2.html"> <img class="image_flag" src="{{ asset('emarket')}}/image/catalog/flags/ar.png" alt="Arabic" title="Arabic" /> Arabic </a> </li>
                                        </ul>
                                    </form>
                                </div>
                                
                            </li>
                        </ul>
                        

                        
                    </div>
                </div>
            </div>
        </div>
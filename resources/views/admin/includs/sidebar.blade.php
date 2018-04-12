<nav class="main-menu">
        <ul>
            <li>
                <a href="{{ url('/home') }}">
                    <i class="fa fa-home nav_icon"></i>
                    <span class="nav-text">
                    Dashboard
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="{{ asset('backend') }}/javascript:;">
                <i class="fa fa-cogs" aria-hidden="true"></i>
                <span class="nav-text">
                    Cetagoris
                </span>
                <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
                </a>
                <ul>
                    <li>
                    <a class="subnav-text" href="{{ Url('/cetagory') }}">
                    Menage Cetagory
                    </a>
                    </li>
                    <li>
                    <a class="subnav-text" href="{{ url('/add-cetagory') }}">
                    Add Cetagory
                    </a>
                    </li>
                </ul>
            </li>

            <li class="has-subnav">
                <a href="{{ asset('backend') }}/javascript:;">
                <i class="fa fa-check-square-o nav_icon" aria-hidden="true"></i>
                <span class="nav-text">
                    Brand
                </span>
                <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
                </a>
                <ul>
                    <li>
                    <a class="subnav-text" href="{{ Url('/brands') }}">
                    Menage Brand
                    </a>
                    </li>
                    <li>
                    <a class="subnav-text" href="{{ url('/add-brand') }}">
                    Add brand
                    </a>
                    </li>
                </ul>
            </li>
            <li class="has-subnav">
                <a href="{{ asset('backend') }}/javascript:;">
                <i class="fa fa-check-square-o nav_icon" aria-hidden="true"></i>
                <span class="nav-text">
                    Products
                </span>
                <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
                </a>
                <ul>
                    <li>
                    <a class="subnav-text" href="{{ Url('/products') }}">
                    Menage Products
                    </a>
                    </li>
                    <li>
                    <a class="subnav-text" href="{{ url('/add-product') }}">
                    Add Product
                    </a>
                    </li>
                </ul>
            </li>
                        <li class="has-subnav">
                <a href="javascript:;">
                <i class="fa fa-check-square-o nav_icon" aria-hidden="true"></i>
                <span class="nav-text">
                    Order
                </span>
                <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
                </a>
                <ul>
                    <li>
                    <a class="subnav-text" href="{{ Url('/orders') }}">
                    Menage Orders
                    </a>
                    </li>
                    <li>
                </ul>
            </li>

            <li class="has-subnav">
                <a href="{{ asset('backend') }}/javascript:;">
                <i class="fa fa-check-square-o nav_icon"></i>
                <span class="nav-text">
                Forms
                </span>
                <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
                </a>
                <ul>
                    <li>
                        <a class="subnav-text" href="{{ asset('backend') }}/inputs.html">Inputs</a>
                    </li>
                    <li>
                        <a class="subnav-text" href="{{ asset('backend') }}/validation.html">Form Validation</a>
                    </li>
                </ul>
            </li>
            <li class="has-subnav">
                <a href="{{ asset('backend') }}/javascript:;">
                    <i class="fa fa-file-text-o nav_icon"></i>
                        <span class="nav-text">Pages</span>
                    <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
                </a>
                <ul>
                    <li>
                        <a class="subnav-text" href="{{ asset('backend') }}/gallery.html">
                            Image Gallery
                        </a>
                    </li>
                    <li>
                        <a class="subnav-text" href="{{ asset('backend') }}/calendar.html">
                            Calendar
                        </a>
                    </li>
                    <li>
                        <a class="subnav-text" href="{{ asset('backend') }}/signup.html">
                            Sign Up Page
                        </a>
                    </li>
                    <li>
                        <a class="subnav-text" href="{{ asset('backend') }}/login.html">
                            Login Page
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ asset('backend') }}/charts.html">
                    <i class="fa fa-bar-chart nav_icon"></i>
                    <span class="nav-text">
                        Charts
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ asset('backend') }}/typography.html">
                    <i class="icon-font nav-icon"></i>
                    <span class="nav-text">
                    Typography
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ asset('backend') }}/tables.html">
                    <i class="icon-table nav-icon"></i>
                    <span class="nav-text">
                    Tables
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ asset('backend') }}/maps.html">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span class="nav-text">
                    Maps
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ asset('backend') }}/error.html">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    <span class="nav-text">
                    Error Page
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="{{ asset('backend') }}/javascript:;">
                    <i class="fa fa-list-ul" aria-hidden="true"></i>
                    <span class="nav-text">Extras</span>
                    <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
                </a>
                <ul>
                    <li>
                        <a class="subnav-text" href="{{ asset('backend') }}/faq.html">FAQ</a>
                    </li>
                    <li>
                        <a class="subnav-text" href="{{ asset('backend') }}/blank.html">Blank Page</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="logout">
            <li>
            <a href="{{ route('logout') }}"
           onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
            <i class="icon-off nav-icon"></i>
            <span class="nav-text">
            Logout
            </span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </li>
        </ul>
    </nav>
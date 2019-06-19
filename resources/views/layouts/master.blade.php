
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>The Leadership Portal</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/layout_1/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/layout_1/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/layout_1/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/layout_1/css/layout.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/layout_1/css/components.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/layout_1/css/colors.min.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon" />

    @yield('styles')

    <!-- Core JS files -->
    <script src="{{ asset('js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('js/main/bootstrap.bundle.min.js') }}"></script>
    
    <script src="{{ asset('js/plugins/loaders/blockui.min.js') }}"></script>
    <script src="{{ asset('js/plugins/ui/ripple.min.js') }}"></script>
    
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('js/plugins/visualization/d3/d3.min.js') }}"></script>
    <script src="{{ asset('js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
    <script src="{{ asset('js/plugins/forms/styling/switchery.min.js') }}"></script>
    <script src="{{ asset('js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
    <script src="{{ asset('js/plugins/ui/moment/moment.min.js') }}"></script>
    <script src="{{ asset('js/plugins/pickers/daterangepicker.js') }}"></script>

    <script src="{{ asset('assets/layout_1/js/app.js') }}"></script>
    <script src="{{ asset('js/demo_pages/dashboard.js') }}"></script>
    <!-- /theme JS files -->

    @yield('scripts')

</head>

<body>

    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-dark bg-indigo navbar-static">
        <div class="navbar-brand" style="height:4rem">
            <a href="{{ route('home') }}" class="d-inline-block">
                <table>
                    <tr>
                        <td><img src="{{ asset('images/header-icon.png') }}" style="height:2.5rem" /></td>
                        <td style="font-size:22px; color:white;">The Leadership Portal</td>
                    </tr>
                </table>
            </a>
        </div>

        <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-tree5"></i>
            </button>
            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                <i class="icon-paragraph-justify3"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ml-md-auto">
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="navbar-nav-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="icon-switch2"></i>
                        <span class="d-md-none ml-2">Logout</span>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-light sidebar-main sidebar-expand-md">

            <!-- Sidebar mobile toggler -->
            <div class="sidebar-mobile-toggler text-center">
                <a href="#" class="sidebar-mobile-main-toggle">
                    <i class="icon-arrow-left8"></i>
                </a>
                <span class="font-weight-semibold">Navigation</span>
                <a href="#" class="sidebar-mobile-expand">
                    <i class="icon-screen-full"></i>
                    <i class="icon-screen-normal"></i>
                </a>
            </div>
            <!-- /sidebar mobile toggler -->


            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user-material">
                    <div class="sidebar-user-material-body">
                        <div class="card-body text-center">
                            <a href="{{route('profile.index') }}">
                                @if ( !empty(auth()->user()->profile->image_main) )
                                    <img src="{{ asset('storage/images/profile/'.auth()->user()->profile->image_main) }}" class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80" alt="">
                               @else
                                    <img src="{{ asset('images/placeholders/placeholder.jpg') }}" class="rounded-circle mr-2" height="34" alt="">
                                @endif
                            </a>
                            <h6 class="mb-0 text-white text-shadow-dark">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</h6>
                            @php $profile = auth()->user()->profile;
                                
                            @endphp
                            <span class="font-size-sm text-white text-shadow-dark">@if($profile and (!empty($profile->city) or !empty($profile->country) ) ) {{ $profile->city }}, {{ $profile->country }} @else 
                            <a href="{{ route('profile.index') }}">Enter your City</a> @endif</span>
                        </div>

                        <div class="sidebar-user-material-footer">
                            <a href="#user-nav" class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle" data-toggle="collapse"><span>My account</span></a>
                        </div>
                    </div>

                    <div class="collapse" id="user-nav">
                        <ul class="nav nav-sidebar">
                            <li class="nav-item">
                                <a href="{{route('profile.index') }}" class="nav-link">
                                    <i class="icon-user-plus"></i>
                                    <span>My profile</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="icon-switch2"></i>
                                    <span>Logout</span>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /user menu -->


                <!-- Main navigation -->
                <div class="card card-sidebar-mobile">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">

                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link {{ \Request::is('home') ? 'active':'' }}">
                                <i class="icon-home4"></i>
                                <span>
                                    Dashboard
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('report') }}" class="nav-link {{ \Request::is('report') ? 'active':'' }}">
                                <i class="icon-home4"></i>
                                <span>
                                    Report
                                </span>
                            </a>
                        </li>
                        @if ( auth()->user()->user_type == 'super-admin' OR auth()->user()->user_type == 'admin'  )
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link  {{ \Request::is('users') ? 'active':'' }}">
                                <i class="icon-users"></i>
                                <span>
                                    Users
                                </span>
                            </a>
                        </li>
                        @endif
                        <!-- /main -->
                    </ul>
                </div>
                <!-- /main navigation -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">


            @yield('content')

            <!-- Footer -->
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                        <i class="icon-unfold mr-2"></i>
                        Footer
                    </button>
                </div>

                <div class="navbar-collapse collapse" id="navbar-footer">
                    <span class="navbar-text">
                        &copy; 2010-2019. <a href="#">The Leadership Portal</a>&reg; by <a href="#">Dr. Richard M. Pfohl</a>
                    </span>

                    <span class="navbar-nav ml-lg-auto">Developed by &nbsp;  <a href="http://www.volxom.com" target="_blank"> Volxom Pvt Ltd</a></span>
                </div>
            </div>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>

</html>


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
    <link href="{{ asset('assets/layout_1/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/layout_1/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/layout_1/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/layout_1/css/layout.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/layout_1/css/components.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/layout_1/css/colors.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/icons/material/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/icons/fontawesome/styles.min.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon" />
    <style>
        .nav-link.active {
            color: #fff;
            background-color: #3F51B5 !important;
        }
    </style>

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
    <script src="https://www.gstatic.com/charts/loader.js"></script>
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

            <span class="navbar-text ml-md-3">
                <span class="badge badge-mark border-orange-300 mr-2"></span>
                @php
                    /* This sets the $time variable to the current hour in the 24 hour clock format */
                    $time = date("H");
                    /* Set the $timezone variable to become the current timezone */
                    $timezone = date("e");
                    /* If the time is less than 1200 hours, show good morning */
                    if ($time < "12") {
                        echo "Morning";
                    } else
                    /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
                    if ($time >= "12" && $time < "17") {
                        echo "Afternoon";
                    } else
                    /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
                    if ($time >= "17" && $time < "19") {
                        echo "Evening";
                    } else
                    /* Finally, show good night if the time is greater than or equal to 1900 hours */
                    if ($time >= "19") {
                        echo "Night";
                    }
                @endphp
                , {{ auth()->user()->profile->first_name }}!
            </span>

            <ul class="navbar-nav ml-md-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-make-group mr-2"></i>
                        Connect
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                        <div class="dropdown-content-body p-2">
                            <div class="row no-gutters">
                                <div class="col-12 col-sm-4">
                                    <a href="https://www.lead360.us" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class=""><img src="{{ asset('images/header-icon.png') }}" class="img-fluid" style="height:32px;"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Lead360</div>
                                    </a>

                                    <a href="http://www.pqi360.com/" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class=""><img src="{{ asset('images/report/pqi360/logo-PQI.png') }}" class="img-fluid" style="height:32px;"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">PQ-i</div>
                                    </a>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <a href="https://www.facebook.com/leaderpeaks" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-facebook text-blue-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Facebook</div>
                                    </a>
                                    
                                    <a href="https://twitter.com/leaderportal360" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-twitter text-info-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Twitter</div>
                                    </a>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <a href="https://www.linkedin.com/company/leaderpeaks" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-linkedin text-blue icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Linkedin</div>
                                    </a>
                                    
                                    <a href="https://www.youtube.com/channel/UCS_Yv3_W8XEmpCSTBgjH5vg" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-youtube text-danger icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Youtube</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-pulse2 mr-2"></i>
                        Activity
                    </a>
                    @php
                        $tweets = Twitter::getUserTimeline(['screen_name' => 'leaderportal360', 'count' => 5, 'format' => 'array']);
                    @endphp
                    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                        <div class="dropdown-content-header">
                            <span class="font-size-sm line-height-sm text-uppercase font-weight-semibold">Latest activity</span>
                            <a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
                        </div>

                        <div class="dropdown-content-body dropdown-scrollable">
                            <ul class="media-list">
                                @if(count($tweets) >0 )
                                    @foreach($tweets as $t)
                                        <li class="media">
                                            <div class="mr-3">
                                                <a href="https://twitter.com/{{ $t['user']['name'] }}/status/{{ $t['id'] }}" class="btn bg-primary-400 rounded-round btn-icon"><i class="icon-twitter"></i></a>
                                            </div>
                                            <div class="media-body">
                                                <a href="https://twitter.com/{{ $t['user']['name'] }}/status/{{ $t['id'] }}"> {{ $t['text'] }} </a>
                                                <div class="font-size-sm text-muted mt-1"> {{ Carbon\Carbon::parse($t['user']['created_at'])->diffForHumans() }}</div>
                                            </div>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>

                        <div class="dropdown-content-footer bg-light">
                            
                            
                        </div>
                    </div>
                </li>
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
                        @if ( auth()->user()->user_type == 'super-admin' OR auth()->user()->user_type == 'admin'  )
                            <!-- Admin -->
                            <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Admin</div> <i class="icon-menu" title="Forms"></i></li>
    
                            <li class="nav-item nav-item-submenu">
                                <a href="{{ route('users.index') }}" class="nav-link"><i class="fa fa-users-cog"></i> <span>Manage Users</span></a>
                                
                            </li>
    
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link"><i class="icon-equalizer"></i> <span>Report Options</span></a>
                                <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                                    <!-- <li class="nav-item"><a href="index.html" class="nav-link active"></a></li> -->
                                </ul>
                            </li>
    
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link"><i class="icon-file-text2"></i> <span>Questions (Self)</span></a>
                                <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                                    <!-- <li class="nav-item"><a href="index.html" class="nav-link active"></a></li> -->
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link"><i class="icon-file-spreadsheet "></i> <span>Quesitons (360)</span></a>
                                <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                                    <!-- <li class="nav-item"><a href="index.html" class="nav-link active"></a></li> -->
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link"><i class="icon-earth"></i> <span>Demographics</span></a>
                                <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                                    <!-- <li class="nav-item"><a href="index.html" class="nav-link active"></a></li> -->
                                </ul>
                            </li>
    
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link"><i class="icon-magazine"></i> <span>Reports</span></a>
                                <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                                    <!-- <li class="nav-item"><a href="index.html" class="nav-link active"></a></li> -->
                                </ul>
                            </li>
                        @else
                        <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Home</div> <i class="icon-menu" title="Forms"></i></li>
                        <li class="nav-item nav-item-submenu">
                            <a href="{{ route('home') }}" class="nav-link {{ \Request::is('home') ? 'active':'' }}"><i class="mi-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="{{route('profile.index') }}" class="nav-link"><i class="icon-profile"></i> <span>Profile</span></a>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="fa fa-users"></i> <span>Raters</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                                <!-- <li class="nav-item"><a href="index.html" class="nav-link active"></a></li> -->
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-stats-bars"></i> <span>Results</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                                <li class="nav-item"><a href="{{ route('self.report') }}" class="nav-link">PQ-i Self</a></li>
                                <li class="nav-item"><a href="{{ route('users.report') }}" class="nav-link">PQ-i 360</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-clipboard3"></i> <span>Action Plan</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                                <!-- <li class="nav-item"><a href="index.html" class="nav-link active"></a></li> -->
                            </ul>
                        </li>
                        <!-- /main -->
                        @endif
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


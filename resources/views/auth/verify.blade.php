<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>The Leadership Portal</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/layout_1/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/layout_1/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/layout_1/css/layout.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/layout_1/css/components.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/layout_1/css/colors.min.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon" />

    <!-- Core JS files -->
    <script src="{{ asset('js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('js/main/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('js/plugins/forms/validation/validate.min.js') }}"></script>
    <script src="{{ asset('js/plugins/forms/styling/uniform.min.js') }}"></script>

    <script src="{{ asset('assets/layout_1/js/app.js') }}"></script>
    <script src="{{ asset('js/demo_pages/login_validation.js') }}"></script>
    <!-- /theme JS files -->

</head>

<body>

   <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-dark bg-indigo navbar-static">
        <div class="navbar-brand" style="height:4rem">
            <a href="{{ route('home') }}" class="d-inline-block">
                <table>
                    <tr>
                        <td><img src="{{ asset('images/header-icon.png') }}" style="height:2.5rem" /></td>
                        <td style="font-size:16px; color:white;">The Leadership Portal</td>
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

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">

                <!-- Login form -->
                    <form class="login-form form-validate" action="{{ route('login') }}">
                        @csrf
                        <div class="text-center mb-3">
                            <img src="{{ asset('images/Logo.png') }}" alt="Leadership Portal" >
                        </div>
                        <div class="mb-0">
                            @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                            @endif

                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }}, <br>
                            <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                        </div>
                    </form>
                <!-- /Login form -->

            </div>
            <!-- /content area -->


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

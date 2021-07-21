<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{asset('admin/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet" />
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('admin/css/font.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('admin/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/css/morris.css')}}" type="text/css" />
    <!-- calendar -->
    <link rel="stylesheet" href="{{asset('admin/css/monthly.css')}}">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{asset('admin/js/jquery2.0.3.min.js')}}"></script>
    <script src="{{asset('admin/js/raphael-min.js')}}"></script>
    <script src="{{asset('admin/js/morris.js')}}"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://www.paypal.com/sdk/js?client-id=AW9xvUOG_ePygdNgFXyvc7rKnz23rPY9nRK6uRXmVjAjj0xmJWnsP29i1fvPJYUyA3Kly4wOlBACdqoB">
        // Replace YOUR_CLIENT_ID with your sandbox client ID
    </script>
    @stack('scripts')
</head>

<body>
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">
                <a href="/dashboard" class="logo">
                    {{ trans('messages.app_layout.logo') }}
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="fa fa-bell-o"></i>
                            <span class="badge bg-warning">3</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <li>
                                <p> {{ trans('messages.app_layout.notification') }}</p>
                            </li>
                            <li>
                                <div class="alert alert-info clearfix">
                                    <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                    <div class="noti-info">
                                        <a href="#"> </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="alert alert-danger clearfix">
                                    <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                    <div class="noti-info">
                                        <a href="#"> </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="alert alert-success clearfix">
                                    <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                    <div class="noti-info">
                                        <a href="#"> trans('messages.app_layout.request_wait', [ 'request' => '30',
                                            ]);</a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </li>
                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav clearfix">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder=" Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="{{asset('admin/images/2.png')}}">
                            <span class="username">{{Session::get('user_name')}}</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="#"><i class=" fa fa-suitcase"></i>{{ trans('messages.app_layout.profile') }}</a>
                            </li>
                            <li><a href="#"><i class="fa fa-cog"></i>
                                    {{ trans('messages.app_layout.setting') }}</a></li>
                            <li><a href="login.html"><i class="fa fa-key"></i>
                                    {{ trans('messages.app_layout.logout') }}</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->

                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            @include('admin.layouts.sidebar')
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                @yield('content')
            </section>
            <!-- footer -->
            <div class="footer">
                <div class="wthree-copyright">
                    <p> {{ trans('messages.app_layout.design') }}</a></p>
                </div>
            </div>
            <!-- / footer -->
        </section>
        <!--main content end-->
    </section>
    <script src="{{asset('admin/js/bootstrap.js')}}"></script>
    <script src="{{asset('admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('admin/js/scripts.js')}}"></script>
    <script src="{{asset('admin/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('admin/js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('admin/js/jquery.scrollTo.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/js/monthly.js')}}"></script>

</body>

</html>

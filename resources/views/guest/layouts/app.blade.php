<!DOCTYPE HTML>
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('user/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('user/css/responsiveslides.css')}}">
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('user/js/responsiveslides.min.js')}}"></script>
    <script src="{{asset('user/js/slide.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.js')}}"></script>
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">

    @stack('scripts')
</head>

<body>
    <!---start-wrap---->
    <div class="header">
        <div class="wrap">
            <!---start-header---->
            <!---start-logo---->
            <div class="logo">
                <a href="index.html"><img src="{{asset('user/images/logo.png')}}" title="logo" /></a>
            </div>
            <!---End-logo---->
            <!---start-top-nav---->
            <div class="top-search-social-nav">
                <ul>
                    <li class="active"><a href="#"><img src="{{asset('user/images/facebook.png')}}"
                                title="Facebook" /></a>
                    </li>
                    <li><a href="#"><img src="{{asset('user/images/twitter.png')}}" title="Twitter" /></a></li>
                    <li><a href="#"><img src="{{asset('user/images/gpluse.png')}}" title="Googlepluse" /></a></li>
                    <li><a href="#"><img src="{{asset('user/images/rss.png')}}" title="System" /></a></li>
                    <div class="clear"> </div>
                </ul>
                <div class="clear"> </div>

            </div>
            <div class="clear"> </div>
            <!---End-top-nav---->
        </div>
        <div class="clear"> </div>
        <div class="top-nav clearfix" style="width: 30%;">
            <!--search & user info start-->

            <!--search & user info end-->
        </div>
        <!---End-header---->
    </div>
    <div class="top-nav">
        <div class="wrap">
            <ul>
                <li class="active1"><a href="index.html">{{ trans('messages.landing_page.home') }}</a></li>
                <li><a href="about.html">{{ trans('messages.landing_page.about') }}</a></li>
                <li><a href="services.html">{{ trans('messages.landing_page.review') }}</a></li>
                <li><a href="gallery.html">{{ trans('messages.landing_page.gallery') }}</a></li>
                <li><a href="/dashboard">{{ trans('messages.landing_page.admin') }}</a></li>
                <div class="clear"> </div>
            </ul>
        </div>
    </div>
    <section id="main-content">
        <section class="wrapper">
            @yield('content')
        </section>
    </section>
    <div class="footer">
        <div class="wrap">
            <div class="footer-grid">
                <h3>{{ trans('messages.landing_page.about_us') }}</h3>
                <p>{{ trans('messages.landing_page.content_about_us') }}</p>
                <a href="#">{{ trans('messages.landing_page.readmore') }}</a>
            </div>
            <div class="footer-grid center-grid">
                <h3>{{ trans('messages.landing_page.recent_post') }}</h3>
                <ul>
                    <li><a href="#">{{ trans('messages.landing_page.content_recent_post') }}</a></li>
                    <li><a href="#">{{ trans('messages.landing_page.content_recent_post') }}</a></li>
                    <li><a href="#">{{ trans('messages.landing_page.content_    recent_post') }}</a></li>
                    <li><a href="#">{{ trans('messages.landing_page.content_recent_post') }}</a></li>
                </ul>
            </div>
            <div class="footer-grid twitts">
                <h3>{{ trans('messages.landing_page.latest_week') }}</h3>
                <p><label>{{ trans('messages.landing_page.label') }}</label>{{ trans('messages.landing_page.content_latest_week') }}
                </p>
                <span>{{ trans('messages.landing_page.time') }}</span>
            </div>
            <div class="footer-grid twitts">
                <h3>{{ trans('messages.landing_page.latest_week') }}</h3>
                <p><label>{{ trans('messages.landing_page.label') }}</label>{{ trans('messages.landing_page.content_latest_week') }}
                </p>
                <span>{{ trans('messages.landing_page.time') }}</span>
            </div>
            <div class="clear"> </div>
        </div>
        <div class="clear"> </div>
    </div>
    <div class="clear"> </div>
    <div class="copy-right">
    </div>
</body>

</html>

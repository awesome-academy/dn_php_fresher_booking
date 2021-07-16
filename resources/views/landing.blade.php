<!DOCTYPE HTML>
<html>

<head>
    <link href="{{asset('user/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('user/css/responsiveslides.css')}}">
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('user/js/responsiveslides.min.js')}}"></script>
    <script src="{{asset('user/js/slide.js')}}"></script>
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
    <!--start-image-slider---->
    <div class="image-slider">
        <!-- Slideshow 1 -->
        <ul class="rslides" id="slider1">
            <li><img src="{{asset('user/images/slider1.jpg')}}" alt=""></li>
            <li><img src="{{asset('user/images/slider2.jpg')}}" alt=""></li>
            <li><img src="{{asset('user/images/slider1.jpg')}}" alt=""></li>
        </ul>
        <!-- Slideshow 2 -->
    </div>
    <!--End-image-slider---->
    <div class="content">
        <div class="wrap">
            <div class="grids">
                <h4>{{ trans('messages.landing_page.what_we_do') }}</h4>
                <h5> </h5>
                <div class="clear"> </div>
                <div class="section group">
                    <div class="col_1_of_4 span_1_of_4 active-grid">
                        <h3><img src="{{asset('user/images/g1.png')}}"
                                title="support" />{{ trans('messages.landing_page.trip') }}</h3>
                        <p>{{ trans('messages.landing_page.content_latest_week') }}</p>
                    </div>
                    <div class="col_1_of_4 span_1_of_4">
                        <h3><img src="{{asset('user/images/g2.png')}}"
                                title="Destinations" />{{ trans('messages.landing_page.destination') }}</h3>
                        <p>{{ trans('messages.landing_page.content_latest_week') }}</p>
                    </div>
                    <div class="col_1_of_4 span_1_of_4">
                        <h3><img src="{{asset('user/images/g3.png')}}"
                                title="Events" />{{ trans('messages.landing_page.news') }}</h3>
                        <p>{{ trans('messages.landing_page.content_latest_week') }}</p>
                    </div>
                    <div class="col_1_of_4 span_1_of_4">
                        <h3><img src="{{asset('user/images/g4.png')}}"
                                title="Plans" />{{ trans('messages.landing_page.plan') }}</h3>
                        <p>{{ trans('messages.landing_page.content_latest_week') }}</p>
                    </div>
                </div>
            </div>
            <div class="clear"> </div>
            <div class="big-button">
                <p>{{ trans('messages.landing_page.solugan') }}</p><a
                    href="#">{{ trans('messages.landing_page.book') }}</a>

                <div class="clear"> </div>
            </div>
            <div class="clear"> </div>
            <div class="recent-places">
                <h4>{{ trans('messages.landing_page.recent_place') }}</h4>
                <h5> </h5>
                <div class="clear"> </div>
                <div class="holder smooth">
                    <img src="{{asset('user/images/p1.jpg')}}" alt="Web Tutorial Plus - Demo">
                    <div class="go-top">
                        <h3>{{ trans('messages.landing_page.image_description') }}</h3>
                        <p>
                            {{ trans('messages.landing_page.content') }}
                        </p>
                        <a href="#">{{ trans('messages.landing_page.readmore') }}</a>
                    </div>
                </div>
                <div class="holder smooth">
                    <img src="{{asset('user/images/p2.jpg')}}" alt="Web Tutorial Plus - Demo">
                    <div class="go-top">
                        <h3>{{ trans('messages.landing_page.image_description') }}</h3>
                        <p>
                            {{ trans('messages.landing_page.content') }}
                        </p>
                        <a href="#">{{ trans('messages.landing_page.readmore') }}</a>
                    </div>
                </div>
                <div class="holder smooth">
                    <img src="{{asset('user/images/p3.jpg')}}" alt="Web Tutorial Plus - Demo">
                    <div class="go-top">
                        <h3>{{ trans('messages.landing_page.image_description') }}</h3>
                        <p>
                            {{ trans('messages.landing_page.content') }}
                        </p>
                        <a href="#">{{ trans('messages.landing_page.readmore') }}</a>
                    </div>
                </div>
                <div class="holder smooth last-grid">
                    <img src="{{asset('user/images/p4.jpg')}}" alt="Web Tutorial Plus - Demo">
                    <div class="go-top">
                        <h3>{{ trans('messages.landing_page.image_description') }}</h3>
                        <p>
                            {{ trans('messages.landing_page.content') }}
                        </p>
                        <a href="#">{{ trans('messages.landing_page.readmore') }}</a>
                    </div>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
    </div>
    <div class="clear"> </div>
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

<div id="sidebar" class="nav-collapse">
    <!-- sidebar menu start-->
    <div class="leftside-navigation">
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="active" href="index.html">
                    <i class="fa fa-dashboard"></i>
                    <span>{{ trans('messages.app_layout.dashboard') }}</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-book"></i>
                    <span>Tour</span>
                </a>
                <ul class="sub">
                    <li><a href="typography.html">{{ trans('messages.app_layout.request') }}</a></li>
                    <li><a href="glyphicon.html">{{ trans('messages.app_layout.category') }}</a></li>
                    <li><a href="glyphicon.html">{{ trans('messages.app_layout.all') }}</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-user"></i>
                    <span>{{ trans('messages.app_layout.user') }}</span>
                </a>
                <ul class="sub">
                    <li><a href="typography.html">{{ trans('messages.app_layout.review') }}</a></li>
                    <li><a href="glyphicon.html">{{ trans('messages.app_layout.all') }}</a></li>
                </ul>
            </li>
            <li>
                <a class="active" href="index.html">
                    <i class="fa fa-money"></i>
                    <span>{{ trans('messages.app_layout.revenue') }}</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- sidebar menu end-->
</div>

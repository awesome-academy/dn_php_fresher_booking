@extends('guest.layouts.app')

@section('content')
<div class="services">
    <h4>{{ trans('messages.guest_tour_page.title') }}</h4>
    <h5> </h5>
    <div class="clear"> </div>
    @foreach($tours as $tour)

    <div class="section group">
        <div class="gallery-grids">
            <div class="gallery-grid">
                <div class="listview_1_of_2 images_1_of_2">
                    <div class="listimg listimg_2_of_1">
                        <img src="{{asset('user/images/s2.jpg')}}">
                    </div>
                    <div class="text list_2_of_1">
                        <h3>{{$tour['name']}}</h3>
                        <p>{{$tour['description']}}</p>
                        <div class="button" style="cursor: pointer;">
                            <span><a>{{ trans('messages.guest_tour_page.booking') }}</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
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
@endsection

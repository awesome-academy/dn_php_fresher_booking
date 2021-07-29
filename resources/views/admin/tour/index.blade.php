@extends('admin.layouts.app')

@section('content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            {{trans('messages.admin_all_tour_page.table') }}
        </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th data-breakpoints="xs">{{trans('messages.admin_all_tour_page.index') }}</th>
                        <th>{{trans('messages.admin_all_tour_page.category_name') }}</th>
                        <th>{{trans('messages.admin_all_tour_page.name') }}</th>
                        <th>{{trans('messages.admin_all_tour_page.description') }}</th>
                        <th>{{trans('messages.admin_all_tour_page.money') }}</th>
                        <th>{{trans('messages.admin_all_tour_page.bookings') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($tours)>0)
                    @foreach($tours as $tour)
                    <tr data-expanded="true">
                        <td>{{ $loop->index +1 }}</td>
                        <td>{{$tour['category'][0]['name']}}</td>
                        <td>{{$tour['name']}}</td>
                        <td>{{$tour['description']}}</td>
                        <td>{{$tour['money']}}</td>
                        <td>{{$tour['bookings']}}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

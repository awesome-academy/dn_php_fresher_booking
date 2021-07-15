@extends('admin.layouts.app')

@section('content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            MANAGE USER
        </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th data-breakpoints="xs">ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th data-breakpoints="xs">Phone</th>
                        <th data-breakpoints="xs">Total_Bookings</th>
                        <th data-breakpoints="xs">Role</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr data-expanded="true">
                        <td>{{ $loop->index +1}}</td>
                        <td>{{$user['name']}}</td>
                        <td>{{$user['email']}}</td>
                        <td>{{$user['phone ']}}</td>
                        <td>{{$user['bookings']}}</td>
                        <td>{{$user['is_admin'] === 1 ? 'Admin' : 'User'}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="{{asset('admin/js/user/index.js')}}"></script>
@endpush

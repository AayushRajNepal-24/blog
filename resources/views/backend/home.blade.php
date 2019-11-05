@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <li><a href="{{ route('register') }}">Register new admin</a></li>
                    <li><a href="{{ url('adminpanel/addpost') }}">Add new post</a></li>
                    <li><a href="{{ url('adminpanel/addimage') }}">Add image to gallery </a></li>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('frontend.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-3 col-md-offset-1">
            <img src="{{ url('images/'.$post->image)}}" style=" width:350px; height: 500px">
        </div>
        <div class="col-md-6 col-md-offset-1">
            <h1> {{ $post->name }}</h1>
            <h4> {{ $post->short_description }}</h4>
            <br />
            <h4> <i class="fa fa-pencil" aria-hidden="true"></i>  Writer: {{ $post->writer }}</h4>
            <h4> <i class="fa fa-graduation-cap" aria-hidden="true"></i>  views{{ $post->views }}</h4>
            <h4> <i class="fa fa-newspaper-o" aria-hidden="true"></i>  Published-Date: {{ $post->date}}</h4>
            <h4> <i class="fa fa-level-up" aria-hidden="true"></i> Description: {{ $post->description }}</h4>
            <a href="{{ url('/adminpanel/addpost')}}" class="btn btn-default">Add New Post</a>
            <a href="{{ url('/adminpanel')}}" class="btn btn-default">Done</a>
        </div>
    </div>
@endsection

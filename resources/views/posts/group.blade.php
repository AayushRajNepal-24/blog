@extends('layouts.app')
@section('content')
<div class="container-fluid clearfix">
	@foreach($posts as $post)
	<a href="{{url('posts/'.$post->id)}}"> 
	<div class="col-md-3 col-sm-4 col-xs-6">
		<div class="panel panel-success post">
			<div class="panel-body text-center">
				<img class="post-panel-image" src="{{asset('images/'.$post->image)}}" style="height: 200px; width: 150px">
				<h3> {{ $post->title }}</h3>
				<h4> {{ $post->writer}}</h4>
				<h5> <strong>Rs. {{$post->price}}</strong></h5>
				<div class="row">
					<a class="btn btn-default" href="{{url('posts/'.$post->id)}}">View This post</a>
					<a class="btn btn-success" href="{{url('posts/buy/'.$post->id)}}">Buy This post</a>
				</div>
			</div>
		</div>
	</div>
	</a>
	@endforeach
	<div class="panel-footer">
		<div class="text-center">
			{{ $posts->appends(request()->input())->links() }}
		</div>
	</div>

</div>
@endsection

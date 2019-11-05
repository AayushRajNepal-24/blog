@extends('frontend.layouts.app')
@section('content')
@php
	$data = Session::get('carts');
	if(!$data){
		$data = [];
	}

@endphp
<div class="container-fluid clearfix">
	
	@foreach($posts as $post)
	@if($post->available)
	<a href="{{url('posts/'.$post->id)}}"> 
	<div class="col-md-4 col-sm-4 col-xs-6">
		<div class="panel panel-success post" style="overflow:auto">
			<div class="panel-body text-center">
				<img class="post-panel-image" src="{{asset('images/'.$post->image)}}" style="height: 300px; width: 225px">
				<h3 style="height:50px"> {{ $post->name }}</h3>
				<h4 style="white-space:nowrap; overflow:auto"> {{ $post->writer}}</h4>
				<h5> Level: {{ $post->level }}</h5>
			 	@if ($post->discount == 0)
				 <h5><strong>Rs. {{$post->price}}</strong></h5>
				@else
				<h5><strong><strike>Rs. {{$post->price}}</strike></strong><strong>Rs. {{$post->price * (1 - ($post->discount)/100)}}</strong></h5>
				@endif
				<div class="row">
					<a class="btn btn-default" href="{{url('posts/'.$post->id)}}">View This post</a>
				@if(Auth::guest())
				<a class="btn btn-success" id="{{$post->id}}" href="{{ url('/login') }}">Add To Cart</a>	
				@else
				
					
					
				<a class="btn btn-danger" id="{{$post->id}}remove" style="display:{{(($key = in_array($post->id, $data)) == true) ? '':'none'}}" onclick="removeFromCart({{$post->id}})">Remove From Cart</a>
				<a class="btn btn-success" id="{{$post->id}}" style="display:{{(($key = in_array($post->id, $data)) == false) ? '':'none'}}" onclick="addToCart({{$post->id}})">Add To Cart</a>	
				@endif	
				</div>
			</div>
		</div>
	</div>
	</a>
	@endif
	@endforeach

	@if($data)
	<a href="{{url('/cart')}}" class="float"><span class="fa-stack fa-2x has-badge my-float" id="cartCountFloat" data-count="{{count(Session::get('carts'))}}">
		<i class="fa fa-circle fa-stack-2x fa-inverse"></i>
		<i style="" class="fa fa-shopping-cart fa-stack-1x red-cart"></i>
		</span>
	</a>
	@else
	<a href="{{url('/cart')}}" class="float"><span class="fa-stack fa-2x has-badge my-float" id="cartCountFloat" data-count="0">
		<i class="fa fa-circle fa-stack-2x fa-inverse"></i>
		<i style="" class="fa fa-shopping-cart fa-stack-1x red-cart"></i>
		</span>
	</a>
	@endif
	

	<div class="panel-footer" style="padding-bottom: 100px">
		<div class="text-center">
			{{ $posts->appends(request()->input())->links() }}
		</div>
	</div>

</div>
@endsection

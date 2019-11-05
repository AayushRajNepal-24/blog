@extends('frontend.layouts.blog')
@section('content')
<section id="gallery">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mb-4">
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-md-8">
								<h4 class="card-title">{{ $post->name }}</h4>
								<h5>{{$post->short_description}}</h5>
							</div>
							<div class="col-md-4">
								<h6> <i class="fa fa-pencil" aria-hidden="true"></i>  Writer: {{ $post->writer }}</h6>
								<h6> <i class="fa fa-eye" aria-hidden="true"></i>  views{{ $post->views }}</h6>
								<h6> <i class="fa fa-newspaper-o" aria-hidden="true"></i>  Published-Date: {{ $post->date}}</h6>
							</div>
						</div>
					</div>
					<img src="{{ url('images/'.$post->image)}}" alt="" class="card-img-top">
					<div class="card-body">

						<p class="card-text">{{ $post->description }}</p>
						<a href="#" class="btn btn-outline-danger btn-sm"><i class="fa fa-heart"></i></a>
						<a href="{{url(config("app.blog_home"))}}" class="btn btn-outline-primary btn-sm"><i class="fa fa-backward"></i></a>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

@endsection

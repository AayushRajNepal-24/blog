@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
		@include('admin.sidebar')
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Book</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{ url('books/'.$book->id) }}">
                        {{ csrf_field() }}
						<div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$book->name}}" required autofocus>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="writer" class="col-md-4 control-label">Writer</label>

                            <div class="col-md-6">
                                <input id="writer" type="text" class="form-control" name="writer" value="{{$book->writer}}" required autofocus>
                            </div>
                        </div>

						<div class="form-group">
							<label for="price" class="col-md-4 control-label">Price</label>

							<div class="col-md-6">
								<input id="price" type="number" class="form-control" name="price" value="{{$book->price}}" required autofocus>
							</div>
						</div>

						<div class="form-group">
							<label for="edition" class="col-md-4 control-label">Edition</label>

							<div class="col-md-6">
								<input id="edition" type="text" class="form-control" name="edition" value="{{$book->edition}}" required autofocus>
							</div>
						</div>
						<div class="form-group">
							<label for="bookImage" class="col-md-4 control-label">Image</label>

							<div class="col-md-6">
								<input id="bookImage" type="file" class="form-control" name="bookImage" autofocus>
							</div>
						</div>
						<div class="form-group">
							<label for="level" class="col-md-4 control-label">Level</label>

							<div class="col-md-6">
								<input id="level" type="text" class="form-control" name="level" value="{{$book->level}}" required autofocus>
							</div>
						</div>

						<div class="form-group">
							<label for="short_description" class="col-md-4 control-label">Short Description</label>

							<div class="col-md-6">
								<input id="short_description" type="text" class="form-control" name="short_description" value="{{$book->short_description}}" required autofocus>
							</div>
						</div>

						<div class="form-group">
							<label for="description" class="col-md-4 control-label">Description</label>

							<div class="col-md-6">
								<input id="description" type="text" class="form-control" name="description"  value="{{$book->description}}" required autofocus>
							</div>
						</div>

						<div class="form-group">
							<label for="publication" class="col-md-4 control-label">Publication</label>

							<div class="col-md-6">
								<input id="publication" type="text" class="form-control" name="publication" value="{{$book->publication}}" required autofocus>
							</div>
						</div>


						<div class="form-group">
							<label for="views" class="col-md-4 control-label">No. of Views</label>

							<div class="col-md-6">
								<input id="publication" type="number" class="form-control" name="views" value="{{$book->views}}" required autofocus>
							</div>
						</div>

						<div class="form-group">
							<label for="purchases" class="col-md-4 control-label">Purchases</label>

							<div class="col-md-6">
								<input id="purchases" type="text" class="form-control" name="purchases" value="{{$book->purchases}}" required autofocus>
							</div>
						</div>

						<div class="form-group">
								<label for="dicount" class="col-md-4 control-label">Discount</label>
	
								<div class="col-md-6">
								<input id="discount" type="text" class="form-control" name="discount" value="{{$book->discount}}" required autofocus>
								</div>
							</div>
							<div class="form-group">
									<label for="stock" class="col-md-4 control-label">Stock</label>
		
									<div class="col-md-6">
										
										<label>Remaining</label><input id="stock" name="stock" class="form-control" type="radio" value="1"  required autofocus><br>
										<label>Out Of Stock</label><input id="stock "name="stock" class="form-control" type="radio" value="0" required autofocus>
									</div>
								</div>
							


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add Book
                                </button>

                                <a class="btn btn-link" href="{{ url('/books') }}">
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

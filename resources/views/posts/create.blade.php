@extends('backend.layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add post</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('adminpanel/addpost') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">title</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" title required autofocus>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="writer" class="col-md-4 control-label" >Publisher</label>

                            <div class="col-md-6">
                                <input id="writer" type="text" class="form-control" name="writer" value="Aayush" readonly="" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date" class="col-md-4 control-label" >date</label>

                            <div class="col-md-6">
                                <input id="date" type="text" class="form-control" name="date" value="{{date('Y-m-d H:i')}}" readonly="" required autofocus>
                            </div>
                        </div>
                            <div class="form-group">
							<label for="postImage" class="col-md-4 control-label">Image</label>

							<div class="col-md-6">
								<input id="postImage" type="file" class="form-control" name="postImage" required autofocus>
							</div>
						</div>
						<div class="form-group">
							<label for="short_description" class="col-md-4 control-label">Short Description</label>

							<div class="col-md-6">
								<input id="short_description" type="text" class="form-control" name="short_description" required autofocus>
							</div>
						</div>
						<div class="form-group">
							<label for="description" class="col-md-4 control-label">Description</label>

							<div class="col-md-6">
								<input id="description" type="text" class="form-control" name="description" required autofocus>
							</div>
						</div>

						<div class="form-group">
							<label for="views" class="col-md-4 control-label">No. of Views</label>

							<div class="col-md-6">
								<input id="publication" type="number" class="form-control" name="views" value="1" required autofocus readonly>
							</div>
						</div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add post
                                </button>

                                <a class="btn btn-link" href="{{ url('adminpanel') }}">
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
@section('nav-content')
<li>
	<a href="{{ url('/cpanel/logout') }}"
		onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">
		Logout
	</a>

	<form id="logout-form" action="{{ url('/cpanel/logout') }}" method="POST" style="display: none;">
		{{ csrf_field() }}
	</form>
</li>
@endsection
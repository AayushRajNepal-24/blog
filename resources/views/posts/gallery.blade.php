@extends('backend.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add image</div>
                    @if(session('error'))
                        <h3 class="alert alert-danger">{{session('error')}}</h3>
                    @elseif(session('success'))
                        <h3 class="alert alert-primary">{{session('success')}}</h3>
                        @endif
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('adminpanel/addimage') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="date" class="col-md-4 control-label" >date</label>

                                <div class="col-md-6">
                                    <input id="date" type="text" class="form-control" name="date" value="{{date('Y-m-d')}}" readonly="" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="gal_image" class="col-md-4 control-label">Image</label>

                                <div class="col-md-6">
                                    <input id="gal_image" type="file" class="form-control" name="gal_image" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add image
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
@extends('layouts.admin')
@section('content')
	@include('admin.sidebar')
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-danger".\>
			<div class="panel-body">
				You Have successfully deleted the books. Well Done
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
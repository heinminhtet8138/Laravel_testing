@extends('main')
@section('content')

<div class="container my-5">
	<form action="{{route('form_validation.store')}}" method="post">
		@csrf
		
		@if ($errors->any())
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert">×</button>	
				Please check the form below for errors
			</div>
		@endif
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email address</label>
	    <input type="email" class="form-control @if ($errors->any()) error @endif" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
	    
	  </div>

	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
	  </div>
	  
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

	


@endsection
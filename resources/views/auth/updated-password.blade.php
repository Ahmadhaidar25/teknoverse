@extends('layout.main')
@section('content')
<h2><i class="fas fa-fw fa-lock"></i>&nbsp;Updated Password</h2>
<div class="card">
	<div class="card-body">
		<form class="form" action="{{url('/post/updated/password')}}" method="post">
			@method("put")
			@csrf
			<div class="mb-3">
				<label for="current_password" class="form-label">old password</label>
				<input type="password" class="form-control @error('current_password') is-invalid @enderror" 
				name="current_password" id="current_password" autofocus>

				@error('current_password')
				<div class="invalid-feedback">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="password" class="form-label">new password</label>
				<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">

				@error('password')
				<div class="invalid-feedback">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="password_confirmation" class="form-label">
				confirm password</label>
				<input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" 
				name="password_confirmation" id="password_confirmation">

				@error('password_confirmation')
				<div class="invalid-feedback">{{ $message }}</div>
				@enderror
			</div>

			
			<button type="submit" class="btn btn-success">
				<div class="spinner"><i role="status" class="spinner-border spinner-border-sm"></i></div>
				<div class="hide-text">Update</div>
			</button>
			<a href="{{url('home')}}" class="btn btn-danger">Cancel</a>
		</form>
	</div>
</div>
@endsection
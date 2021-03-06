@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row card">
			<div class="col card-body">
				<form action="{{ route('users.update', $user) }}" method="POST">
					@csrf
					@method('PUT')

					<button class="btn btn-sm btn-primary mb-3 float-right">Update</button>

					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Enter your name..." value="{{ $user->name }}">
						<small id="nameHelp" class="form-text text-muted">Your name...</small>

						@if ($errors->has('name'))
                            <small>
                            	<strong style="color: red;">
                            		{{ $errors->first('name') }}
                            	</strong>
                            </small>
                        @endif
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" id="password" aria-describedby="passwordHelp" placeholder="Enter your password...">
						<small id="passwordHelp" class="form-text text-muted">Your password...</small>

						@if ($errors->has('password'))
                            <small>
                            	<strong style="color: red;">
                            		{{ $errors->first('password') }}
                            	</strong>
                            </small>
                        @endif
					</div>

					<div class="form-group">
						<label for="password_confirmation">Password Confirmation</label>
						<input type="password" class="form-control" name="password_confirmation" id="password_confirmation" aria-describedby="passwordConfirmationHelp" placeholder="Enter your password confirmation...">
						<small id="passwordConfirmationHelp" class="form-text text-muted">Your password confirmation...</small>
					</div>

				</form>
				<a href="{{ route('users.show', $user) }}" 
				class="btn btn-sm btn-default border-primary">
					Back
				</a>
			</div>
		</div>
	</div>
@endsection
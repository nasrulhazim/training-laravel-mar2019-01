@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row card">
			<div class="col card-body">
				<a href="{{ route('users.edit', $user) }}" 
					class=" mb-3 btn btn-sm btn-default btn-success float-right">
					Edit
				</a>
				
				<table class="table table-sm table-hover">
					<tr>
						<th>Name</th>
						<td>{{ $user->name }}</td>
					</tr>
					<tr>
						<th>E-mail</th>
						<td>{{ $user->email }}</td>
					</tr>
					<tr>
						<th>Registered At</th>
						<td>{{ $user->created_at->format('d-M-Y, H:i:s') }}</td>
					</tr>
					<tr>
						<th>Last Updated At</th>
						<td>{{ $user->updated_at->format('d-M-Y, H:i:s') }}</td>
					</tr>
				</table>
				<a href="{{ route('users.index') }}" 
				class="btn btn-sm btn-default border-primary">
					Back
				</a>
			</div>
		</div>
	</div>
@endsection
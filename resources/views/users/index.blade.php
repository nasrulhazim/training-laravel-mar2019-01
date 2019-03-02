@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row card">
			<div class="col card-body">
				<a href="" class="btn btn-default btn-primary mb-3 float-right mr-3">
					Create New User
				</a>
				<table class="table table-sm table-hover">
					<tr>
						<th>Name</th>
						<th>E-mail</th>
						<th>Actions</th>
					</tr>
					@foreach($users as $user)
						<tr>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
							<td>
								<a href="{{ route('users.show', $user) }}" class="btn btn-sm btn-primary">
									Details
								</a>
								<a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-default btn-success">
									Edit
								</a>
								<div class="btn btn-sm btn-danger" onclick="
									if(confirm('Are you sure want to delete this user?')) {
										document.getElementById('delete-user-{{ $user->id }}').submit();
									}
								">
									Delete
								</div>
								<form id="delete-user-{{ $user->id }}" 
									action="{{ route('users.destroy', $user) }}" 
									method="POST">
									@csrf @method('DELETE')
								</form>

							</td>
						</tr>
					@endforeach
				</table>
				<div class="float-right">
					{{ $users->links() }}
				</div>
			</div>
		</div>
	</div>
@endsection
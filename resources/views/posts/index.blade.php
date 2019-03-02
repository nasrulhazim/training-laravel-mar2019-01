@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row card">
			<div class="col card-body">
				<a href="{{ route('posts.create') }}" class="btn btn-default btn-primary mb-3 float-right mr-3">
					Create New post
				</a>
				<table class="table table-sm table-hover">
					<tr>
						@if(auth()->user()->isAdmin())
							<th>Owner</th>
						@endif
						<th>Post</th>
						<th>Actions</th>
					</tr>
					@foreach($posts as $post)
						<tr>
							@if(auth()->user()->isAdmin())
								<th>{{ $post->user->name }}</th>
							@endif
							<td>{{ $post->post }}</td>
							<td>
								<a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-primary">
									Details
								</a>
								<a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-default btn-success">
									Edit
								</a>
								<div class="btn btn-sm btn-danger" onclick="
									if(confirm('Are you sure want to delete this post?')) {
										document.getElementById('delete-post-{{ $post->id }}').submit();
									}
								">
									Delete
								</div>
								<form id="delete-post-{{ $post->id }}" 
									action="{{ route('posts.destroy', $post) }}" 
									method="POST">
									@csrf @method('DELETE')
								</form>

							</td>
						</tr>
					@endforeach
				</table>
				<div class="float-right">
					{{ $posts->links() }}
				</div>
			</div>
		</div>
	</div>
@endsection
@extends('main')

@section('title', '| All Posts')
	
@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('post.create')}}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Creat New Post</a>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Body</th>
					<th>Created at</th>
					<th></th>
				</thead>

				<tbody>

					@foreach ($posts as $post)
						<tr>
							<th>{{ $post->id }}</th>
							<td>{{ $post->title }}</td>
							<td>{{ substr($post->body,0,50) }} {{ strlen($post->bod) > 50 ? "..." : "" }}</td>
							<td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
							<td><a href="{{ route('post.show', $post->id) }}" class="btn btn-info btn-sm">View</a>   <a href="{{ route('post.edit', $post->id) }}" class="btn btn-info btn-sm">Edit</a></td>
						</tr>
					@endforeach

				</tbody>
			</table>
		</div>
	</div>

@stop
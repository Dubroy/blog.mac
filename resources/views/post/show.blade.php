@extends('main')

@section('title', '| view post')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>{{ $post->title }}</h1>
			<p class="lead">{{ $post->body}}</p>
		</div>

		<div class="col-md-4">
			<div class="card bg-light p-3">
				<dl class="dl-horizontal">
				  <dt>Created at:</dt>
				  <dd>{{ date('M j, Y', strtotime($post->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
				  <dt>Last update:</dt>
				  <dd>{{ date('M j, Y', strtotime($post->updated_at)) }}</dd>
				</dl>

				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('post.edit', 'Edit', array($post->id), array('class'=>"btn btn-primary btn-block")) !!}
					</div>

					<div class="col-sm-6">
						{!! Html::linkRoute('post.edit', 'Delete', array($post->id), array('class'=>"btn btn-danger btn-block")) !!}
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
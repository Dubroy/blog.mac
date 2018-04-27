@extends('main')

@section('title', '| Edit Page')

@section('content')

	<div class="row">
		
		<div class="col-md-8">
			{!! Form::model($post, ['route' => ['post.update', $post->id], 'method' => 'put']) !!}
			{{ Form::label('title', "Title:") }}
			{{ Form::text('title', null, ['class' => 'form-control form-control-lg']) }}
			
			{{ Form::label('body', "Body:") }}
			{{ Form::textarea('body', null, ['class' => 'form-control']) }}
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
						{{ Form::submit('Save', ['class' => 'btn btn-primary btn-block'])}}
					</div>

					<div class="col-sm-6">
						{!! Html::linkRoute('post.show', 'Cancel', array($post->id), array('class'=>"btn btn-danger btn-block")) !!}
					</div>
				</div>
			</div>
		</div>
		{!! Form::close() !!}
	</div>

@endsection
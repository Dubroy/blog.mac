@extends('main')

@section('title', '| create new post')

@section('stylesheets')

	{!! Html::style('css/parsley.css') !!}

@endsection

@section('script')
	
	{!! Html::script('js/parsley.min.js') !!}

@endsection

@section('content')
	<div class='row'>
		<div class='col-md-8 col-md-offset-2'>
			<h1>Create New Post</h1>
			<hr>
			{!! Form::open(['route' => 'post.store']) !!}
    		{{ Form::label('title', 'Title: ')}}
    		{{ Form::text('title', null, array('class' => 'form-control'))}}

    		{{ Form::label('body', 'Post body: ')}}
    		{{ Form::textarea('body', null, array('class' => 'form-control'))}}

    		{{ Form::submit('Create post',array('class' => 'btn btn-success btn-lg btn-block','style' => 'margin-top:20px;'))}}

			{!! Form::close() !!}
		</div>
	</div>
@endsection
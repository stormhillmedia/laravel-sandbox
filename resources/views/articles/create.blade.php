@extends('app')
@section('content')
	<h1>Write a new Artcle</h1>
	<hr />
	{!! Form::open(['url'=>'articles']) !!}
			<div class="form-group"> 
				{!! Form::label('title','Title: ') !!}
				{!! Form::text('title', null, ['class' => 'form-control', 'foo'=>'bar']) !!}
			</div>

			<div class="form-group"> 
				{!! Form::label('author','Author: ') !!}
				{!! Form::text('author', null, ['class' => 'form-control', 'foo'=>'bar']) !!}
			</div>

			<div class="form-group"> 
				{!! Form::label('body','Body Content: ') !!}
				{!! Form::textarea('body', null, ['class' => 'form-control', 'foo'=>'bar']) !!}
			</div>

			<div class="form-group"> 
				{!! Form::label('Published_at','Publish On: ') !!}
				{!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
			</div>			

			<div class="form-group"> 
				{!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
			</div>

	{!! Form::close() !!}
@stop

@section('footer')
 'stuff goes here'
 @stop
@extends('layout')

@section('content')
	<h2>Edit Comment</h2>
	<p>Use the form below to edit your exisitng message</p>

	{{-- Display any form errors that exist --}}
	@if(count($errors) > 0)
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li style="color: red">{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif

	{!! Form::open(['action' => ['CommentController@update', $comment->id], 'method' => 'put']) !!}
	{!! Form::hidden('user_id', $post_id) !!}
	{!! Form::hidden('post_id', $post_id) !!}
		<table>
			<tr>
				<div class="form-group">
					<td style="vertical-align: top;">
						{!! Form::label('content', 'Message:') !!}
					</td>
					<td>
						{!! Form::textarea('content', $comment->content, ['class' => 'form-control', 'style' => 'height:100px; width:200px; resize: vertical; min-height: 25px; max-height: 200px;', 'placeholder' => 'What\'s on your mind?']) !!}
					</td>
				</div>
			</tr>
			<tr>
				<td></td>
				<td>
					{!! Form::submit('Edit Comment', ['class' => 'btn btn-primary', 'style' => 'width: 100%;']) !!}
				</td>
			</tr>
		</table>
	{!! Form::close() !!}
@stop
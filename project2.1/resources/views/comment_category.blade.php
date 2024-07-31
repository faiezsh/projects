{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('comment_id', 'Comment_id:') !!}
			{!! Form::text('comment_id') !!}
		</li>
		<li>
			{!! Form::label('path', 'Path:') !!}
			{!! Form::text('path') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}
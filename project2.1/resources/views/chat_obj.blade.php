{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('chat_id', 'Chat_id:') !!}
			{!! Form::text('chat_id') !!}
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
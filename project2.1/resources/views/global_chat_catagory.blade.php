{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('global_chat_id', 'Global_chat_id:') !!}
			{!! Form::text('global_chat_id') !!}
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
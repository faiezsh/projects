{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('course_id', 'Course_id:') !!}
			{!! Form::text('course_id') !!}
		</li>
		<li>
			{!! Form::label('chat_id', 'Chat_id:') !!}
			{!! Form::text('chat_id') !!}
		</li>
		<li>
			{!! Form::label('global_chat_id', 'Global_chat_id:') !!}
			{!! Form::text('global_chat_id') !!}
		</li>
		<li>
			{!! Form::label('state', 'State:') !!}
			{!! Form::text('state') !!}
		</li>
		<li>
			{!! Form::label('time', 'Time:') !!}
			{!! Form::text('time') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}
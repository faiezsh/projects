{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('userid', 'Userid:') !!}
			{!! Form::text('userid') !!}
		</li>
		<li>
			{!! Form::label('course_id', 'Course_id:') !!}
			{!! Form::text('course_id') !!}
		</li>
		<li>
			{!! Form::label('opinion', 'Opinion:') !!}
			{!! Form::text('opinion') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}
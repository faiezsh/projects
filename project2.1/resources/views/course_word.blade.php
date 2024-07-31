{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('course_id', 'Course_id:') !!}
			{!! Form::text('course_id') !!}
		</li>
		<li>
			{!! Form::label('keyword_id', 'Keyword_id:') !!}
			{!! Form::text('keyword_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}
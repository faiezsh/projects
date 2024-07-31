{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id', 'Id:') !!}
			{!! Form::text('id') !!}
		</li>
		<li>
			{!! Form::label('course_id', 'Course_id:') !!}
			{!! Form::text('course_id') !!}
		</li>
		<li>
			{!! Form::label('question', 'Question:') !!}
			{!! Form::textarea('question') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}
{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('exercises_id', 'Exercises_id:') !!}
			{!! Form::text('exercises_id') !!}
		</li>
		<li>
			{!! Form::label('answer_id', 'Answer_id:') !!}
			{!! Form::text('answer_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}
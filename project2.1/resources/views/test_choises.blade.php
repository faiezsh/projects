{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('testid', 'Testid:') !!}
			{!! Form::text('testid') !!}
		</li>
		<li>
			{!! Form::label('test_answer_id', 'Test_answer_id:') !!}
			{!! Form::text('test_answer_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}
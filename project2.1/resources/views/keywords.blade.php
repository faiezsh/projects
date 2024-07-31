{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id', 'Id:') !!}
			{!! Form::text('id') !!}
		</li>
		<li>
			{!! Form::label('word', 'Word:') !!}
			{!! Form::text('word') !!}
		</li>
		<li>
			{!! Form::label('testid', 'Testid:') !!}
			{!! Form::text('testid') !!}
		</li>
		<li>
			{!! Form::label('formal', 'Formal:') !!}
			{!! Form::text('formal') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}
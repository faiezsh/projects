{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('wordid', 'Wordid:') !!}
			{!! Form::text('wordid') !!}
		</li>
		<li>
			{!! Form::label('certificateid', 'Certificateid:') !!}
			{!! Form::text('certificateid') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}
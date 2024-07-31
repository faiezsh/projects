{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id', 'Id:') !!}
			{!! Form::text('id') !!}
		</li>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('password', 'Password:') !!}
			{!! Form::text('password') !!}
		</li>
		<li>
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email') !!}
		</li>
		<li>
			{!! Form::label('roll', 'Roll:') !!}
			{!! Form::text('roll') !!}
		</li>
		<li>
			{!! Form::label('rate', 'Rate:') !!}
			{!! Form::text('rate') !!}
		</li>
		<li>
			{!! Form::label('state', 'State:') !!}
			{!! Form::text('state') !!}
		</li>
		<li>
			{!! Form::label('statetime', 'Statetime:') !!}
			{!! Form::text('statetime') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}
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
			{!! Form::label('category', 'Category:') !!}
			{!! Form::text('category') !!}
		</li>
		<li>
			{!! Form::label('userid', 'Userid:') !!}
			{!! Form::text('userid') !!}
		</li>
		<li>
			{!! Form::label('rate', 'Rate:') !!}
			{!! Form::text('rate') !!}
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
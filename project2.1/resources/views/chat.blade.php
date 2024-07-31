{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id', 'Id:') !!}
			{!! Form::text('id') !!}
		</li>
		<li>
			{!! Form::label('student_id', 'Student_id:') !!}
			{!! Form::text('student_id') !!}
		</li>
		<li>
			{!! Form::label('teacher_id', 'Teacher_id:') !!}
			{!! Form::text('teacher_id') !!}
		</li>
		<li>
			{!! Form::label('content', 'Content:') !!}
			{!! Form::text('content') !!}
		</li>
		<li>
			{!! Form::label('category', 'Category:') !!}
			{!! Form::text('category') !!}
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
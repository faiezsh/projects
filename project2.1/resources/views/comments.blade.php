{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id', 'Id:') !!}
			{!! Form::text('id') !!}
		</li>
		<li>
			{!! Form::label('global_chat_id', 'Global_chat_id:') !!}
			{!! Form::text('global_chat_id') !!}
		</li>
		<li>
			{!! Form::label('userid', 'Userid:') !!}
			{!! Form::text('userid') !!}
		</li>
		<li>
			{!! Form::label('category', 'Category:') !!}
			{!! Form::text('category') !!}
		</li>
		<li>
			{!! Form::label('content', 'Content:') !!}
			{!! Form::text('content') !!}
		</li>
		<li>
			{!! Form::label('like_count', 'Like_count:') !!}
			{!! Form::text('like_count') !!}
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
{!! Form::open(['action' => 'FirebaseController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

	{{Form::label('child_name', 'child name')}}
	{{Form::text('child_name', '')}} </br></br>

	{{Form::label('description', 'Description')}}
	{{Form::text('description', '')}} </br></br>

	{{Form::label('image', 'image')}}
	{{Form::text('image', '')}} </br></br>

	{{Form::label('menuld', 'menuld')}}
	{{Form::text('menuld', '')}} </br></br>

	{{Form::label('name', 'name')}}
	{{Form::text('name', '')}} </br></br>

	{{Form::label('price', 'price')}}
	{{Form::text('price', '')}} </br></br>

	<div class="form-group">
            {{Form::submit('Create')}}
            {!! Form::close() !!}
    </div>



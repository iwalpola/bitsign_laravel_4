@extends('layouts.master')

@section('content')

    <!-- ******LOGIN FORM****** -->
<section class="section login-container offset-header">
	<div class="container">
    	<div class="login-form">
			<div class="card card-container">
	    		<center>
			    	<h1 class="login-title"><img src="/img/logo.png">Login</h1> <br>
			    	@if (Session::get('invalid') == true)
			    	<div class="alert alert-danger">
			    	Incorrect username/password combination
			    	</div>
			    	@endif
				      	{{ Form::open(array('route' => 'sessions.store')) }}
				      			<div class="form-group">
					      			{{--Form::label('username','Username:')--}}
					      			{{Form::text('username', Input::old('username'), ['class' => 'form-control', 'placeholder' => 'Username', 'required', 'autofocus'])}}
				      			</div>
				      			<div class="form-group">
					      			{{--Form::label('password','Password:')--}}
					      			{{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required'])}}
					      		</div>
					      		<div class="form-group">
					      			{{Form::submit('Login', array('class'=>'btn btn-lg btn-cta-secondary btn-block'))}}
					      		</div>
						{{ Form::close() }}
				</center>
			</div>
		</div>
	</div>
</section>
@stop
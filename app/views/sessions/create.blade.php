@extends('layouts.master')

@section('content')

    <!-- ******LOGIN FORM****** -->
<section class="section login-container offset-header">
	<div class="container">
    	<div class="login-form">
    		<center>
	    	<h1 class="login-title"><img src="/img/logo.png">Login</h1> <br>
		      	{{ Form::open(array('route' => 'sessions.store')) }}
		      			<div class="form-group">
			      			{{Form::label('username','Username:')}}
			      			<br>
			      			{{Form::text('username')}}
		      			</div>
		      			<div class="form-group">
			      			{{Form::label('password','Password:')}}
			      			<br>
			      			{{Form::password('password')}}
			      		</div>
			      		<div class="form-group">
			      			{{Form::submit('Login', array('class'=>'btn btn-cta-secondary'))}}
			      		</div>
				{{ Form::close() }}
			</center>
		</div>
	</div>
</section>
@stop
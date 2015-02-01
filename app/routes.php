<?php

/*Setting csrf filter for critical routes*/

Route::when('*', 'csrf', ['post', 'put', 'patch']);

/* Unprotected Index View */

Route::get('/', ['as' => 'home','uses' =>'HomeController@showWelcome']);

/*Routing for Sessionss Controller*/

		Route::get('login','SessionsController@create');

		Route::get('logout','SessionsController@destroy');

		Route::resource('sessions', 'SessionsController');

/* Protected Route Group */

Route::group(array('before' => 'auth'), function()
{
		    /*Routing for Signatures Controller*/

		Route::resource('signatures', 'SignaturesController', 
			array('only' => array('index', 'create', 'show')));

		/*Routing for Contractss Controller*/

		Route::get('contracts/import', ['as' => 'contracts.import', 'uses' => 'ContractsController@import']);

		Route::resource('contracts', 'ContractsController', 
			array('only' => array('index', 'create', 'show')));

		/* Dash View Loader */

		Route::get('dash', ['as'=>'dashboard', 'uses'=>'DashController@showDash'])->before('auth');
});
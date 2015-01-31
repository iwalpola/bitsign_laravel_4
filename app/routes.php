<?php

/*Setting csrf filter for critical routes*/

Route::when('*', 'csrf', ['post', 'put', 'patch']);

/*Routing for Core Controllers*/

Route::resource('signature', 'SignatureController');

Route::resource('contracts', 'ContractController', 
	array('only' => array('index', 'create')));

/* Index View */

Route::get('/', 'HomeController@showWelcome');

/* Dash View Loader */

Route::get('dash', 'DashController@showDash');

/*Auth redirection */

Route::get('login', 'AuthController@login');
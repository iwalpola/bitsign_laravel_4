<?php

class DashController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Dash Controller
	|--------------------------------------------------------------------------
	|
	*/

	public function showDash()
	{
		return View::make('layouts.dashboard');
	}

}
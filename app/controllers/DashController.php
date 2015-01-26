<?php

class DashController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Dash Controller
	|--------------------------------------------------------------------------
	|
	*/

	public function demoDash()
	{
		return View::make('layouts.dashboard');
	}

}
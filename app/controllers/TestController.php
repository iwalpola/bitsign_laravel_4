<?php

class TestController extends BaseController {

	public function returnHome()
	{
		return View::make('layouts/index');
	}

	public function returnUser()
	{
		return View::make('layouts/userMaster');
	}
}
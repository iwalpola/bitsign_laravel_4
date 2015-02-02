<?php

use BitSign\Services\Validation\Validator;

class UsersController extends \BaseController {

	private $validator;

	function __construct(Validator $validator){
		$this->validator = $validator;
	}

	/**
	 * Show the Sign Up form
	 * GET /users/create
	 * GET /signup
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.register');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{	
		$rules = array(
                'username' => array( 'required', 'min:8', 'alpha_num' , 'unique:users'),
                'email' => array( 'required', 'email', 'unique:users' ),
                'f_name' => array( 'required', 'alpha_num' ),
                'l_name' => array( 'required', 'alpha_num' ),
                'password' => array( 'required', 'confirmed' )
            );
		$input = Input::only(['username','f_name','l_name','email','password', 'password_confirmation']);
		$valid = $this->validator->validate($input, $rules);
		if($valid == "valid"){
			$input['password'] = Hash::make(Input::get('password'));
			$newUser = User::create($input);
			if($newUser){
	            Auth::login($newUser);
	            return Redirect::route('dashboard');
	        }
	    }
	    $messages = $valid->getMessages();
        return Redirect::route('users.create')->withInput()->withMessages($messages);
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
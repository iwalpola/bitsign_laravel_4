<?php

class SignaturesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /signatures
	 *
	 * @return Response
	 */
	public function index()
	{
		//returns the fetched signatures index
		return View::make('signatures.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /signatures/create
	 *
	 * @return Response
	 */
	public function create($contr_id)
	{
		return View::make('signatures.create')->withContractid($contr_id);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /signatures
	 *
	 * @return Response
	 */
	public function store()
	{
		//check if its our form
        if ( Session::token() !== Input::get( '_token' ) ) {
            return Response::json( array(
                'msg' => 'Unauthorized attempt to create option'
            ) );
        }
 		//loop through data passed (Input::all();), and find contract id
 		//for all the email addresses passed in input, find users that exist
 		//if no match, add to an array called new_users or sonmething
 		//make an array of emails of users that exist called existing_users

        // store in database, the emails of existing and other users
        // email new users with a message saying someone asked them to sign a contract
 
        $response = array(
            'status' => 'success',
            'creator_id' => $creator_id,
        );
 
        return Response::json( $response );
	}

	/**
	 * Display the specified resource.
	 * GET /signatures/{id}
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
	 * GET /signatures/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function usercheck()
	{
		//check if its our form
        if ( Session::token() !== Input::get( '_token' ) ) {
            return Response::json( array(
                'msg' => 'Unauthorized attempt to create option'
            ) );
        }

        // get input
 		$email = Input::get( 'email' );
        $btc = Input::get( 'btc_addr' );
        
        //conditional validation and search
        if (!is_null($email)){
        	//validate email like in userscontroller@store
        	//if valid email, search database, and if match, populate json array setting 'match'=>'true',
        	//and [concatenation of first name and last name], email and bitcoin address
        }
        if (!is_null($btc)){
        	//validate bitcoin address
        	//if valid address, search database, and if match, populate json array setting 'match'=>'true',
        	//and [concatenation of first name and last name], email and bitcoin address
        }
        //return json_array
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /signatures/{id}
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
	 * DELETE /signatures/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
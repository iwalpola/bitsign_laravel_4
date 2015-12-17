<?php

class ContractsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /contracts
	 *
	 * @return Response
	 */
	public function index()
	{
		//returns the fetched contracts index
		return View::make('contracts.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//returns the TinyMCE Editor
		
		return View::make('contracts.create');
	}

public function import($id)
	{
		//takes doc_id and appends to data array, then redirects to file import page

		$data = array(
    	'doc_id'  => $id,
    	'subheading1'   => 'Contracts',
    	'subheading2' => 'Create Contract',
    	'subheading3' => 'Attach Files'
		);

		//returns an uploader page
		return View::make('import.newdoc')->with('data', $data);
	}
	/**
	 * Display the specified resource.
	 * GET /contracts/{id}
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
	 * GET /contracts/{id}/edit
	 *
	 * @param  int  $id
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
 		// get input
 		$creator_id = Input::get( 'creator_id' );
        $contract_title = Input::get( 'contract_title' );
        $contract_content = Input::get( 'contract_content' );

        // store in database
        $contract = new Contract;
        $contract->title = $contract_title;
        $contract->content = $contract_content;
        $contract->creator_id = $creator_id;
        $contract->save();
        $contract_id = $contract->getKey();
 
        $response = array(
            'status' => 'success',
            'creator_id' => $creator_id,
            'contract_id' => $contract_id,
        );
 
        return Response::json( $response );
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /contracts/{id}
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
	 * DELETE /contracts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
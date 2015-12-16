<?php

class IPController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /ip
	 *
	 * @return Response
	 */
	public function index()
	{
		//returns the fetched ip index
		return View::make('ip.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//returns the TinyMCE Editor
		
		return View::make('IP.create');
	}

	/**
	 * Show the form for uploading a file
	 *
	 * @return Redirect
	 */
	public function import($ip_id)
	{
		//takes doc_id and appends to data array, then redirects to file import page

		$data = array(
    	'doc_id'  => $ip_id,
    	'subheading1'   => 'Intellectual Property',
    	'subheading2' => 'New Record',
    	'subheading3' => 'Attach Files'
		);

		
		return View::make('import.doc')->with('data', $data);
	}

	/**
	 * Display the specified resource.
	 * GET /ip/{id}
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
	 * GET /ip/{id}/edit
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
        $ip_title = Input::get( 'ip_title' );
        $ip_descr = Input::get( 'ip_descr' );

        // store in database
        $ip = new IP;
        $ip->title = $ip_title;
        $ip->content = $ip_descr;
        $ip->creator_id = $creator_id;
        $ip->save();
        $ip_id = $ip->getKey();
 
        $response = array(
            'status' => 'success',
            'creator_id' => $creator_id,
            'ip_id' => $ip_id,
        );
 
        return Response::json( $response );
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /ips/{id}
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
	 * DELETE /ips/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
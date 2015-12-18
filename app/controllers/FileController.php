<?php

class FileController extends \BaseController {

	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
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


	public function store()
	{
		
		$doc_id = Input::get( 'doc_id' );

		//Check whether this contract belongs to this user

		if (Contract::find($doc_id)->creator_id != Auth::user()->id){
			$error = array('0' => 'You are not the creator. Get out now to avoid a lawsuit');
			return array(
	        	'errors' => $errors
	    	);
		}

		// Function for converting from hexadecimal to ascii

		function hex2str($hex) {
    	$str = '';
    	for($i=0;$i<strlen($hex);$i+=2) $str .= chr(hexdec(substr($hex,$i,2)));
    	return $str;
		}
		
		//Set the upload parameters
		$assetPath = '/uploads';
		$uploadPath = public_path($assetPath);

		//Get files from POST Input
		$all_uploads = Input::file('files'); // your file upload input field in the form should be named 'files' or 'files[]'

		// Make sure it really is an array
	    if (!is_array($all_uploads)) {
	        $all_uploads = array($all_uploads);
	    }

	    $errors = array();
	    $files = array();

	    // Loop through all uploaded files
	    foreach ($all_uploads as $upload) {

	        $validator = Validator::make(
	            array('file' => $upload),
	            array('file' => 'required|mimes:jpeg,png|image|max:1000')
	        );

	        if ($validator->passes()) {
	            $filename        = str_random(6) . '_' . $upload->getClientOriginalName();
	        	$uploadSuccess   = $upload->move($uploadPath, $filename);
				if($uploadSuccess){
			 	$shafile = hash_file('sha256', $uploadPath.'/'.$filename);
			 	// store in database
			        $filerecord = new FileRecord;
			        $filerecord->hash = $shafile;
			        $filerecord->filename = $filename;
			        $filerecord->doc_id = $doc_id;
			        $filerecord->save();

			   	$files[] = 'File ' . $upload->getClientOriginalName() . ' successfully added as hash value: ' . $shafile ;
				} 
	        } 
	        else {
	            // Collect error messages
	            $errors[] = 'File ' . $upload->getClientOriginalName() . ':' . $validator->messages()->first('file');
	        }

	    }

	    // return our results in a files object
	    return array(
	        'files' => $files,
	        'errors' => $errors
	    );
	
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
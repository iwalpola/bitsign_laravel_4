<?php

class FileController extends \BaseController {

	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($data)
	{
		//returns the TinyMCE Editor
		
		return View::make('import.doc')->with('data', $data);
	}


	public function processUpload()
	{
		
		// Function for converting from hexadecimal to ascii

		function hex2str($hex) {
    	$str = '';
    	for($i=0;$i<strlen($hex);$i+=2) $str .= chr(hexdec(substr($hex,$i,2)));
    	return $str;
		}
		
		//Set the upload parameters

		$destinationPath = public_path().'\uploads\\';

		//Get files from POST Input
		$all_uploads = Input::file('files'); // your file upload input field in the form should be named 'files' or 'files[]'

		// Make sure it really is an array
	    if (!is_array($all_uploads)) {
	        $all_uploads = array($all_uploads);
	    }

	    $results = array();

	    // Loop through all uploaded files
	    foreach ($all_uploads as $upload) {

	        $validator = Validator::make(
	            array('file' => $upload),
	            array('file' => 'required|mimes:jpeg,png|image|max:1000')
	        );

	        if ($validator->passes()) {
	            $filename        = str_random(6) . '_' . $upload->getClientOriginalName();
	        	$uploadSuccess   = $upload->move($destinationPath, $filename);
				if($uploadSuccess){
			 	$shafile = hash_file('sha256', $destinationPath.$filename);
			 	// store in database
			        $filerecord = new FileHash;
			        $filerecord->hash = hex2str($shafile);
			        $filerecord->filepath = $destinationPath.'/'.$filename;
			        $filerecord->contract_id = Input::get( 'doc_id' );
			        $filerecord->save();

			   	$results['files'][] = 'File "' . $upload->getClientOriginalName() . '" successfully added as hash value: "' . hex2str($shafile) . '"';
				} 
	        } 
	        else {
	            // Collect error messages
	            $results['errors'][] = 'File "' . $upload->getClientOriginalName() . '":' . $validator->messages()->first('file');
	        }

	    }

	    $pussy = array();
	        $i=0;
			while ( $i<= 10) {
				$pussy['files'][] = 'juicy' . $i;
				$pussy['errors'][] = 'HUKANAWADA?' . rand($i, 3000-$i);
				$i++;
			}
		
		return Response::json($pussy);
	
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
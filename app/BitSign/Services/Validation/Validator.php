<?php
 
namespace BitSign\Services\Validation;
 
class Validator {
 
    public function validate($data = array(), $rules = array()) {
        $validation = \Validator::make(
            $data,
            array(
                'username' => array( 'required', 'min:8', 'alpha_num' , 'unique:users'),
                'email' => array( 'required', 'email', 'unique:users' ),
                'f_name' => array( 'required', 'alpha_num' ),
                'l_name' => array( 'required', 'alpha_num' ),
                'password' => array( 'required', 'confirmed' )
            )
        );
 
        if ( $validation->fails() ) {
            return $validation->messages();
        }
         
        return "valid";
    }
 
}   //end of class
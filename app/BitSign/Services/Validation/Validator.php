<?php
 
namespace BitSign\Services\Validation;
 
class Validator {
 
    public function validate($data = array(), $rules = array()) {
        $validation = \Validator::make($data, $rules);
 
        if ( $validation->fails() ) {
            return $validation->messages();
        }
         
        return "valid";
    }
 
}   //end of class
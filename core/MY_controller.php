<?php if ( !defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' ); 

class MY_Controller extends MX_Controller 
{
    public function __construct() 
    { 
        parent::__construct(); 
        $this->load->library( 'form_validation' ); 
        $this->form_validation->set_ci_reference( $this ); 
    }
}
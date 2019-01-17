<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migrations extends CI_Controller {

	public function index()
	{
        $this->load->library('migration');
        
        if($this->migration->current() === false){
            show_error($this->migration->error_string());
        }else{
            echo 'migration success';
        }
	}
}

?>

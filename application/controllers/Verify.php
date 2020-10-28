<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verify extends CI_Controller {

	
	public function pass($id)
	{ 
		
			
			
		
			$this->db->set('status',1);
			$this->db->where('unique_key',$id);
			$this->db->update('tbl_user');
			
			$msg='<div class="alert alert-success"> Your Account is Verifed </div>';
					
			$this->session->set_flashdata('message',$msg);
					
			redirect('login');

		
	
	}
	
	
	
	
	
}

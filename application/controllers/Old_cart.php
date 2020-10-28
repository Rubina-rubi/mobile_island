<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Old_cart extends CI_Controller {


	public function index()
	{
	}	
	public function view($id)
	{	
		
		if($this->session->userdata('uid')){
			
		
		$query = $this->db->select('*');
		$query = $this->db->from('tbl_item');
		$query = $this->db->where('o_id',$id);
			$query = $this->db->where('status',0);
		$query = $this->db->join('tbl_product','tbl_item.p_id=tbl_product.p_id');
		$query = $this->db->get();
		$o_data['order'] = $query->result_array();
		$o_data['total_list'] = $query->num_rows();
			
		}else{
			
			$o_data['order'] = null;
		
			
			redirect('login');
		}
		
		
		
		$this->load->view('inc/head');
		$this->load->view('inc/navbar',$o_data);
		$this->load->view('old-cart',$o_data);
		$this->load->view('inc/footer');
		$this->load->view('inc/foot');
	}
}

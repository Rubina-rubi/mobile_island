<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basket extends CI_Controller {


	public function index()
	{
		
		
		
		if($this->session->userdata('temp_order_id')){
			
		
		$query = $this->db->select('*');
		$query = $this->db->from('tbl_item');
		$query = $this->db->where('o_id',$this->session->userdata('temp_order_id'));
			$query = $this->db->where('status',0);
		$query = $this->db->join('tbl_product','tbl_item.p_id=tbl_product.p_id');
		$query = $this->db->get();
		$o_data['order'] = $query->result_array();
		$o_data['total_list'] = $query->num_rows();
			
		}else{
			
			$o_data['order'] = null;
			$o_data['total_list'] = 0;
		}
		
		if($this->session->userdata('uid')){
			
		$result=$this->db->where('user_id',$this->session->userdata('uid'))->where('status','1')->order_by('id','desc')->get('tbl_order')->result_array();
		
			if($result){
				
				$ordr_id=$result[0]['id'];
				$query = $this->db->select('*');
				$query = $this->db->from('tbl_item');
				$query = $this->db->where('o_id',$ordr_id);
				$query = $this->db->where('status',0);
				$query = $this->db->join('tbl_product','tbl_item.p_id=tbl_product.p_id');
				$query = $this->db->get();
				$o_data['basket'] = $query->result_array();
				$o_data['basket_list'] = $query->num_rows();
			}else{
				
				$o_data['basket'] = null;
				$o_data['basket_list'] = 0;
			}
			
		}else{
			
			$o_data['basket'] = null;
			$o_data['basket_list'] = 0;
		}
		
		
		
		$this->load->view('inc/head');
		$this->load->view('inc/navbar',$o_data);
		$this->load->view('shoping-basket',$o_data);
		$this->load->view('inc/footer');
		$this->load->view('inc/foot');
	}
}

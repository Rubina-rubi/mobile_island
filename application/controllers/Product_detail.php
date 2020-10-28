<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_detail extends CI_Controller {



	public function index()
	{
		
	
	}
	
	
	public function view($id)
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
		
		if($id){
		
		$query = $this->db->select('*');
		$query = $this->db->from('tbl_product');
		$query = $this->db->where('p_id',$id);
		$query = $this->db->get();
		$o_data['product_detail'] = $query->result_array();
		
		}else{
			
			$o_data['product_detail'] = null;
	
		}
		
		
		
		if($this->session->userdata('uid')){
			
			
			
				///CHECK  RATING RATING//////
			
			
			$query2 = $this->db->select('r_id,rating');
			$query2 = $this->db->where('p_id',$id);
			$query2 = $this->db->where('user_id',$this->session->userdata('uid'));
			$query2 = $this->db->get('tbl_rating');
			$o_data['rating']=$query2->result_array();
			
			
			
			///RATING//////
			
			if(($this->input->post('rating'))&&!$o_data['rating']){
				
				$rate['p_id']=$id;
				$rate['user_id']=$this->session->userdata('uid');
				$rate['rating']=$this->input->post('rating');
				
				$this->db->insert('tbl_rating',$rate);
				
				
				
				
				redirect('Product_detail/view/'.$id);
				
				
			}else if(($this->input->post('rating'))&&$o_data['rating']){
				
				$rate['p_id']=$id;
				$rate['user_id']=$this->session->userdata('uid');
				$rate['rating']=$this->input->post('rating');
				
				$this->db->set('rating',$rate['rating']);
				$this->db->where('r_id',$o_data['rating'][0]['r_id']);
				$this->db->update('tbl_rating');
				
				
				
				
				redirect('Product_detail/view/'.$id);
				
			}
			
			
		}else{
			
			$query2 = $this->db->select('FLOOR(AVG(rating)) as rating');
			$query2 = $this->db->where('p_id',$id);
			$query2 = $this->db->get('tbl_rating');
			$o_data['rating']=$query2->result_array();
			
		}
		
		
		
		
		$this->load->view('inc/head');
		$this->load->view('inc/navbar',$o_data);
		$this->load->view('product-detail',$o_data);
		$this->load->view('inc/footer');
		$this->load->view('inc/foot');
	}
	
	
}

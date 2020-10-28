<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {


	public function index()
	{
		
	}
	
	public function add($id,$price,$quantiy)
	{
		 
		
		if(!$this->session->userdata('temp_order_id')){
			
			
			/*  Inserting Order ID */
			
			$data['date']=date('Y-m-d');
			
			$this->db->insert('tbl_order',$data);
			
			$order_id = $this->db->insert_id();
			
			$this->session->set_userdata('temp_order_id',$order_id);
			
			$order_id=$this->session->userdata('temp_order_id');
			
			/*  Inserting Order ID */
			
			
			/*  Inserting Item */
			
			$o_data['o_id']=$order_id;
			
			$o_data['p_id']=$id;
			
			$o_data['price']=$price;
			
			$o_data['quantity']=$quantiy;
			
			$o_data['amount']=($price*$quantiy);
			
			$this->db->insert('tbl_item',$o_data);
			
			/*  Inserting Item */
			
			
			
		}else{
			
			/*  Inserting Item */
			
			$order_id=$this->session->userdata('temp_order_id');
			
			$data['o_id']=$order_id;
			
			$data['p_id']=$id;
			
			$data['price']=$price;
			
			$data['quantity']=$quantiy;
			
			$data['amount']=($price*$quantiy);
			
			$this->db->insert('tbl_item',$data);
			
			
			/*  Inserting Item */
			
			
			
		}

	
	
	
	
	}
	
	public function remove($id)
	{
		$this->db->set('status','1');
		$this->db->where('i_id',$id);
		$this->db->update('tbl_item');
		
		redirect('cart');
	}
	
	
	public function confirm($id,$total)
	{
		$this->db->set('status','1');
		$this->db->set('user_id',$this->session->userdata('uid'));
		$this->db->set('amount',$total);
		$this->db->where('id',$id);
		$this->db->update('tbl_order');
		
		$msg='<div class="alert alert-success">Order Added!</div>';
		
		$this->session->unset_userdata('temp_order_id');
		
		$this->session->set_flashdata('message',$msg);
		
		
		redirect('cart');
	}
	
	public function cancel($id)
	{
		$this->db->set('status','2');
		$this->db->where('id',$id);
		$this->db->where('delivery_status','Undelivered');
		$this->db->where('user_id',$this->session->userdata('uid'));
		$this->db->update('tbl_order');
		
		$msg='<div class="alert alert-danger">Order Cancel!</div>';
		
		$this->session->set_flashdata('message',$msg);
		
		
		redirect('order-list/cancelled');
	}
	
	public function reorder($id)
	{
		$this->db->set('status','1');
		$this->db->where('id',$id);
		$this->db->where('delivery_status','Undelivered');
		$this->db->where('user_id',$this->session->userdata('uid'));
		$this->db->update('tbl_order');
		
		$msg='<div class="alert alert-success">Order Readded!</div>';
		
		$this->session->set_flashdata('message',$msg);
		
		
		redirect('order-list');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_list extends CI_Controller {


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
			
		
		$query = $this->db->select('*');
		$query = $this->db->from('tbl_order');
		$query = $this->db->where('status',1);
		$query = $this->db->where('user_id',$this->session->userdata('uid'));
		$query = $this->db->get();
		
		
		$this->load->library('pagination');

			$config['base_url'] = site_url('Order_list/index');
			 $config['total_rows'] = $query->num_rows();
			 $config['per_page'] = 2;
			 $config['num_links'] = 2;
			 $config['full_tag_open'] = '<ul class="pagination no-margin">';
			 $config['full_tag_close'] = '</ul>';
			 $config['cur_tag_open'] = '<li class="active"><a href="">';
			 $config['cur_tag_close'] = '</a></li>';
			 $config['prev_tag_open'] = '<li>';
			 $config['prev_tag_close'] = '</li>';
			 $config['next_tag_open'] = '<li>';
			 $config['next_tag_close'] = '</li>';
			 $config['num_tag_open'] = '<li>';
			 $config['num_tag_close'] = '</li>';
			 $config['last_tag_open'] = '<li>';
			 $config['last_tag_close'] = '</li>';
			 $config['first_tag_open'] = '<li>';
			 $config['first_tag_close'] = '</li>';
			 $config['next_link'] = 'Next >';
			 $config['prev_link'] = '< Prev';

			 if ($this->uri->segment(3)) {
			 $data['segment'] = $this->uri->segment(3);
			 } else {
			 $data['segment'] = 0;
			 }
			$this->pagination->initialize($config);
			
			$query = $this->db->select('*');
			$query = $this->db->from('tbl_order');
			$query = $this->db->where('user_id',$this->session->userdata('uid'));
			$query = $this->db->where('status',1);
			$query = $this->db->limit($config['per_page'], $data['segment'])->order_by('id','desc');
			$query = $this->db->get();
			
		
		$o_data['order_data_list'] = $query->result_array();
			
		}else{
			
			$o_data['order_data_list'] = null;
		}
		
		
		
		$this->load->view('inc/head');
		$this->load->view('inc/navbar',$o_data);
		$this->load->view('order-list',$o_data);
		$this->load->view('inc/footer');
		$this->load->view('inc/foot');
	}
	
	
	public function cancelled()
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
			
		
		$query = $this->db->select('*');
		$query = $this->db->from('tbl_order');
		$query = $this->db->where('status',2);
		$query = $this->db->where('user_id',$this->session->userdata('uid'));
		$query = $this->db->get();
		
		
		$this->load->library('pagination');

			$config['base_url'] = site_url('Order_list/cancelled');
			 $config['total_rows'] = $query->num_rows();
			 $config['per_page'] = 10;
			 $config['num_links'] = 5;
			 $config['full_tag_open'] = '<ul class="pagination no-margin">';
			 $config['full_tag_close'] = '</ul>';
			 $config['cur_tag_open'] = '<li class="active"><a href="">';
			 $config['cur_tag_close'] = '</a></li>';
			 $config['prev_tag_open'] = '<li>';
			 $config['prev_tag_close'] = '</li>';
			 $config['next_tag_open'] = '<li>';
			 $config['next_tag_close'] = '</li>';
			 $config['num_tag_open'] = '<li>';
			 $config['num_tag_close'] = '</li>';
			 $config['last_tag_open'] = '<li>';
			 $config['last_tag_close'] = '</li>';
			 $config['first_tag_open'] = '<li>';
			 $config['first_tag_close'] = '</li>';
			 $config['next_link'] = 'Next >';
			 $config['prev_link'] = '< Prev';

			 if ($this->uri->segment(3)) {
			 $data['segment'] = $this->uri->segment(3);
			 } else {
			 $data['segment'] = 0;
			 }
			$this->pagination->initialize($config);
			
			$query = $this->db->select('*');
			$query = $this->db->from('tbl_order');
			$query = $this->db->where('status',2);
			$query = $this->db->where('user_id',$this->session->userdata('uid'));
			$query = $this->db->limit($config['per_page'], $data['segment'])->order_by('id','desc');
			$query = $this->db->get();
			
		
		$o_data['order_data_list'] = $query->result_array();
			
		}else{
			
			$o_data['order_data_list'] = null;
		}
		
		
		
		$this->load->view('inc/head');
		$this->load->view('inc/navbar',$o_data);
		$this->load->view('cancel-list',$o_data);
		$this->load->view('inc/footer');
		$this->load->view('inc/foot');
	}
	
	
	public function deliverred()
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
			
		
		$query = $this->db->select('*');
		$query = $this->db->from('tbl_order');
		$query = $this->db->where('status',1);
		$query = $this->db->where('delivery_status','Delivered');
		$query = $this->db->where('user_id',$this->session->userdata('uid'));
		$query = $this->db->get();
		
		
		$this->load->library('pagination');

			$config['base_url'] = site_url('Order_list/cancelled');
			 $config['total_rows'] = $query->num_rows();
			 $config['per_page'] = 10;
			 $config['num_links'] = 5;
			 $config['full_tag_open'] = '<ul class="pagination no-margin">';
			 $config['full_tag_close'] = '</ul>';
			 $config['cur_tag_open'] = '<li class="active"><a href="">';
			 $config['cur_tag_close'] = '</a></li>';
			 $config['prev_tag_open'] = '<li>';
			 $config['prev_tag_close'] = '</li>';
			 $config['next_tag_open'] = '<li>';
			 $config['next_tag_close'] = '</li>';
			 $config['num_tag_open'] = '<li>';
			 $config['num_tag_close'] = '</li>';
			 $config['last_tag_open'] = '<li>';
			 $config['last_tag_close'] = '</li>';
			 $config['first_tag_open'] = '<li>';
			 $config['first_tag_close'] = '</li>';
			 $config['next_link'] = 'Next >';
			 $config['prev_link'] = '< Prev';

			 if ($this->uri->segment(3)) {
			 $data['segment'] = $this->uri->segment(3);
			 } else {
			 $data['segment'] = 0;
			 }
			$this->pagination->initialize($config);
			
			$query = $this->db->select('*');
			$query = $this->db->from('tbl_order');
			$query = $this->db->where('status',1);
			$query = $this->db->where('user_id',$this->session->userdata('uid'));
			$query = $this->db->where('delivery_status','Delivered');
			$query = $this->db->limit($config['per_page'], $data['segment'])->order_by('id','desc');
			$query = $this->db->get();
			
		
		$o_data['order_data_list'] = $query->result_array();
			
		}else{
			
			$o_data['order_data_list'] = null;
		}
		
		
		
		$this->load->view('inc/head');
		$this->load->view('inc/navbar',$o_data);
		$this->load->view('deliverred-list',$o_data);
		$this->load->view('inc/footer');
		$this->load->view('inc/foot');
	}
}

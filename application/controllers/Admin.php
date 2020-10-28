<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	function __construct() {
		parent::__construct();
		
		if($this->session->userdata('utype')=='admin'){
			
			
		}else{
			redirect('login');
		}

	}


	
	public function index()
	{
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/admin');
		$this->load->view('admin/inc/footer');
		$this->load->view('admin/inc/foot');
	}
	
	public function add_product()
	{
		
		
		$this->form_validation->set_rules('product_name', 'Product Name', 'required|alpha_numeric_spaces');
		
		$this->form_validation->set_rules('product_price', 'Price', 'required|is_numeric|regex_match[/^[0-9.]+$/]');
		$this->form_validation->set_rules('tag', 'Tag is', 'required');
		$this->form_validation->set_rules('product_description', 'Description', 'required');



		if ($this->form_validation->run() == FALSE)
		{

			$this->load->view('admin/inc/head');
			$this->load->view('admin/inc/navbar');
			$this->load->view('admin/inc/sidebar');
			$this->load->view('admin/add-product');
			$this->load->view('admin/inc/footer');
			$this->load->view('admin/inc/foot');


		}else{

			$data['product_name']=$this->input->post('product_name');
			$data['product_price']=$this->input->post('product_price');
			$data['product_price']=$this->input->post('tag');
			$data['product_description']=nl2br($this->input->post('product_description'));

			
			

			
			$config['upload_path'] = './img/';
			$config['allowed_types'] = 'jpg|png|jpeg|JPG|PNG|JPEG|';
			$config['max_size'] = 50000;
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('picture')) {
				$this->session->set_flashdata('success', $this->upload->display_errors());
				return;
			} else {
				$avatar = $this->upload->data();
				$avatar_name = $avatar['file_name'];

			}

			$data['picture']=$avatar_name ;




			$config['image_library'] = 'gd2';
			$config['source_image'] = 'img/'.$data['picture'].'';
			$config['create_thumb'] = FALSE;
			$config['maintain_ratio'] = FALSE;
			$config['quality'] = '10%';
			$config['width']         = 1200;
			$config['height']       = 1486;


			$this->load->library('image_lib',$config);


			if ( ! $this->image_lib->resize())
			{
				echo $this->image_lib->display_errors();
			}


			$this->db->insert('tbl_product',$data);

			$this->session->set_flashdata('success','<div style="text-align:center;" class="alert alert-success">
				<strong>Successfully Inserted</strong></div>');

			redirect('Admin/add_product');

		}
		
		
	}
	
	
	public function edit_product($id)
	{
		
		
		$this->form_validation->set_rules('product_name', 'Product Name', 'required');
		$this->form_validation->set_rules('tag', 'Tag', 'required');
		$this->form_validation->set_rules('product_price', 'Price', 'required|is_numeric');
		$this->form_validation->set_rules('product_description', 'Description', 'required');

		

		if ($this->form_validation->run() == FALSE)
		{
			
			
			$s_data['productdata']=$this->db->where('p_id',$id)->get('tbl_product')->result_array();

			$this->load->view('admin/inc/head');
			$this->load->view('admin/inc/navbar');
			$this->load->view('admin/inc/sidebar');
			$this->load->view('admin/edit-product',$s_data);
			$this->load->view('admin/inc/footer');
			$this->load->view('admin/inc/foot');


		}else{

			$data['product_name']=$this->input->post('product_name');
			$data['tag']=$this->input->post('tag');
			$data['product_price']=$this->input->post('product_price');
			$data['product_description']=nl2br($this->input->post('product_description'));
			
			if($_FILES && $_FILES['picture']['name']){
				
				$config['upload_path'] = './img/';
				$config['allowed_types'] = 'jpg|png|jpeg|JPG|PNG|JPEG|';
				$config['max_size'] = 50000;
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('picture')) {
					$this->session->set_flashdata('success', $this->upload->display_errors());
					return;
				} else {
					$avatar = $this->upload->data();
					$avatar_name = $avatar['file_name'];

				}
				
				$data['picture']=$avatar_name ;
				

				$config['image_library'] = 'gd2';
				$config['source_image'] = 'img/'.$data['picture'].'';
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '10%';
				$config['width']         = 1200;
				$config['height']       = 1486;
				

				$this->load->library('image_lib',$config);
				
				
				if ( ! $this->image_lib->resize())
				{
					echo $this->image_lib->display_errors();
				}
				
				
			}

			$this->db->where('p_id',$id);
			$this->db->update('tbl_product',$data);

			$this->session->set_flashdata('success','<div style="text-align:center;" class="alert alert-success">
				<strong>Successfully Updated</strong></div>');

			redirect('Admin/edit_product/'.$id.'');

			


		}
		
		
	}
	
	
	public function add_news()
	{
		
		
		$this->form_validation->set_rules('news_subtitle', 'News Subtitle', 'required');
		$this->form_validation->set_rules('news_title', 'News Title', 'required');

		if ($this->form_validation->run() == FALSE)
		{

			$this->load->view('admin/inc/head');
			$this->load->view('admin/inc/navbar');
			$this->load->view('admin/inc/sidebar');
			$this->load->view('admin/add-news');
			$this->load->view('admin/inc/footer');
			$this->load->view('admin/inc/foot');


		}else{

			$data['news_subtitle']=$this->input->post('news_subtitle');
			$data['news_title']=$this->input->post('news_title');


			
			$config['upload_path'] = './img/';
			$config['allowed_types'] = 'jpg|png|jpeg|JPG|PNG|JPEG|';
			$config['max_size'] = 50000;
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('picture')) {
				$this->session->set_flashdata('success', $this->upload->display_errors());
				return;
			} else {
				$avatar = $this->upload->data();
				$avatar_name = $avatar['file_name'];

			}

			$data['file_path']=$avatar_name ;




			$config['image_library'] = 'gd2';
			$config['source_image'] = 'img/'.$data['file_path'].'';
			$config['create_thumb'] = FALSE;
			$config['maintain_ratio'] = FALSE;
			$config['quality'] = '60%';
			$config['width']         = 1500;
			$config['height']       = 844;


			$this->load->library('image_lib',$config);


			if ( ! $this->image_lib->resize())
			{
				echo $this->image_lib->display_errors();
			}


			$this->db->insert('tbl_news',$data);

			$this->session->set_flashdata('success','<div style="text-align:center;" class="alert alert-success">
				<strong>Successfully Added</strong></div>');

			redirect('Admin/add_news');

		}
		
		
	}
	
	public function view_product()
	{
		$this->load->library('pagination');

		$config['base_url'] = site_url('admin/view_product');
		$config['total_rows'] = $this->db->get('tbl_product')->num_rows();
		$config['per_page'] = 5;
		$config['num_links'] = 5;
		$config['full_tag_open'] = '<ul class="pagination no-margin">';
		$config['full_tag_close'] = '</ul>';
		$config['cur_tag_open'] = '<li class="active"><a href="/">';
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

		$query = $this->db->limit($config['per_page'], $data['segment'])->order_by('p_id','desc')->get('tbl_product');

		$data['products']=$query->result_array();

		
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/view-product',$data);
		$this->load->view('admin/inc/footer');
		$this->load->view('admin/inc/foot');
		
		
	}
	
	public function delete_product($id)
	{
		
		$this->db->where('p_id',$id);
		$this->db->delete('tbl_product');
		
		redirect('Admin/view_product');
	}
	
	
	public function view_user()
	{
		$this->load->library('pagination');

		$config['base_url'] = site_url('admin/view_user');
		$config['total_rows'] = $this->db->where('type','user')->get('tbl_user')->num_rows();
		$config['per_page'] = 5;
		$config['num_links'] = 5;
		$config['full_tag_open'] = '<ul class="pagination no-margin">';
		$config['full_tag_close'] = '</ul>';
		$config['cur_tag_open'] = '<li class="active"><a href="/">';
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

		$query = $this->db->where('type','user')->limit($config['per_page'], $data['segment'])->order_by('id','desc')->get('tbl_user');

		$data['users']=$query->result_array();

		
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/view-user',$data);
		$this->load->view('admin/inc/footer');
		$this->load->view('admin/inc/foot');
		
		
	}
	
	public function delete_user($id)
	{
		
		$this->db->where('id',$id);
		$this->db->delete('tbl_user');
		
		redirect('Admin/view_user');
	}
	
	
	public function view_news()
	{
		$this->load->library('pagination');

		$config['base_url'] = site_url('admin/view_product');
		$config['total_rows'] = $this->db->get('tbl_news')->num_rows();
		$config['per_page'] = 5;
		$config['num_links'] = 5;
		$config['full_tag_open'] = '<ul class="pagination no-margin">';
		$config['full_tag_close'] = '</ul>';
		$config['cur_tag_open'] = '<li class="active"><a href="/">';
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

		$query = $this->db->limit($config['per_page'], $data['segment'])->order_by('id','desc')->get('tbl_news');

		$data['products']=$query->result_array();

		
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/view-news',$data);
		$this->load->view('admin/inc/footer');
		$this->load->view('admin/inc/foot');
		
		
	}
	
	public function delete_news($id)
	{
		
		$this->db->where('id',$id);
		$this->db->delete('tbl_news');
		
		redirect('Admin/view_news');
	}
	
	
	public function setting()
	{
		
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|is_numeric');
		

		if ($this->form_validation->run() == FALSE)
		{
			
			$udata['user']= $this->db->where('id',$this->session->userdata('uid'))->get('tbl_user')->result_array();;

			$this->load->view('admin/inc/head');
			$this->load->view('admin/inc/navbar');
			$this->load->view('admin/inc/sidebar');
			$this->load->view('admin/setting',$udata);
			$this->load->view('admin/inc/footer');
			$this->load->view('admin/inc/foot');

		}else{
			$data['name']=$this->input->post('name');
			$data['email']=$this->input->post('email');
			$data['password']=md5($this->input->post('password'));
			$data['mobile']=$this->input->post('mobile');

			$this->db->set($data);
			$this->db->where('id',$this->session->userdata('uid'));
			$this->db->update('tbl_user');

			$this->session->set_flashdata('success','<div style="text-align:center;" class="alert alert-success">
				<strong>Successfully Updated</strong></div>');

			redirect('admin/setting');
		}


	}
	
	
	public function view_pen_order()
	{
		$this->load->library('pagination');

		$query=$this->db->select('*');
		$query=$this->db->from('tbl_order');
		$query=$this->db->join('tbl_user','tbl_user.id=tbl_order.user_id');
		$query=$this->db->where('delivery_status','Undelivered');
		$query=$this->db->where('tbl_order.status','1');
		$query=$this->db->get();

		$config['base_url'] = site_url('admin/view_pen_order');
		$config['total_rows'] = $query->num_rows();
		$config['per_page'] = 5;
		$config['num_links'] = 5;
		$config['full_tag_open'] = '<ul class="pagination no-margin">';
		$config['full_tag_close'] = '</ul>';
		$config['cur_tag_open'] = '<li class="active"><a href="/">';
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

		$query=$this->db->select('*,tbl_order.id as o_id');
		$query=$this->db->from('tbl_order');
		$query=$this->db->join('tbl_user','tbl_user.id=tbl_order.user_id');

		$query=$this->db->where('delivery_status','Undelivered');
		$query=$this->db->where('tbl_order.status','1');

		$query = $this->db->limit($config['per_page'], $data['segment'])->order_by('tbl_order.id','desc')->get();

		$data['products']=$query->result_array();

		
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/view-pending',$data);
		$this->load->view('admin/inc/footer');
		$this->load->view('admin/inc/foot');
		
		
	}
	
	public function set_delievred($id)
	{
		
		$this->db->where('id',$id);
		$this->db->set('delivery_status','Delivered');
		$this->db->update('tbl_order');
		
		redirect('Admin/view_pen_order');
	}
	
	
	public function view_deli_order()
	{
		$this->load->library('pagination');

		$query=$this->db->select('*');
		$query=$this->db->from('tbl_order');
		$query=$this->db->join('tbl_user','tbl_user.id=tbl_order.user_id');

		$query=$this->db->where('delivery_status','Delivered');
		$query=$this->db->where('tbl_order.status','1');
		$query=$this->db->get();

		$config['base_url'] = site_url('admin/view_pen_order');
		$config['total_rows'] = $query->num_rows();
		$config['per_page'] = 5;
		$config['num_links'] = 5;
		$config['full_tag_open'] = '<ul class="pagination no-margin">';
		$config['full_tag_close'] = '</ul>';
		$config['cur_tag_open'] = '<li class="active"><a href="/">';
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

		$query=$this->db->select('*,tbl_order.id as o_id');
		$query=$this->db->from('tbl_order');
		$query=$this->db->join('tbl_user','tbl_user.id=tbl_order.user_id');
		$query=$this->db->where('delivery_status','Delivered');
		$query=$this->db->where('tbl_order.status','1');

		$query = $this->db->limit($config['per_page'], $data['segment'])->order_by('tbl_order.id','desc')->get();

		$data['products']=$query->result_array();

		
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/view-delivered',$data);
		$this->load->view('admin/inc/footer');
		$this->load->view('admin/inc/foot');
		
		
	}
	
	public function set_undelievred($id)
	{
		
		$this->db->where('id',$id);
		$this->db->set('delivery_status','Undelivered');
		$this->db->update('tbl_order');
		
		redirect('Admin/view_deli_order');
	}
	
	public function view_cancel_order()
	{
		
		$this->load->library('pagination');
		
		
		$query=$this->db->select('*');
		$query=$this->db->from('tbl_order');
		$query=$this->db->join('tbl_user','tbl_user.id=tbl_order.user_id');
		$query=$this->db->where('delivery_status','Undelivered');
		$query=$this->db->where('tbl_user.status','2');
		$query=$this->db->get();

		$config['base_url'] = site_url('admin/view_pen_order');
		$config['total_rows'] = $query->num_rows();
		$config['per_page'] = 5;
		$config['num_links'] = 5;
		$config['full_tag_open'] = '<ul class="pagination no-margin">';
		$config['full_tag_close'] = '</ul>';
		$config['cur_tag_open'] = '<li class="active"><a href="/">';
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

		$query=$this->db->select('*,tbl_order.id as o_id');
		$query=$this->db->from('tbl_order');
		$query=$this->db->join('tbl_user','tbl_user.id=tbl_order.user_id');
		$query=$this->db->where('delivery_status','Undelivered');
		$query=$this->db->where('tbl_user.status','2');

		$query = $this->db->limit($config['per_page'], $data['segment'])->order_by('tbl_order.id','desc')->get();

		$data['products']=$query->result_array();
	
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/view-cancel',$data);
		$this->load->view('admin/inc/footer');
		$this->load->view('admin/inc/foot');
	}


	public function cancel($id)
	{
		$this->db->set('status','2');
		$this->db->where('id',$id);
		$this->db->update('tbl_order');
		$msg='<div class="alert alert-danger">Order Cancel!</div>';
		$this->session->set_flashdata('message',$msg);
		redirect('Admin/view_pen_order');
	}
	
	
	
}

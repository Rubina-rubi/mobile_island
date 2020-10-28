<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUp extends CI_Controller {


	public function index()
	{
		
		
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_user.email]');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('v_password', 'Confirm Password', 'required|matches[password]');
			$this->form_validation->set_rules('mobile', 'Mobile', 'required|is_numeric');
			$this->form_validation->set_rules('address', 'address', 'required');
	
			if ($this->form_validation->run() == FALSE)
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
		
		
		
		$this->load->view('inc/head');
		$this->load->view('inc/navbar',$o_data);
				$this->load->view('signup');
				$this->load->view('inc/footer');
				$this->load->view('inc/foot');
				
			}else{
				
				
					
					$data['name']=$this->input->post('name');
					$data['email']=$this->input->post('email');
					$data['password']=md5($this->input->post('password'));
					$data['mobile']=$this->input->post('mobile');
					$data['address']=$this->input->post('address');
					
					$data['type']='user';
					
					$this->db->insert('tbl_user',$data);
					
					$msg='<div class="alert alert-success">Congratulation Your Account Created. Please Login </div>';
					
					$this->session->set_flashdata('message',$msg);
					
					redirect('Signup');
				
				
				
				
			}
		
		
		
		
		
		
		
	}
}

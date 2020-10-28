<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogIn extends CI_Controller {


	public function index()
	{
		
		if($this->session->userdata('utype')=='admin'){
			
			
		}else if($this->session->userdata('utype')=='user'){
			
			
		}
		
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required');
			
	
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
				$this->load->view('login');
				$this->load->view('inc/footer');
				$this->load->view('inc/foot');
				
			}else{
				
				
				$data['email']=$this->input->post('email');
				$data['password']=md5($this->input->post('password'));
	
				
				$userdata=$this->db->where('email',$data['email'])->where('password',$data['password'])->get('tbl_user')->result_array();
				
				if($userdata){
					
					
				$s_data['utype']=$userdata[0]['type'];
				$s_data['uid']=$userdata[0]['id'];
				
				$this->session->set_userdata($s_data);
				
				// echo $this->session->userdata('uid');
				
				if($this->session->userdata('utype')=='admin'){
					
					redirect('Admin');
					
				}else{
					
					redirect('welcome');
				}
				
					
				}else{
					
				$msg='<div class="alert alert-danger">Invalid Username or Password </div>';
				
				$this->session->set_flashdata('message',$msg);
				
				redirect('Login');
				
					
				}
					
					
					
			}
		
	}
}

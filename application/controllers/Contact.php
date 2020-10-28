<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {



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
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('message', 'message', 'required');
		
	
			if ($this->form_validation->run() == FALSE)
			{
				
					$this->load->view('inc/head');
		$this->load->view('inc/navbar',$o_data);
		$this->load->view('contact');
		$this->load->view('inc/footer');
		$this->load->view('inc/foot');
				
			}else{
				
				
					
				


				$data['email']=$this->input->post('email');
				$data['message']=$this->input->post('message');
				$this->db->insert('contact',$data);

				$this->session->set_flashdata('success','<div style="text-align:center;" class="alert alert-success">
				<strong>thanks for your message</strong></div>');

				redirect('Contact');

				
					
				
				
			}
	
		
		
		
	
	}

	
	
	}

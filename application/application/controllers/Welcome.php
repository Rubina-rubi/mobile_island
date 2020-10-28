<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		if($this->uri->segment(3)){
			
			$current=$this->uri->segment(3);
			
		}else{
			
			$current=12;
		}
		
		$data['product'] = $this->db->limit($current,0)->order_by('p_id','desc')->get('tbl_product')->result_array();
		
		$data['news'] = $this->db->limit(3)->order_by('id','desc')->get('tbl_news')->result_array();
		
		$data['tag'] = $this->db->group_by('tag')->get('tbl_product')->result_array();
		
		$data['current'] =$current;
		
		
		if($this->session->userdata('temp_order_id')){
			
		/***** all data of cart *******/
		
		
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
		
			/***** all data of cart *******/
		
		$query = $this->db->get('tbl_product');
		
		$data['result']=$query->result_array();
		
		foreach($data['result'] as $row){
			
			$o_data['rating'][$row['p_id']]=$this->db->select('FLOOR(AVG(rating)) AS rate')->where('p_id',$row['p_id'])->get('tbl_rating')->result_array();
		}
		
		
		
		$this->load->view('inc/head');
		$this->load->view('inc/navbar',$o_data);
		$this->load->view('home',$data);
		$this->load->view('inc/footer');
		$this->load->view('inc/foot');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

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
			////////////////////////////  temail834@gmail.com/////////////////////////
		// /////////////////////////// ra123456///////////////////////////////////////

	}
	
	
	public function card($order_id,$total)
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
	
	
	//payment
	
	
	if(!empty($_POST['stripeToken'])){
    //get token, card and user info from the form
    $token  = $_POST['stripeToken'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $card_num = $_POST['card_num'];
    $card_cvc = $_POST['cvc'];
    $card_exp_month = $_POST['exp_month'];
    $card_exp_year = $_POST['exp_year'];
    
    //include Stripe PHP library
    require_once('stripe-php/init.php');
    
    //set api key
    $stripe = array(
      "secret_key"      => "sk_test_j7ArHj53KsnkI3ZvMb1saa10",
      "publishable_key" => "pk_test_PHMGckKQ0YSa7YVl9NJrNP8l"
    );
    
    \Stripe\Stripe::setApiKey($stripe['secret_key']);
    
    //add customer to stripe
    $customer = \Stripe\Customer::create(array(
        'email' => $email,
        'source'  => $token
    ));
    // echo $total;
    //item information
    $itemName = "tesr";
    $itemNumber = "PS123456";
    $itemPrice = $total;
    $currency = "usd";
    $orderID = "SKA92712382139";
    
    //charge a credit or a debit card
    $charge = \Stripe\Charge::create(array(
        'customer' => $customer->id,
        'amount'   => $itemPrice,
        'currency' => $currency,
        'description' => $itemName,
        'metadata' => array(
            'order_id' => $orderID
        )
    ));
    
    //retrieve charge details
    $chargeJson = $charge->jsonSerialize();

    //check whether the charge is successful
    if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1){
        //order details 
        $amount = $chargeJson['amount'];
        $balance_transaction = $chargeJson['balance_transaction'];
        $currency = $chargeJson['currency'];
        $status = $chargeJson['status'];
        $date = date("Y-m-d H:i:s");
		
		//  temail834@gmail.com
		//  ra123456


		 // update order on database // 
		 
		 
		$this->db->where('id',$order_id);
		$this->db->set('user_id',$this->session->userdata('uid'));
		$this->db->set('status','1');
		$this->db->set('trx_id',$balance_transaction);
		$this->db->set('amount',$total);
		$this->db->set('payment','CARD');
		$this->db->update('tbl_order');
		
		$msg='<div class="alert alert-success">Order Added & payment Cleared!</div>';
		
		$this->session->unset_userdata('temp_order_id');
		
		$this->session->set_flashdata('message',$msg);
		
		
		 redirect('cart');
		 
		 
		 
		 
		 
        
        //include database config file
        // include_once 'dbConfig.php';
        
        //insert tansaction data into the database
        // $sql = "INSERT INTO orders(name,email,card_num,card_cvc,card_exp_month,card_exp_year,item_name,item_number,item_price,item_price_currency,paid_amount,paid_amount_currency,txn_id,payment_status,created,modified) VALUES('".$name."','".$email."','".$card_num."','".$card_cvc."','".$card_exp_month."','".$card_exp_year."','".$itemName."','".$itemNumber."','".$itemPrice."','".$currency."','".$amount."','".$currency."','".$balance_transaction."','".$status."','".$date."','".$date."')";
        // $insert = $db->query($sql);
        // $last_insert_id = $db->insert_id;
        
        //if order inserted successfully
        // if($last_insert_id && $status == 'succeeded'){
            // $statusMsg = "<h2>The transaction was successful.</h2><h4>Order ID: {$last_insert_id}</h4>";
        // }else{
            // $statusMsg = "Transaction has been failed";
        // }
    }else{
        $statusMsg = "Transaction has been failed";
    }
	
		//payment
	
	$this->session->set_flashdata('message',$statusMsg);
}
//show success or error message



// 'temail834@gmail.com';          // SMTP username
 // 'ra123456';     // SMTP password
		
		$this->load->view('inc/head');
		$this->load->view('inc/navbar',$o_data);
		$this->load->view('payment2');
		$this->load->view('inc/footer');
		$this->load->view('inc/foot');
	}
}

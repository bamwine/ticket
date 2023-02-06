<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Stripe_model extends CI_Model {

    function __construct() {
        parent::__construct();

        $this->load->library('stripegateway');
    }

     function pay() {
		$statusMsg =''; 
        if (isset($_POST['stripeToken'])&& !empty($this->input->post('stripeToken'))) {

			$data['stripe_token']    = $this->input->post('stripeToken');
			$data['amount']          = $this->input->post('total');
			$data['client_email']    = $this->input->post('email');
			$data['client_card']     = $this->input->post('card_num');
			
             require_once(APPPATH . 'libraries/stripe-php/init.php');
            $stripe_api_key = $this->db->get_where('settings' , array('type' => 'stripe_api_key'))->row()->description;
            \Stripe\Stripe::setApiKey($stripe_api_key); //system payment settings
           
                //if (!isset($_POST['stripeToken']))
                  //  throw new Exception("The Stripe Token was not generated correctly");

                $currency_id          = $this->db->get_where('settings', array('type' => 'system_currency_id'))->row()->description;
                $currency_code        = $this->db->get_where('currency', array('currency_id' => $currency_id))->row()->currency_code;
               

                $charge = \Stripe\Charge::create(array(
                    'source'      => $data['stripe_token'],
                    'amount'      => $data['amount'],
                    'currency'    => $currency_code,
					'description' => 'Test payment from Oaksoft tech '
                ));
				
			$chargeJson = $charge->jsonSerialize();
			
			$amount                  = $chargeJson['amount'];
			$balance_transaction     = $chargeJson['balance_transaction'];
			$currency                = $chargeJson['currency'];
			$status                  = $chargeJson['status'];              


			
            if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1){ 
            // Order details  
            $transactionID = $chargeJson['balance_transaction']; 
            $currency = $chargeJson['currency']; 
            $payment_status = $chargeJson['status'];

              $insert_data = array(
                    'name'                  => $this->input->post('username'),
                    'email'                 => $this->input->post('email'),
                    'card_num'              => $this->input->post('card_num'),
                    'card_cvc'              => $this->input->post('card-cvc'),
                    'card_exp_month'        => $this->input->post('card_exp_month'),
                    'card_exp_year'         => $this->input->post('card_exp_year'),
                    'item_name'             => $item_name,
                    'item_number'           => $item_number,
                    'item_price'            => $item_price,
                    'item_price_currency'   => $currency,
                    'paid_amount'           => $amount,
                    'paid_amount_currency'  => $currency,
                    'payment_status'        => $status,
                    'created_by'            => 1,
                    'created_date'          => date('Y-m-d H:i:s')
                     );
        
        
					$rowdata =$this->db->insert('orders',$insert_data);

             // If the order is successful 
            if($payment_status == 'succeeded') { 
                $statusMsg .= '<h2>Thanks for your Order!</h2>';
                $statusMsg .= '<h4>The transaction was successful. Order details are given below:</h4>';
                $statusMsg .= "<p>Order Number: {$orderID}</p>";
                $statusMsg .= "<p>Transaction ID: {$transactionID}</p>";
                $statusMsg .= "<p>Order Total: {$amount} {$currency}</p>";

            }else{ 
                $statusMsg = "Your Payment has Failed!"; 
				
            } 

            } else { 
                $statusMsg = "Transaction has been failed!"; 
				
            }
			
         } 
		 else { 
            $statusMsg = "Error on form submission."; 
			
        }    
        //$this->session->set_flashdata('paymentMsg', $statusMsg);
		return $statusMsg;
		
		
    }

}

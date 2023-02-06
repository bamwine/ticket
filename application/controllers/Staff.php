<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// *************************************************************************
// *                                                                       *
// *                                                                       *
// * Copyright (c) OAKSOFT TECHNOLOGIES. All Rights Reserved               *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * Email: bamwinealbert@gmail.com                                        *
// * Website: http://generationatech.com								   *
// * 		  						                                       *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * This software is furnished under a license and may be used and copied *
// * only  in  accordance  with  the  terms  of such  license and with the *
// * inclusion of the above copyright notice.                              *
// *                                                                       *
// *************************************************************************

//LOCATION : application - controller - Teacher.php


class Staff extends CI_Controller
{
    
    
    function __construct()
    {
        parent::__construct();
		$this->load->database();
        $this->load->library('session');
        /*cache control*/
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    }
    
    /***default functin, redirects to login page if no staff logged in yet***/
    public function index()
    {
        if ($this->session->userdata('staff_login') != 1)
            redirect(base_url() . 'login', 'refresh');
        if ($this->session->userdata('staff_login') == 1)
            redirect(base_url() . 'staff/dashboard', 'refresh');
    }
    
    /***TEACHER DASHBOARD***/
    function dashboard()
    {
        if ($this->session->userdata('staff_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'dashboard';
        $page_data['page_title'] = get_phrase('Staff_dashboard');
        $this->load->view('backend/index', $page_data);
    }
    
    
    
	
    
    /******MANAGE OWN PROFILE AND CHANGE PASSWORD***/
    function manage_profile($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('staff_login') != 1)
            redirect(base_url() . 'login', 'refresh');
        if ($param1 == 'update_profile_info') {
            $data['name']        = $this->input->post('name');
            $data['email']       = $this->input->post('email');
            
            $this->db->where('staff_id', $this->session->userdata('staff_id'));
            $this->db->update('staff', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/staff_image/' . $this->session->userdata('staff_id') . '.jpg');
            $this->session->set_flashdata('flash_message', get_phrase('account_updated'));
            redirect(base_url() . 'staff/manage_profile/', 'refresh');
        }
       if ($param1 == 'change_password') {
            $data['password']             = sha1($this->input->post('password'));
            $data['new_password']         = sha1($this->input->post('new_password'));
            $data['confirm_new_password'] = sha1($this->input->post('confirm_new_password'));
            
            $current_password = $this->db->get_where('staff', array(
                'staff_id' => $this->session->userdata('staff_id')
            ))->row()->password;
            if ($current_password == $data['password'] && $data['new_password'] == $data['confirm_new_password']) {
                $this->db->where('staff_id', $this->session->userdata('staff_id'));
                $this->db->update('staff', array(
                    'password' => $data['new_password']
                ));
                $this->session->set_flashdata('flash_message', get_phrase('password_updated'));
            } else {
                $this->session->set_flashdata('error_message', get_phrase('password_mismatch'));
            }
            redirect(base_url() . 'staff/manage_profile/', 'refresh');
        }
        $page_data['page_name']  = 'manage_profile';
        $page_data['page_title'] = get_phrase('manage_profile');
        $page_data['edit_data']  = $this->db->get_where('staff', array(
            'staff_id' => $this->session->userdata('staff_id')
        ))->result_array();
        $this->load->view('backend/index', $page_data);
    }
    

    
    /***MANAGE EVENT / NOTICEBOARD, WILL BE SEEN BY ALL ACCOUNTS DASHBOARD**/
    function noticeboard($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('staff_login') != 1)
            redirect(base_url(), 'refresh');
        
        if ($param1 == 'create') {
            $data['notice_title']     = $this->input->post('notice_title');
            $data['notice']           = $this->input->post('notice');
            $data['create_timestamp'] = strtotime($this->input->post('create_timestamp'));
            $this->db->insert('noticeboard', $data);
            redirect(base_url() . 'staff/noticeboard/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['notice_title']     = $this->input->post('notice_title');
            $data['notice']           = $this->input->post('notice');
            $data['create_timestamp'] = strtotime($this->input->post('create_timestamp'));
            $this->db->where('notice_id', $param2);
            $this->db->update('noticeboard', $data);
            $this->session->set_flashdata('flash_message', get_phrase('notice_updated'));
            redirect(base_url() . 'staff/noticeboard/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('noticeboard', array(
                'notice_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('notice_id', $param2);
            $this->db->delete('noticeboard');
            redirect(base_url() . 'staff/noticeboard/', 'refresh');
        }
        $page_data['page_name']  = 'noticeboard';
        $page_data['page_title'] = get_phrase('manage_noticeboard');
        $page_data['notices']    = $this->db->get('noticeboard')->result_array();
        $this->load->view('backend/index', $page_data);
    }
    
	
	
    
  
    
    /* private messaging */

    function message($param1 = 'message_home', $param2 = '', $param3 = '') {
        if ($this->session->userdata('staff_login') != 1)
        {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
        }
		$max_size = 2097152;

        if ($param1 == 'send_new') {
		
		if (!file_exists('uploads/private_messaging_attached_file/')) 
			{
                $oldmask = umask(0);  // helpful when used in linux server
                mkdir ('uploads/private_messaging_attached_file/', 0777);
            }
            if ($_FILES['attached_file_on_messaging']['name'] != "") 
			{
                if($_FILES['attached_file_on_messaging']['size'] > $max_size)
				{
                    $this->session->set_flashdata('error_message' , get_phrase('file_size_can_not_be_larger_that_2_Megabyte'));
                    redirect(base_url() . 'staff/message/message_new/', 'refresh');
                }
                else
				{
                    $file_path = 'uploads/private_messaging_attached_file/'.$_FILES['attached_file_on_messaging']['name'];
                    move_uploaded_file($_FILES['attached_file_on_messaging']['tmp_name'], $file_path);
                }
            }
			
            $message_thread_code = $this->crud_model->send_new_private_message();
            $this->session->set_flashdata('flash_message', get_phrase('message_sent!'));
            redirect(base_url() . 'staff/message/message_read/' . $message_thread_code, 'refresh');
        }

        if ($param1 == 'send_reply') {
		
		if (!file_exists('uploads/private_messaging_attached_file/')) 
			{
                $oldmask = umask(0);  // helpful when used in linux server
                mkdir ('uploads/private_messaging_attached_file/', 0777);
            }
            if ($_FILES['attached_file_on_messaging']['name'] != "") 
			{
                if($_FILES['attached_file_on_messaging']['size'] > $max_size)
				{
                    $this->session->set_flashdata('error_message' , get_phrase('file_size_can_not_be_larger_that_2_Megabyte'));
                    redirect(base_url() . 'staff/message/message_read/' . $param2, 'refresh');
                }
                else
				{
                    $file_path = 'uploads/private_messaging_attached_file/'.$_FILES['attached_file_on_messaging']['name'];
                    move_uploaded_file($_FILES['attached_file_on_messaging']['tmp_name'], $file_path);
                }
            }
			
            $this->crud_model->send_reply_message($param2);  //$param2 = message_thread_code
            $this->session->set_flashdata('flash_message', get_phrase('message_sent!'));
            redirect(base_url() . 'staff/message/message_read/' . $param2, 'refresh');
        }

        if ($param1 == 'message_read') {
            $page_data['current_message_thread_code'] = $param2;  // $param2 = message_thread_code
            $this->crud_model->mark_thread_messages_read($param2);
        }

        $page_data['message_inner_page_name']   = $param1;
        $page_data['page_name']                 = 'message';
        $page_data['page_title']                = get_phrase('private_messaging');
        $this->load->view('backend/index', $page_data);
    }
	
	
	
	//GROUP MESSAGE
    function group_message($param1 = "group_message_home", $param2 = ""){
      if ($this->session->userdata('staff_login') != 1)
          redirect(base_url(), 'refresh');
      $max_size = 2097152;

      if ($param1 == 'group_message_read') {
        $page_data['current_message_thread_code'] = $param2;
      }
      else if($param1 == 'send_reply'){
        if (!file_exists('uploads/group_messaging_attached_file/')) {
          $oldmask = umask(0);  // helpful when used in linux server
          mkdir ('uploads/group_messaging_attached_file/', 0777);
        }
        if ($_FILES['attached_file_on_messaging']['name'] != "") {
          if($_FILES['attached_file_on_messaging']['size'] > $max_size){
            $this->session->set_flashdata('error_message' , get_phrase('file_size_can_not_be_larger_that_2_Megabyte'));
              redirect(site_url('staff/group_message/group_message_read/'.$param2), 'refresh');
          }
          else{
            $file_path = 'uploads/group_messaging_attached_file/'.$_FILES['attached_file_on_messaging']['name'];
            move_uploaded_file($_FILES['attached_file_on_messaging']['tmp_name'], $file_path);
          }
        }

        $this->crud_model->send_reply_group_message($param2);  //$param2 = message_thread_code
        $this->session->set_flashdata('flash_message', get_phrase('message_sent!'));
          redirect(site_url('staff/group_message/group_message_read/'.$param2), 'refresh');
      }
      $page_data['message_inner_page_name']   = $param1;
      $page_data['page_name']                 = 'group_message';
      $page_data['page_title']                = get_phrase('group_messaging');
      $this->load->view('backend/index', $page_data);
    }
	
	
	// This function call from AJAX
	function generalMessageDelete($general_message_id) {
	$this->db->where('general_message_id', $general_message_id);
        	$this->db->delete('general_message');
        			redirect(base_url() . 'staff/dashboard', 'refresh');
	
	}
	
	// This function call from AJAX
	function deleteMessageFunction($message_id, $message_thread_code) {
	$this->db->where('message_id', $message_id);
        	$this->db->delete('message');
        			redirect(base_url() . 'staff/message/message_read/'.$message_thread_code , 'refresh');
	
	}

	
	
	// This function call from AJAX
	function deleteMessageFunctionGroup($group_message_id, $group_message_thread_code) {
	$this->db->where('group_message_id', $group_message_id);
        	$this->db->delete('group_message');
        			redirect(base_url() . 'staff/group_message/group_message_read/'.$group_message_thread_code , 'refresh');
	
	}
	
	

  /*********MANAGE  BOOKINGS************/
    function bookings($task = "", $param1 = "")
    {
        if ($this->session->userdata('staff_login') != 1)
        {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
        }
                
        if ($task == "createss")
        {
           	$statusMsg =''; 
        if (isset($_POST['stripeToken'])&& !empty($this->input->post('stripeToken'))) {

			$data['stripe_token']    = $this->input->post('stripeToken');
			$data['amount']          = $this->input->post('total');
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
				$this->session->set_flashdata('flash_message', $statusMsg);
		
            } 

            } else { 
                $statusMsg = "Transaction has been failed!"; 
				$this->session->set_flashdata('flash_message', $statusMsg);
		
            }
         } else { 
            $statusMsg = "Error on form submission."; 
			$this->session->set_flashdata('flash_message', $statusMsg);
		
        }    
        
		
            //$this->session->set_flashdata('flash_message' , get_phrase('booking_saved_successfuly'));
            redirect(base_url() . 'staff/bookings' , 'refresh');
        }
		
		
		 if ($task == "create")
        {
			 if ($this->input->post('paymethod')=='cash' && !empty($this->input->post('paymethod'))) {
			
            $this->crud_model->save_bookings_info();					
            $this->session->set_flashdata('flash_message' , get_phrase('booking_saved_successfuly'));
			 redirect(base_url() . 'staff/bookings' , 'refresh');
			 
			 }
			 
		else{
				 

	      $statusMsg =''; 
        if (isset($_POST['stripeToken'])&& !empty($this->input->post('stripeToken'))) {

			$data['stripe_token']    = $this->input->post('stripeToken');
			$data['amount']          = $this->input->post('ftotal');
			require_once(APPPATH . 'libraries/stripe-php/init.php');
            $stripe_api_key = $this->db->get_where('settings' , array('type' => 'stripe_api_key'))->row()->description;
            \Stripe\Stripe::setApiKey($stripe_api_key); //system payment settings
           
                //if (!isset($_POST['stripeToken']))
                  //  throw new Exception("The Stripe Token was not generated correctly");

                $currency_code          = $this->db->get_where('settings', array('type' => 'currency'))->row()->description;
                

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


			
            if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1)
			{ 
            // Order details  
            $transactionID  = $chargeJson['balance_transaction']; 
            $currency       = $chargeJson['currency']; 
            $payment_status = $chargeJson['status'];

              $insert_data = array(
                    'name'                  => $this->input->post('username'),
                    'email'                 => $this->input->post('email'),
                    'card_num'              => $this->input->post('card_num'),
                    'card_cvc'              => $this->input->post('card_cvc'),
                    'card_exp_month'        => $this->input->post('card_exp_month'),
                    'card_exp_year'         => $this->input->post('card_exp_year'),
                    'item_name'             => $item_name,
                    'item_number'           => $item_number,
                    'item_price'            => $item_price,
                    'item_price_currency'   => $currency,
                    'paid_amount'           => $amount,
                    'paid_amount_currency'  => $currency,
                    'payment_status'        => $status,
					'txn_id'                => $transactionID,	
                    'created_by'            => 1,
                    'created_date'          => date('Y-m-d H:i:s')
                     );
        
        
					$this->db->insert('orders',$insert_data);
					$this->crud_model->save_bookings_info_stripe();

             // If the order is successful 
            if($payment_status == 'succeeded') { 
                $statusMsg .= '<h2>Thanks for your Order!</h2>';
                $statusMsg .= '<h4>The transaction was successful. Order details are given below:</h4>';
                $statusMsg .= "<p>Order Number: {$orderID}</p>";
                $statusMsg .= "<p>Transaction ID: {$transactionID}</p>";
                $statusMsg .= "<p>Order Total: {$amount} {$currency}</p>";

            }else{ 
                $statusMsg = "Your Payment has Failed!"; 
				$this->session->set_flashdata('flash_message', $statusMsg);
		
            } 

            } else { 
			
                $statusMsg = "Transaction has been failed!"; 
				$this->session->set_flashdata('flash_message', $statusMsg);
		
            }
         } else { 
            $statusMsg = "Error on form submission."; 
			$this->session->set_flashdata('flash_message', $statusMsg);
		
        }    
        				 
             redirect(base_url() . 'staff/bookings' , 'refresh'); 
				 
			 }
        }
        
        if ($task == "update")
        {
			 if ($param1 == "pay")
			{
				
			$this->crud_model->update_bookings_pay();
			$this->session->set_flashdata('flash_message' , get_phrase('booking_info_updated_successfuly'));
			//http://localhost/ticket/staff/ticket2/MVA0Mk9NMUNjc2tVSE5KUG1iM24xUT09
			redirect(base_url() . 'staff/bookings' , 'refresh');
			
			}
		
        }
        
        if ($task == "delete")
        {
            $this->crud_model->delete_bookings_info($param1);
            redirect(base_url() . 'staff/bookings');
        }
        
        $data['bookings']    = $this->crud_model->get_bookings_info();
		$data['flightschedule']    = $this->crud_model->get_flightschedule_info();
        $data['page_name']              = 'booking';
        $data['page_title']             = get_phrase('booking');
		           
        $this->load->view('backend/index', $data);
    }	
	
	
	
  /*********MANAGE  SCHEDULE************/
    function flightschedule($task = "", $flight_no = "")
    {
        if ($this->session->userdata('staff_login') != 1)
        {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
        }
         $flight_no = h_encrypt_decrypt($flight_no,'decrypt');        
        if ($task == "create")
        {
            $this->crud_model->save_flightschedule_info();
            $this->session->set_flashdata('flash_message' , get_phrase('flight_schedule_saved_successfuly'));
            redirect(base_url() . 'staff/flightschedule' , 'refresh');
        }
        
        if ($task == "update")
        {
            $this->crud_model->update_flightschedule_info($flight_no);
            $this->session->set_flashdata('flash_message' , get_phrase('flight_schedule_info_updated_successfuly'));
            redirect(base_url() . 'staff/flightschedule' , 'refresh');
        }
        
		
        if ($task == "delete")
        {
            $this->crud_model->delete_flightschedule_info($flight_no);
            redirect(base_url() . 'staff/flightschedule');
        }
		
		if ($task == "savep")
        {
            $this->crud_model->save_flights_types_price();
            redirect(base_url() . 'staff/flightschedule');
        }
        
        $data['flightschedule']    = $this->crud_model->get_flightschedule_info();
        $data['page_name']              = 'flightschedule';
        $data['page_title']             = get_phrase('ADD FLIGHT SCHEDULE ');
        $this->load->view('backend/index', $data);
    }	
	
	
	/*********MANAGE  AIRCRAFTS************/
    function flightaircrafts($task = "", $jet_id = "")
    {
        if ($this->session->userdata('staff_login') != 1)
        {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
        }
           $jet_id = h_encrypt_decrypt($jet_id,'decrypt');       
        if ($task == "create")
        {
            $this->crud_model->save_aircraft_info();
            $this->session->set_flashdata('flash_message' , get_phrase('aircraft_saved_successfuly'));
            redirect(base_url() . 'staff/flightaircrafts' , 'refresh');
        }
        
        if ($task == "update")
        {
            $this->crud_model->update_aircraft_info($jet_id);
            $this->session->set_flashdata('flash_message' , get_phrase('aircraft_info_updated_successfuly'));
            redirect(base_url() . 'staff/flightaircrafts' , 'refresh');
        }
        
        if ($task == "delete")
        {
            $this->crud_model->delete_aircraft_info($jet_id);
            redirect(base_url() . 'staff/flightaircrafts');
        }
        
        $data['flightaircrafts']    = $this->crud_model->get_aircraft_info();
        $data['page_name']              = 'flightaircrafts';
        $data['page_title']             = get_phrase('ADD AIRCRAFTS DETAILS');
        $this->load->view('backend/index', $data);
    }	
	
	
		/*********FLIGHT ROUTES************/
    function flightroutes($task = "", $route_id = "")
    {
        if ($this->session->userdata('staff_login') != 1)
        {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
        }
           $route_id = h_encrypt_decrypt($route_id,'decrypt');       
        if ($task == "create")
        {
            $this->crud_model->save_flightroutes_info();
            $this->session->set_flashdata('flash_message' , get_phrase('flightroutes_saved_successfuly'));
            redirect(base_url() . 'staff/flightroutes' , 'refresh');
        }
        
        if ($task == "update")
        {
            $this->crud_model->update_flightroutes_info($route_id);
            $this->session->set_flashdata('flash_message' , get_phrase('flightroutes_info_updated_successfuly'));
            redirect(base_url() . 'staff/flightroutes' , 'refresh');
        }
        
        if ($task == "delete")
        {
            $this->crud_model->delete_flightroutes_info($route_id);
            redirect(base_url() . 'staff/flightroutes');
        }
        
        $data['flightroutes']    = $this->crud_model->get_flightroutes_info();
        $data['page_name']              = 'flightroutes';
        $data['page_title']             = get_phrase('ADD FLIGHT_ROUTES DETAILS');
        $this->load->view('backend/index', $data);
    }
	
	
	
		/*********FLIGHT DESTINATION************/
    function flight_destination($task = "", $route_id = "")
    {
        if ($this->session->userdata('staff_login') != 1)
        {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
        }
          $route_id = h_encrypt_decrypt($route_id,'decrypt');       
        if ($task == "create")
        {
            $this->crud_model->save_flight_destination_info();
            $this->session->set_flashdata('flash_message' , get_phrase('flight_destination_saved_successfuly'));
            redirect(base_url() . 'staff/flight_destination' , 'refresh');
        }
        
        if ($task == "update")
        {
            $this->crud_model->update_flight_destination_info($route_id);
            $this->session->set_flashdata('flash_message' , get_phrase('flight_destination_info_updated_successfuly'));
            redirect(base_url() . 'staff/flight_destination' , 'refresh');
        }
        
        if ($task == "delete")
        {
            $this->crud_model->delete_flight_destination_info($route_id);
            redirect(base_url() . 'staff/flight_destination');
        }
        
        $data['flight_destination']    = $this->crud_model->get_flight_destination_info();
        $data['page_name']              = 'flight_destination';
        $data['page_title']             = get_phrase(' FLIGHT DESTINATION DETAILS');
        $this->load->view('backend/index', $data);
    }
	
	
	
		/*********SETTINGS FRONT END************/
    function settings_front_end($task = "")
    {
        if ($this->session->userdata('staff_login') != 1)
        {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
        }
                
       
        
        if ($task == "update")
        {
			
		   $this->crud_model->update_settings_front_end_info(); 
           $this->session->set_flashdata('flash_message' , get_phrase('settings_front_end_info_updated_successfuly'));
            redirect(base_url() . 'staff/settings_front_end' , 'refresh');
        }
        
         
        if ($task == "upload_logo")
        {
           
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/company_logo.png');
			$this->session->set_flashdata('flash_message' , get_phrase('settings_updated'));
            redirect(base_url() . 'staff/settings_front_end' , 'refresh');
        }
        
        
		$data['settings_front_end']   = $this->db->get('front_end')->result_array();
        $data['page_name']              = 'settings_front_end';
        $data['page_title']             = get_phrase('FRONT END SETTINGS');
        $this->load->view('backend/index', $data);
    }
	
	
	
	
	
	 function get_short_name($task = "")
    {
		
		if ($task == "getinit")
        {
		$holder = $this->input->post('holder');
       $data= h_get_word_initials($holder);
		echo $data;	
			
		}
		
		if ($task == "getshort")
        {
		 
		 
		$destn =  $this->crud_model->get_flight_destination_shortname($this->input->post('destn'));
		$origin = $this->crud_model->get_flight_destination_shortname($this->input->post('origin'));
       
		echo $origin.'-'.$destn;	
			
		}
        
    }
	
	
	
	 function get_flight_details($task = "")
    {
		
		if ($task == "getdetils")
        {
		
		 
		$flight_no   = $this->crud_model->get_flightschedule_info2($this->input->post('flight_no'))->flight_no;
		$class_price = $this->crud_model->get_flightschedule_info3($this->input->post('flight_no'),$this->input->post('class_type'))->needed;
		
		
		echo $class_price;	
			
		}
        
    }
	
	
			/*********TICKET SETTING ************/
    function ticket($task = "", $param = '')
    {
        if ($this->session->userdata('staff_login') != 1)
        {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
        }
		
                
        $data['ticket_data']    = $this->crud_model->get_bookings_info();  
		$data['page_name']              = 'fligth_ticket';
        $data['page_title']             = get_phrase('TICKETS');
        $this->load->view('backend/index', $data); 
    }
	
	
	  function ticket2($task = "", $param = '')
    {
        if ($this->session->userdata('staff_login') != 1)
        {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
        }
		
		$task = h_encrypt_decrypt($task,'decrypt');        
		$data['ticket_info']   = $this->db->get_where('flight_ticket_details', array('tick_number' => $task));
        $data['page_name']              = 'fligth_ticket_details';
        $data['page_title']             = get_phrase('YOUR TICKET');
        $this->load->view('backend/index', $data);	
		
	}
	
		  function ticketd($task = "", $param = '')
    {
        if ($this->session->userdata('staff_login') != 1)
        {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
        }
		
		$task = h_encrypt_decrypt($task,'decrypt');        
		$data['ticket_info']   = $this->db->get_where('flight_ticket_details', array('tick_number' => $task));
        $data['page_name']              = 'fligth_ticket_details_print';
        $data['page_title']             = get_phrase('YOUR TICKET');
        $this->load->view('backend/index', $data);	
		
	}
	
		  function receipt($task = "", $param = '')
    {
        if ($this->session->userdata('staff_login') != 1)
        {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
        }
		
		$task = h_encrypt_decrypt($task,'decrypt');        
		$data['ticket_info']   = $this->db->get_where('flight_ticket_details', array('tick_number' => $task));
        $data['page_name']              = 'fligth_ticket_pay_print';
        $data['page_title']             = get_phrase('YOUR receipt');
        $this->load->view('backend/index', $data);	
		
	}
	
	
	
		 function get_country_details(){

       $str = file_get_contents('./uploads/country.json');
       $json = json_decode($str, true);	   
	    
		foreach ($json as $row) {

		echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';

		}

        
		}
		
		
		
		function get_airport_details(){

       $str = file_get_contents('./uploads/airports.json');
       $json = json_decode($str, true);	   
	    
		foreach ($json as $row) {

		
		echo '<optgroup label="'. $row['country'].'">';		
		echo '<option value="'. $row['code'].'">' . $row['country'].'&nbsp;&nbsp; ' . $row['name'].'&nbsp;&nbsp;('. $row['code'].')' ;
        echo '</option></optgroup>';
		
		}

        
		}
	
		function get_search_details(){
		
		$all_data = $this->crud_model->get_flights_pakage($this->input->post('flight_no'),$this->input->post('class_type'));
		$this->session->unset_userdata('searchdata');
		$this->session->set_userdata('searchdata',$all_data);
        //echo $all_data;
		echo json_encode($all_data);
		}
	
}

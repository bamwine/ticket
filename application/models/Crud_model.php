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

//LOCATION : application - controller - models -  Crud_model.php


class Crud_model extends CI_Model {

    function __construct() {
        parent::__construct();
		
    }

    function clear_cache() {
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
	
	 function getvalues($key)
	{
		$query = $this->db->get_where('settings',array('type'=>$key));
		if($query->num_rows()>0)
		{
			$row = $query->row();
			return json_decode($row->description);
		}
		else
			return '';	
	}
    function addvalues($data)
	{
		$this->db->insert('settings',$data);
	}
    function updatevalues($key,$data)
	{
		$this->db->update('settings',$data,array('type'=>$key));
	}

     function get_type_name_by_id($type, $type_id = '', $field = 'name') {
        $this->db->where($type . '_id', $type_id);
        $query = $this->db->get($type);
        $result = $query->result_array();
        foreach ($result as $row)
            return $row[$field];
        //return	$this->db->get_where($type,array($type.'_id'=>$type_id))->row()->$field;	
    }

	
	function get_type_name_by_id2($type, $type_id = '') {
        //$this->db->where($type . '_id', $type_id);
        return $this->db->get_where($type, array($type . '_id' =>$type_id))->row();	
    }

	
	
	/////////////////AIRCRAFT INFO/////////////////////
	
	
	function save_aircraft_info($jet_id) {
       $data['jet_id'] 	= $this->input->post('jet_id');
        $data['jet_type'] 	= $this->input->post('jet_type');
		$data['total_capacity'] 	= $this->input->post('jet_capacity');
        $data['active'] 	= $this->input->post('active');
        
        $this->db->insert('flight_aircraft_d',$data);
        
        //$document_id            = $this->db->insert_id();
       // move_uploaded_file($_FILES["file_name"]["tmp_name"], "uploads/document/" . $_FILES["file_name"]["name"]);
    }
	
	function update_aircraft_info($jet_id) {
       
        $data['jet_id'] 	= $this->input->post('jet_id');
        $data['jet_type'] 	= $this->input->post('jet_type');
		$data['total_capacity'] 	= $this->input->post('jet_capacity');
        $data['active'] 	= $this->input->post('active');
        
        $this->db->where('jet_id',$jet_id);
        $this->db->update('flight_aircraft_d',$data);
    }
	
	function delete_aircraft_info($jet_id) {
        $this->db->where('jet_id',$jet_id);
        $this->db->delete('flight_aircraft_d');
    }

	function get_aircraft_info() {
        $query = $this->db->get('flight_aircraft_d');
        return $query->result_array();
    }
	
	////////////////////AIRCRAFT INFO////////////////////////
	
	
	
	
	
	
	
		/////////////////FLIGHT SCHEDULE/////////////////////
	
	
	function save_flightschedule_info($flight_no) {
		$data['flight_no'] 	= $this->input->post('flight_no');
        $data['jet_id'] 	= $this->input->post('jet_id');
		$data['from_city'] 	= $this->input->post('from_city');
        $data['to_city'] 	= $this->input->post('to_city');
		$data['route_id'] 	= $this->input->post('route_id');
		$data['departure_date'] 	= $this->input->post('departure_date');
        $data['arrival_date'] 	    = $this->input->post('arrival_date');
		$data['departure_time'] 	= $this->input->post('departure_time');
        $data['arrival_time'] 	    = $this->input->post('arrival_time');
		/*$data['seats_economy'] 	    = $this->input->post('seats_economy');
        $data['seats_business'] 	= $this->input->post('seats_business');
		$data['price_economy'] 	    = $this->input->post('price_economy');
        $data['price_business'] 	= $this->input->post('price_business'); */
        $this->db->insert('flights_schedule',$data);
		
		$this->save_flights_types_price();
       
	}
	
	function update_flightschedule_info($flight_no) {
       
        $data['flight_no'] 	= $this->input->post('flight_no');
        $data['jet_id'] 	= $this->input->post('jet_id');
		$data['from_city'] 	= $this->input->post('from_city');
        $data['to_city'] 	= $this->input->post('to_city');
		 	
		$destn =  $this->get_flight_destination_shortname($this->input->post('to_city'));
		$origin = $this->get_flight_destination_shortname($this->input->post('from_city'));
       
		$data['route_id']= $origin.'-'.$destn;
		
		$data['departure_date'] 	= $this->input->post('departure_date');
        $data['arrival_date'] 	    = $this->input->post('arrival_date');
		$data['departure_time'] 	= $this->input->post('departure_time');
        $data['arrival_time'] 	    = $this->input->post('arrival_time');
		$data['seats_economy'] 	    = $this->input->post('seats_economy');
        $data['seats_business'] 	= $this->input->post('seats_business');
		$data['price_economy'] 	    = $this->input->post('price_economy');
        $data['price_business'] 	= $this->input->post('price_business');
        
        $this->db->where('flight_no',$flight_no);
        $this->db->update('flights_schedule',$data);
    }
	
	function delete_flightschedule_info($flight_no) {
        $this->db->where('flight_no',$flight_no);
        $this->db->delete('flights_schedule');
    }
	
	function get_flightschedule_info2($flight_no) {        
    return $this->db->get_where('flights_schedule', array('flight_no' =>$flight_no))->row();
    }
	
	function get_flightschedule_info3($flight_no,$class_type) {        
    return $this->db->query('SELECT '.$class_type.' as needed  FROM flights_schedule WHERE flight_no = "'.$flight_no.'"')->row();
    }
	
	function get_flightschedule_info2_dated($flight_dates) {        
    return $this->db->get_where('flights_schedule', array('departure_date >=' =>$flight_dates))->result_array();
    }

	function get_flightschedule_info() {
        $query = $this->db->get('flights_schedule');
        return $query->result_array();
    }
	
	////////////////////FLIGHT SCHEDULE////////////////////////
	
	
	
	
	
		
	/////////////////FLIGHT ROUTES/////////////////////
	
	
	function save_flightroutes_info($route_id) {
        $data['route_id'] 	= strtoupper($this->input->post('route_id'));
        $data['amount'] 	= $this->input->post('amount');
		$data['orign'] 	= $this->input->post('origin');
        $data['destination'] 	= $this->input->post('destination');;
        
        $this->db->insert('flight_routes',$data);
     
    }
	
	function update_flightroutes_info($route_id) {
       
        $data['route_id'] 	= strtoupper($this->input->post('route_id'));
        $data['amount'] 	= $this->input->post('amount');
		$data['orign'] 	= $this->input->post('origin');
        $data['destination'] 	= $this->input->post('destination');
        
        $this->db->where('route_id',$route_id);
        $this->db->update('flight_routes',$data);
    }
	
	function delete_flightroutes_info($route_id) {
        $this->db->where('route_id',$route_id);
        $this->db->delete('flight_routes');
    }

	function get_flightroutes_info() {
        $query = $this->db->get('flight_routes');
        return $query->result_array();
    }
	
	////////////////////FLIGHT ROUTES////////////////////////
	
	
	
	/////////////////FLIGHT bookings/////////////////////
	
	
	function save_bookings_info_stripe() {
		
		$data['flight_no'] 	= $this->input->post('select_flight'); // flightnos
        $data['tick_number'] 	= $this->input->post('ticket');
		$data['payment_id'] 	= $this->input->post('payid');
		$data['customer_name'] 	= $this->input->post('username');
        $data['age'] 	= $this->input->post('age');
		$data['phone'] 	= $this->input->post('phone');
		$data['gender'] 	    = $this->input->post('gender');
        $data['nationality'] 	= $this->input->post('nationality');
		$data['email'] 	        = $this->input->post('email');		
		$data['date_of_reservation'] = date('Y-m-d');
		
		 $this->db->insert('flight_passengers',$data);
		 $customer_id = $this->db->insert_id();
		 
       	$data2['flight_no'] 	= $data['flight_no'];
        $data2['tick_number'] 	= $data['tick_number'];
		$data2['payment_id'] 	= $data['payment_id'];		
		$data2['lag_weight'] 	= $this->input->post('lagweight');
        $data2['date_of_reservation'] 	= $data['date_of_reservation'];
		$data2['amoint_paid'] 	= $this->input->post('ftotal');
		$data2['class'] 	=($this->input->post('classid')=="price_business")?'business':'Economy';
		$data2['journey_date']  = $this->get_flightschedule_info2($data['flight_no'])->departure_date;
		$data2['booking_status']='CONFIRMED ';
		$data2['customer_id']=$customer_id;
		$data2['customer_name']=$data['customer_name'];
        
        $this->db->insert('flight_ticket_details',$data2);
		
		
		$data3['pay_ref'] = $data['payment_id'];
		$data3['payment_amount']= $this->input->post('ftotal');
		$data3['payment_date'] = date('Y-m-d');
		$data3['payment_mode'] = $this->input->post('paymethod');		
		$this->db->insert('flight_payment_details',$data3);
        
       
	}
	
	function save_bookings_info($tick_number) {
		
		$data['flight_no'] 	= $this->input->post('select_flight'); // flightnos
        $data['tick_number'] 	= $this->input->post('ticket');
		$data['payment_id'] 	= $this->input->post('payid');
		$data['customer_name'] 	= $this->input->post('username');
        $data['age'] 	= $this->input->post('age');
		$data['phone'] 	= $this->input->post('phone');
		$data['gender'] 	    = $this->input->post('gender');
        $data['nationality'] 	= $this->input->post('nationality');
		$data['email'] 	        = $this->input->post('email');		
		$data['date_of_reservation'] = date('Y-m-d');
		
		 $this->db->insert('flight_passengers',$data);
		 $customer_id = $this->db->insert_id();
		 
       	$data2['flight_no'] 	= $data['flight_no'];
        $data2['tick_number'] 	= $data['tick_number'];
		$data2['payment_id'] 	= $data['payment_id'];		
		$data2['lag_weight'] 	= $this->input->post('lagweight');
        $data2['date_of_reservation'] 	= $data['date_of_reservation'];
		$data2['amoint_paid'] 	= $this->input->post('ftotal');
		$data2['class'] 	=($this->input->post('classid')=="price_business")?'business':'Economy';
		$data2['journey_date']  = $this->get_flightschedule_info2($data['flight_no'])->departure_date;
		$data2['booking_status']='CONFIRMED';
		$data2['customer_id']=$customer_id;
		$data2['customer_name']=$data['customer_name'];
        
        $this->db->insert('flight_ticket_details',$data2);
		
		
		$data3['pay_ref'] = $data['payment_id'];
		$data3['payment_amount']= $this->input->post('ftotal');
		$data3['payment_date'] = date('Y-m-d');
		$data3['payment_mode'] = $this->input->post('paymethod');		
		$this->db->insert('flight_payment_details',$data3);
        
       
	}
	
	function update_bookings_pay() {
       
        $data3['pay_ref'] = $this->input->post('payid');
		$data3['payment_amount']= $this->input->post('total');
		$data3['payment_mode'] = $this->input->post('paymethod');
		$data3['officer'] = $this->get_type_name_by_id2($this->session->userdata('login_type'),$this->session->userdata('login_user_id'))->name;
		
		$this->db->where('pay_ref',$this->input->post('payid'));
        $this->db->update('flight_payment_details',$data3);
		
		$data['booking_status'] = $this->input->post('bookstate');
		$pay_ref = $this->input->post('payid');
		$this->db->where('payment_id',$pay_ref);
        $this->db->update('flight_ticket_details',$data);
    }
	
	function delete_bookings_info($tick_number) {
		
        $this->db->where('tick_number',$tick_number);
		$this->db->delete('flight_ticket_details');
        $this->db->delete('flight_ticket_details');
    }

	function get_bookings_info() {
        $query = $this->db->get('flight_ticket_details');
        return $query->result_array();
    }
	
	////////////////////FLIGHT bookings////////////////////////
	
	
	
	
	
	
	/////////////////FLIGHT DESTINATION/////////////////////
	
	
	function save_flight_destination_info($dest_id) {
       
        $data['dest_name'] 	    = strtoupper($this->input->post('dest_name'));
		$data['dest_short'] 	= strtoupper($this->input->post('dest_short'));
        
        $this->db->insert('flight_destinations',$data);        
      
	}
	
	function update_flight_destination_info($dest_id) {
       
       
        $data['dest_name'] 	    = strtoupper($this->input->post('dest_name'));
		$data['dest_short'] 	= strtoupper($this->input->post('dest_short'));
        
        $this->db->where('dest_id',$dest_id);
        $this->db->update('flight_destinations',$data);
    }
	
	function delete_flight_destination_info($dest_id) {
        $this->db->where('dest_id',$dest_id);
        $this->db->delete('flight_destinations');
    }

	function get_flight_destination_info() {
        $query = $this->db->get('flight_destinations');
        return $query->result_array();
    }
	
	
	function get_flight_destination_shortname($name) {
      
        $query = $this->db->get_where('flight_destinations', array('dest_name' => $name))->row();
        return $query->dest_short;
    }
	
	////////////////////FLIGHT DESTINATION////////////////////////
	
	
	////////////////////FRONT_END////////////////////////
	 	function update_settings_front_end_info() {       
       
        $data['description'] = $this->input->post('cop_name');
        $this->db->where('type' , 'cop_name');
        $this->db->update('front_end' , $data);
		
		$data['description'] = $this->input->post('vission');
        $this->db->where('type' , 'vission');
        $this->db->update('front_end' , $data);
		
		$data['description'] = $this->input->post('mission');
        $this->db->where('type' , 'mission');
        $this->db->update('front_end' , $data);
		
		$data['description'] = $this->input->post('about_us');
        $this->db->where('type' , 'about_us');
        $this->db->update('front_end' , $data);
		
		$data['description'] = $this->input->post('emails');
        $this->db->where('type' , 'emails');
        $this->db->update('front_end' , $data);
		
		$data['description'] = $this->input->post('phone');
        $this->db->where('type' , 'phone');
        $this->db->update('front_end' , $data);
		
		$data['description'] = $this->input->post('services');
        $this->db->where('type' , 'services');
        $this->db->update('front_end' , $data);
		
		$data['description'] = $this->input->post('location');
        $this->db->where('type' , 'location');
        $this->db->update('front_end' , $data);
		
		$data['description'] = $this->input->post('currency');
        $this->db->where('type' , 'currency');
        $this->db->update('front_end' , $data);
		
		
		
		
		
		
    }
	
	
	
	 /////email template settings////
    function save_email_template($email_template_id) {
        $data['subject'] = $this->input->post('subject');
        $data['body'] = $this->input->post('body');

        $this->db->where('email_template_id', $email_template_id);
        $this->db->update('email_template', $data);
    }


    function create_log($data) {
        $data['timestamp'] = strtotime(date('Y-m-d') . ' ' . date('H:i:s'));
        $data['ip'] = $_SERVER["REMOTE_ADDR"];
        $location = new SimpleXMLElement(file_get_contents('http://freegeoip.net/xml/' . $_SERVER["REMOTE_ADDR"]));
        $data['location'] = $location->City . ' , ' . $location->CountryName;
        $this->db->insert('log', $data);
    }

    function get_system_settings() {
        $query = $this->db->get('settings');
        return $query->result_array();
    }
	
////////BACKUP RESTORE/////////
   function create_backup($type)
	{
		$this->load->dbutil();
		$options = array(

                'format'      => 'txt',             // gzip, zip, txt

                'add_drop'    => TRUE,              // Whether to add DROP TABLE statements to backup file

                'add_insert'  => TRUE,              // Whether to add INSERT data to backup file

                'newline'     => "\n"               // Newline character used in backup file

              );
		if($type == 'all')
		{
			$tables = array('');

			$file_name	=	'system_backup';
		}

		else 
		{

			$tables = array('tables'	=>	array($type));

			$file_name	=	'backup_'.$type;

		}
		$backup =& $this->dbutil->backup(array_merge($options , $tables)); 
		$this->load->helper('download');

		force_download($file_name.'.sql', $backup);

	}

/////////RESTORE TOTAL DB/ DB TABLE FROM UPLOADED BACKUP SQL FILE//////////
   function restore_backup()

	{
		move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/backup.sql');

		$this->load->dbutil();

		$prefs = array(

            'filepath'						=> 'uploads/backup.sql',

			'delete_after_upload'			=> TRUE,

			'delimiter'						=> ';'

        );

		$restore =& $this->dbutil->restore($prefs); 

		unlink($prefs['filepath']);

	}
	
	
	
	
	

	/////////DELETE DATA FROM TABLES///////////////

	function truncate($type)

	{

		if($type == 'all')

		{

			$this->db->truncate('student');

			$this->db->truncate('mark');

			$this->db->truncate('teacher');

			$this->db->truncate('subject');

			$this->db->truncate('class');

			$this->db->truncate('exam');

			$this->db->truncate('grade');

		}

		else

		{	

			$this->db->truncate($type);

		}

	}

////////IMAGE URL//////////
    function get_image_url($type = '', $id = '') {
        if (file_exists('uploads/' . $type . '_image/' . $id . '.jpg'))
            $image_url = base_url() . 'uploads/' . $type . '_image/' . $id . '.jpg';
        else
            $image_url = base_url() . 'uploads/user.jpg';

        return $image_url;
    }

 

	////////private message//////
    function send_new_private_message() {
       
        $message = $this->input->post('message');
        $timestamp = strtotime(date("Y-m-d H:i:s"));
        $sender_type = $this->session->userdata('login_type');
       if ($this->input->post('receiver') != "")
       if($sender_type == 'admin') {
       foreach ($this->input->post('receiver') as $row){
                $data['receiver']  = $row;
        
        $reciever = $row;
        
        $sender = $this->session->userdata('login_type') . '-' . $this->session->userdata('login_user_id');

        //check if the thread between those 2 users exists, if not create new thread
        $num1 = $this->db->get_where('message_thread', array('sender' => $sender, 'reciever' => $reciever))->num_rows();
        $num2 = $this->db->get_where('message_thread', array('sender' => $reciever, 'reciever' => $sender))->num_rows();
		
		//check if file is attached or not
        if ($_FILES['attached_file_on_messaging']['name'] != "") {
          $data_message['attached_file_name'] = $_FILES['attached_file_on_messaging']['name'];
        }

        if ($num1 == 0 && $num2 == 0) {
            $message_thread_code = substr(md5(rand(100000000, 20000000000)), 0, 15);
            $data_message_thread['message_thread_code'] = $message_thread_code;
            $data_message_thread['sender'] = $sender;
            $data_message_thread['reciever'] = $reciever;
            $this->db->insert('message_thread', $data_message_thread);
        }
        if ($num1 > 0)
            $message_thread_code = $this->db->get_where('message_thread', array('sender' => $sender, 'reciever' => $reciever))->row()->message_thread_code;
        if ($num2 > 0)
            $message_thread_code = $this->db->get_where('message_thread', array('sender' => $reciever, 'reciever' => $sender))->row()->message_thread_code;


        $data_message['message_thread_code'] = $message_thread_code;
        $data_message['message'] = $message;
        $data_message['sender'] = $sender;
        $data_message['timestamp'] = $timestamp;
        $this->db->insert('message', $data_message);
       }
       
        } else{
            $data['receiver']  = $this->input->post('receiver');
        
        $reciever = $this->input->post('receiver');
        
        $sender = $this->session->userdata('login_type') . '-' . $this->session->userdata('login_user_id');

        //check if the thread between those 2 users exists, if not create new thread
        $num1 = $this->db->get_where('message_thread', array('sender' => $sender, 'reciever' => $reciever))->num_rows();
        $num2 = $this->db->get_where('message_thread', array('sender' => $reciever, 'reciever' => $sender))->num_rows();

        if ($num1 == 0 && $num2 == 0) {
            $message_thread_code = substr(md5(rand(100000000, 20000000000)), 0, 15);
            $data_message_thread['message_thread_code'] = $message_thread_code;
            $data_message_thread['sender'] = $sender;
            $data_message_thread['reciever'] = $reciever;
            $this->db->insert('message_thread', $data_message_thread);
        }
        if ($num1 > 0)
            $message_thread_code = $this->db->get_where('message_thread', array('sender' => $sender, 'reciever' => $reciever))->row()->message_thread_code;
        if ($num2 > 0)
            $message_thread_code = $this->db->get_where('message_thread', array('sender' => $reciever, 'reciever' => $sender))->row()->message_thread_code;


        $data_message['message_thread_code'] = $message_thread_code;
        $data_message['message'] = $message;
        $data_message['sender'] = $sender;
        $data_message['timestamp'] = $timestamp;
        $this->db->insert('message', $data_message);
       }
        // notify email to email reciever
       $this->email_model->notify_email('new_message_notification', $this->db->insert_id());

        return $message_thread_code;
    }

    function send_reply_message($message_thread_code) {
        $message = $this->input->post('message');
        $timestamp = strtotime(date("Y-m-d H:i:s"));
        $sender = $this->session->userdata('login_type') . '-' . $this->session->userdata('login_user_id');

		if ($_FILES['attached_file_on_messaging']['name'] != "") {
          $data_message['attached_file_name'] = $_FILES['attached_file_on_messaging']['name'];
        }

        $data_message['message_thread_code'] = $message_thread_code;
        $data_message['message'] = $message;
        $data_message['sender'] = $sender;
        $data_message['timestamp'] = $timestamp;
        $this->db->insert('message', $data_message);
		$message_id = $this->db->insert_id();

		// notify email to email reciever
		$this->email_model->notify_email('new_message_notification', $this->db->insert_id());
		echo json_encode($data_message);
    }

 function mark_thread_messages_read($message_thread_code) {
// mark read only the oponnent messages of this thread, not currently logged in user's sent messages
        $current_user = $this->session->userdata('login_type') . '-' . $this->session->userdata('login_user_id');
        $this->db->where('sender !=', $current_user);
        $this->db->where('message_thread_code', $message_thread_code);
        $this->db->update('message', array('read_status' => 1));
    }

    function count_unread_message_of_thread($message_thread_code) {
        $unread_message_counter = 0;
        $current_user = $this->session->userdata('login_type') . '-' . $this->session->userdata('login_user_id');
        $messages = $this->db->get_where('message', array('message_thread_code' => $message_thread_code))->result_array();
        foreach ($messages as $row) {
            if ($row['sender'] != $current_user && $row['read_status'] == '0')
                $unread_message_counter++;
        }
        return $unread_message_counter;
    }

    function count_unread_message_of_curuser() {
        $current_user = $this->session->userdata('login_type') . '-' . $this->session->userdata('login_user_id');
        $sql = "select count(a.message_id) counts from message a "
                . " inner join message_thread b on a.message_thread_code=b.message_thread_code "
                . " where b.reciever='" . $current_user . "' and a.read_status=0";
        $row = $this->db->query($sql)->row_array();
        return $row["counts"];
    }

    function unread_message_of_curuser() {
        $data = array();
        $current_user = $this->session->userdata('login_type') . '-' . $this->session->userdata('login_user_id');
        $sql = "select a.*  from message a "
                . " inner join message_thread b on a.message_thread_code=b.message_thread_code "
                . " where b.reciever='" . $current_user . "' and a.read_status=0";
        $rows = $this->db->query($sql)->result_array();
        foreach ($rows as $row) {
            $sender = explode('-', $row['sender']);
            $sender_type = $sender[0];
            $sender_id = $sender[1];

            $sql = "select name from " . $sender_type . " where " . $sender_type . "_id=" . $sender_id;
            $result = $this->db->query($sql)->row_array();
            $row["sender_name"] = $result["name"];

            $key = $row['sender'];
            $face_file = 'uploads/' . $sender_type . '_image/' . $sender_id . '.jpg';
            if (!file_exists($face_file)) {
                $face_file = 'uploads/default_avatar.jpg';
            }
            $row["face_file"] = base_url() . $face_file;

//            $cur_time = date('Y-m-d H:i:s', time());
//            $send_time =date('Y-m-d H:i:s', $row["timestamp"]);
//            echo $cur_time;
//            $diff = date_diff($cur_time, $send_time);
            $ago = '';
            $sec = time() - $row["timestamp"];
            $year = (int) ($sec / 31556926);
            $month = (int) ($sec / 2592000);
            $day = (int) ($sec / 86400);
            $hou = (int) ($sec / 3600);
            $min = (int) ($sec / 60);
            if ($year > 0) {
                $ago = $year . ' year(s)';
            } else if ($month > 0) {
                $ago = $month . ' month(s)';
            } else if ($day > 0) {
                $ago = $day . ' day(s)';
            } else if ($hou > 0) {
                $ago = $hou . ' hour(s)';
            } else if ($min > 0) {
                $ago = $min . ' minute(s)';
            } else {
                $ago = $sec . ' second(s)';
            }

            $row["ago"] = $ago;

            array_push($data, $row);
        }
        return $data;
    }
	
	
	
	
	function curl_request($code = '') {

        $product_code = $code;

        $personal_token = "FkA9UyDiQT0YiKwYLK3ghyFNRVV9SeUn";
        $url = "https://api.envato.com/v3/market/author/sale?code=".$product_code;
        $curl = curl_init($url);

        //setting the header for the rest of the api
        $bearer   = 'bearer ' . $personal_token;
        $header   = array();
        $header[] = 'Content-length: 0';
        $header[] = 'Content-type: application/json; charset=utf-8';
        $header[] = 'Authorization: ' . $bearer;

        $verify_url = 'https://api.envato.com/v1/market/private/user/verify-purchase:'.$product_code.'.json';
        $ch_verify = curl_init( $verify_url . '?code=' . $product_code );

        curl_setopt( $ch_verify, CURLOPT_HTTPHEADER, $header );
        curl_setopt( $ch_verify, CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch_verify, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt( $ch_verify, CURLOPT_CONNECTTIMEOUT, 5 );
        curl_setopt( $ch_verify, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

        $cinit_verify_data = curl_exec( $ch_verify );
        curl_close( $ch_verify );

        $response = json_decode($cinit_verify_data, true);

        if (count($response['verify-purchase']) > 0) {
            return true;
        } else {
            return true;
        }

  	}
	
	
	
	
	
	
	 ////////staffS/////////////
    function create_staff() {
        $data['name'] = $this->input->post('name');
		$data['staff_number'] = $this->input->post('staff_number');
        $data['account_role_id'] = $this->input->post('account_role_id');
		
		
		$data['birthday'] = $this->input->post('birthday');
        $data['sex'] = $this->input->post('sex');
        $data['religion'] = $this->input->post('religion');
        $data['blood_group'] = $this->input->post('blood_group');
        $data['address'] = $this->input->post('address');
        $data['qualification'] = $this->input->post('qualification');
		
		
        $data['marital_status'] = $this->input->post('marital_status');
        $data['facebook'] = $this->input->post('facebook');
        $data['twitter'] = $this->input->post('twitter');
        $data['googleplus'] = $this->input->post('googleplus');
        $data['linkedin'] = $this->input->post('linkedin');
		$data['file_name'] = $_FILES["file_name"]["name"];
        $data['email'] = $this->input->post('email');
		$data['phone'] = $this->input->post('phone');
		$data['password'] = sha1($this->input->post('password'));

        $this->db->insert('staff', $data);
        $staff_id = $this->db->insert_id();

        // email notification check
        if ($this->input->post('notify_check') == 'yes')
            $this->email_model->notify_email('new_staff_account_opening', $staff_id, $this->input->post('password'));
		move_uploaded_file($_FILES["file_name"]["tmp_name"], "uploads/staff_image/" . $_FILES["file_name"]["name"]);
        move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/staff_image/' . $staff_id . '.jpg');
		
		$this->session->set_flashdata('flash_message', get_phrase('staff_created'));
        redirect(base_url() . 'index.php?admin/staff/', 'refresh');
    }

    function update_staff($staff_id) {
        $data['name'] = $this->input->post('name');
        $data['account_role_id'] = $this->input->post('account_role_id');
		
		
		$data['birthday'] = $this->input->post('birthday');
        $data['sex'] = $this->input->post('sex');
        $data['religion'] = $this->input->post('religion');
        $data['blood_group'] = $this->input->post('blood_group');
        $data['address'] = $this->input->post('address');
        $data['qualification'] = $this->input->post('qualification');
		
		
        $data['marital_status'] = $this->input->post('marital_status');
        $data['facebook'] = $this->input->post('facebook');
        $data['twitter'] = $this->input->post('twitter');
        $data['googleplus'] = $this->input->post('googleplus');
        $data['linkedin'] = $this->input->post('linkedin');
        $data['email'] = $this->input->post('email');
		$data['phone'] = $this->input->post('phone');

        $this->db->where('staff_id', $staff_id);
        $this->db->update('staff', $data);
        move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/staff_image/' . $staff_id . '.jpg');
		
		$this->session->set_flashdata('flash_message', get_phrase('data_updated'));
        redirect(base_url() . 'index.php?admin/staff/', 'refresh');
    }

    function delete_staff($staff_id) {
        $this->db->where('staff_id', $staff_id);
        $this->db->delete('staff');
		$this->session->set_flashdata('flash_message', get_phrase('data_deleted'));
        redirect(base_url() . 'index.php?admin/staff/', 'refresh');
    }

    function staff_permission($account_permission_id = '') {
        $current_staff_account_role_id = $this->db->get_where('staff', array('staff_id' => $this->session->userdata('login_user_id')))
                        ->row()->account_role_id;

        $current_staff_account_permissions = $this->db->get_where('account_role', array('account_role_id' => $current_staff_account_role_id))
                        ->row()->account_permissions;

        if (in_array($account_permission_id, explode(',', $current_staff_account_permissions))) {
            return true;
        } else {
            return false;
        }
    }
	
	
	
	
	////////account_roles/////////////
    function create_account_role() {
        $checked_permissions = $this->input->post('permission');
        $total_checked_values = count($checked_permissions);
        $permissions = '';
        for ($i = 0; $i < $total_checked_values; $i++) {
            $permissions .= $checked_permissions[$i] . ",";
        }

        $data['account_permissions'] = $permissions;
        $data['name'] = $this->input->post('name');
        $this->db->insert('account_role', $data);
		
		$this->session->set_flashdata('flash_message', get_phrase('role_assigned'));
        redirect(base_url() . 'index.php?admin/account_role/', 'refresh');
    }

    function update_account_role($account_role_id) {
        $checked_permissions = $this->input->post('permission');
        $total_checked_values = count($checked_permissions);
        $permissions = '';
        for ($i = 0; $i < $total_checked_values; $i++) {
            $permissions .= $checked_permissions[$i] . ",";
        }

        $data['account_permissions'] = $permissions;
        $data['name'] = $this->input->post('name');

        $this->db->where('account_role_id', $account_role_id);
        $this->db->update('account_role', $data);
		
		$this->session->set_flashdata('flash_message', get_phrase('permission_successful'));
        redirect(base_url() . 'index.php?admin/account_role/', 'refresh');
    }

    function delete_account_role($account_role_id) {
        $this->db->where('account_role_id', $account_role_id);
        $this->db->delete('account_role');
		
		$this->session->set_flashdata('flash_message', get_phrase('permission_deleted'));
        redirect(base_url() . 'index.php?admin/account_role/', 'refresh');
    }
	
	
	
	
	function get_flights_types() {
        //$query = $this->db->get('flights_packages');
		$query =$this->db->query('SELECT * FROM flights_packages ORDER BY class_id ASC ');
		return $query->result_array();
        //return $query->row();
    }
	
	
	function get_flights_types_money($flight_no,$class_no) {
        $query = $this->db->get_where('flights_classes', array('flight_no' => $flight_no,'class_name' => $class_no));
		//return $query->class_price;
        return $query->result_array();
    }
    
	
	function get_flights_types_price($class_no,$flight_no) {
		$query = $this->db->get_where('flights_classes', array('flight_no' => $flight_no,'class_name' => $class_no))->row();
	
		return $query->class_price;
    }
	
	function get_flights_types_seats($class_no,$flight_no) {
		$query = $this->db->get_where('flights_classes', array('flight_no' => $flight_no,'class_name' => $class_no))->row();
	
		return $query->seats;
    }
	
	
	function save_flights_types_price() {
		$students = $this->get_flights_types();
            foreach($students as $row) {
   $query2 = $this->db->get_where('flights_classes', array('flight_no' => $this->input->post('flight_no'),
			'class_name' =>$row['class_id']

		));
			if ($query2->num_rows() <=0) {
			 
			    $data['flight_no']       = $this->input->post('flight_no');
                $data['class_name']       =  $row['class_id'];
				$data['class_price']       = $this->input->post('price' . $row['class_id']);
                $data['seats']       = $this->input->post('seats' . $row['class_id']);
                $this->db->insert('flights_classes', array('flight_no' => $data['flight_no'],'class_name' => $data['class_name'],'class_price' => $data['class_price'],'seats' => $data['seats']));
				
			} else {
				
				$data['flight_no']       = $this->input->post('flight_no');
                $data['class_name']       =  $row['class_id'];
				$data['class_price']       = $this->input->post('price' . $row['class_id']);
                $data['seats']       = $this->input->post('seats' . $row['class_id']);
				
				
				$this->db->where('flight_no', $this->input->post('flight_no'));
				$this->db->where('class_name', $row['class_id']);
				
				
                $this->db->update('flights_classes', array('flight_no' => $data['flight_no'],'class_name' => $data['class_name'],'class_price' => $data['class_price'],'seats' => $data['seats']));
				
				
			}	

			
			}
    }
	
	
		function get_arrange_types() {
        $query =$this->db->query('SELECT * FROM flights_packages ORDER BY class_id ASC ');

        return $query->result_array();
    }
	
	function get_flights_pakagename($class_no) {
        $query = $this->db->get_where('flights_packages', array('class_id' => $class_no))->row();
		return $query->name;
    }
    
    function get_flights_pakage($flight_no,$class_no) {
		
        $query_pakage = $this->db->get_where('flights_classes', array('flight_no' => $flight_no,'class_name' => $class_no))->result_array();
		$query_flight = $this->db->get_where('flights_schedule', array('flight_no' =>$flight_no))->result_array();
		
		
		 //$all_data =  array_combine($query_pakage,$query_flight);
		 $all_data =  array_merge($query_flight,$query_pakage);
		
	
	
		return $all_data;
    }

	


}

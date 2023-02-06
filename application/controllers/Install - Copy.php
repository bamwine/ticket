<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//use License;

class Install extends CI_Controller {


    /**
     * Constructor
     * 
     * @access	public
     * @return	void
     */
    function __construct() {
        parent::__construct();

        // used for redirect
        $this->load->helper('url');
        // used to track the status of db connection
        $this->load->library('session');
		$this->load->helper('form');
        $this->load->library('form_validation');
		/*cache control*/
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
    }

    
    function index() {

        $data['install_warnings'] = array();

        // No errors? let's move to the next step
        if (count($data['install_warnings']) == 0) {
            redirect(base_url().'install/validate');
        } else {
            $data['title'] = 'Install problems';
            $data['content'] = $this->load->view('install/warnings', $data, TRUE);
            $this->load->view('userfiles/index', $data);
			
        }
    }

    function validate($mode) {
        if ($mode == 'confirm') {           

            $flight_no = $this->input->post('select_flight');
           
            if (empty($flight_no)) {
                redirect(base_url().'install/validate');
            } else {
              
				$this->session->set_userdata('flight_no', $flight_no);
                redirect(base_url().'install/userinfo');
            }
        }
		$data['flightschedule']    = $this->crud_model->get_flightschedule_info();
        $data['content'] = $this->load->view('install/validate', $data, TRUE);
        $this->load->view('userfiles/index', $data);
		//$this->load->view('client', $data);
    }

    function userinfo($mode) {
        if (!$this->session->userdata('flight_no')) {
            redirect(base_url().'install/validate');
        }
		$flight_no = $this->session->userdata('flight_no');
        if ($mode == 'confirm') {
		$customer_name = $this->input->post('customer_name')." ".$this->input->post('other_name');
			
        $data['flight_no'] 	    = $flight_no;
        $data['tick_number'] 	= $this->input->post('ticket');		
		$data['customer_name'] 	= $customer_name;       
		$data['phone'] 	        = $this->input->post('phone');
		$data['gender'] 	    = $this->input->post('gender');
        $data['nationality'] 	= $this->input->post('nationality');
		$data['email'] 	        = $this->input->post('email');       		
		$data['date_of_reservation'] = date('Y-m-d');
		
		
$this->session->set_userdata('ticket_no', $this->input->post('ticket'));
$this->session->set_userdata('customer_name',$customer_name);
$this->session->set_userdata('phone', $this->input->post('phone'));
$this->session->set_userdata('gender', $this->input->post('gender'));
$this->session->set_userdata('nationality', $this->input->post('nationality'));
$this->session->set_userdata('email', $this->input->post('email'));
$this->session->set_userdata('date_of_reservation', date('Y-m-d'));
$this->session->set_userdata('class_type', ($this->input->post('classid')=="price_business")?'business':'Economy');
$total_price = $this->crud_model->get_flightschedule_info3($flight_no,$this->input->post('classid'))->needed;
$this->session->set_userdata('pay_amount', $total_price);		
		
		//$this->db->insert('flight_passengers',$data);
		redirect(base_url().'install/customer');
        }
		$data['flightdata']    = $this->crud_model->get_flightschedule_info2($flight_no);
        $data['content'] = $this->load->view('install/userinfo', $data, TRUE);
        $this->load->view('userfiles/index', $data);
    }

    function customer($mode) {
		$flight_no = $this->session->userdata('flight_no');
        if (!$this->session->userdata('flight_no')&& !$this->session->userdata('class_type') && !$this->session->userdata('class_type') ) {
            redirect(base_url().'install/validate');
        }
		
		if ($mode == 'confirm') {
			
			redirect(base_url().'install/payment');
		}
		$data['flightdata']    = $this->crud_model->get_flightschedule_info2($flight_no);
        $data['content'] = $this->load->view('install/customer', $data, TRUE);
        $this->load->view('userfiles/index', $data);        
    }

	
	
	  function payment($mode) {
		$flight_no = $this->session->userdata('flight_no');
        if (!$this->session->userdata('flight_no')&& !$this->session->userdata('class_type') && !$this->session->userdata('class_type')){
            redirect(base_url().'install/validate');
        }
		
		if ($mode == 'confirm') {
			
			redirect(base_url().'install/payment');
		}
		$data['flightdata']    = $this->crud_model->get_flightschedule_info2($flight_no);
        $data['content'] = $this->load->view('install/payment', $data, TRUE);
        $this->load->view('userfiles/index', $data);        
    }
   
}


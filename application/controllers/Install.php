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
		$this->load->database();
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

    function get_search_details(){
		
		$all_data = $this->crud_model->get_flights_pakage($this->input->post('flight_no'),$this->input->post('class_type'));
		$this->session->unset_userdata('searchdata');
		$this->session->set_userdata('searchdata',$all_data);
		echo json_encode($all_data);
		}
	
    function index($mode) {
		
		//$flight_no = $this->session->userdata('searchdata');	
        if ($mode == 'confirm') {           

        $flight_no = $this->input->post('datas');
		
		
		if (empty($flight_no)) {
                redirect(base_url().'install');
            } 
			else {
				//session_start();
			  $work=serialize($flight_no);
              
				$this->session->set_userdata('searchdata',$work);
                redirect(base_url().'install/userinfo');
            }
            
        }
		$data['s1']='is-active';
		$data['s2']='';
		$data['s3']='';
		$data['s4']='';
		$data['s5']='';
		
		$data['getclass']          = $this->crud_model->get_flights_types();
		$data['flightschedule']    = $this->crud_model->get_flightschedule_info();
		
		
        $data['content'] = $this->load->view('userfiles/search', $data, TRUE);
        $this->load->view('client', $data);
		
    }

    function userinfo($mode) {
      
		$flight_no = $this->session->userdata('searchdata');		
		print_r($flight_no);
		$flight_data = unserialize($flight_no);		
		print_r($flight_data);
	
		
		$flight_nos = $this->input->post('datas');
	
        if ($mode == 'confirm') {
			
		if (empty($flight_nos)) {
                redirect(base_url().'install');
            } else {
              
				$this->session->set_userdata('searchdata', $flight_nos);
                redirect(base_url().'install/customer');
            }

	
        }
		
		$data['s1']='is-active';
		$data['s2']='is-active';
		$data['s3']='';
		$data['s4']='';
		$data['s5']='';
		$data['session']= $flight_no;
        $data['content'] = $this->load->view('userfiles/userinfo', $data, TRUE);
        $this->load->view('client', $data);
    }

    function customer($mode) {
		$flight_no = $this->session->userdata('searchdata');
		
				
		
		
		$flight_nos = $this->input->post('datas');
		
		if ($mode == 'confirm') {
		
		
		if (empty($flight_nos)) {
                redirect(base_url().'install');
            } else {
              
				$this->session->set_userdata('searchdata', $flight_nos);
                redirect(base_url().'install/payment');
				}}
		
		$data['s1']='is-active';
		$data['s2']='is-active';
		$data['s3']='is-active';
		$data['s4']='';
		$data['s5']='';
		
		$data['session']= $flight_no;
        $data['content'] = $this->load->view('userfiles/customer', $data, TRUE);
        $this->load->view('client', $data);        
    }

	
	
	  function payment($mode) {
		$flight_no = $this->session->userdata('searchdata');
        /*if (!$this->session->userdata('searchdata')&& !$this->session->userdata('class_type') && !$this->session->userdata('class_type')){
            redirect(base_url().'install/index');
        }*/
		
		if ($mode == 'confirm') {
			
			redirect(base_url().'install/payment');
		}
		
		$data['s1']='is-active';
		$data['s2']='is-active';
		$data['s3']='is-active';
		$data['s4']='is-active';
		$data['s5']='';
		
        $data['content'] = $this->load->view('userfiles/payment', $data, TRUE);
        $this->load->view('client', $data);        
    }
   
}


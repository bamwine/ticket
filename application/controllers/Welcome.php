<?php

if (!defined('BASEPATH'))

	exit('No direct script access allowed');



class Welcome extends CI_Controller

{


	 function __construct() {
        parent::__construct();
        $this->load->model('crud_model');
        $this->load->database();
        $this->load->library('session');
        /* cache control */
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
    }
	

	/***default functin, redirects to login page if no admin logged in yet***/

	public function index()

	{

	$this->load->view('userfiles/index', $page_data);
	}

	

	

}

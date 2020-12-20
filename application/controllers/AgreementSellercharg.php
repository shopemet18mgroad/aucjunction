<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgreementSellercharg extends CI_Controller {

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
	 
	 function __construct() {
        parent::__construct();
        
        // Load session library
        $this->load->library('session');
        // Load the captcha helper
		$this->load->helper('captcha');
		$this->load->helper('url');
		$this->load->helper('date');
		date_default_timezone_set("Asia/Kolkata");
    }
	
	public function index()
	{	
		$this->load->library('session');
		$data = $this->session->flashdata('txdata');
		$this->load->library('fileupload');
		$this->load->helper(array('url','form','file','html'));
		if($this->input->post('submit2')){
			$date =  Date('Y-m-d');
			$servperc = $this->input->post('servperc');
			
			$this->load->model('Admin_model');
			
			$data1 = array('servperc' => $servperc);
			$status = $this->Admin_model->insert('sellerprofile', $data1);
			
		$this->load->view('header2');
		$this->load->view('agreementforseller',$data);
		$this->load->view('footer');
	
		
		
	
}
}
}

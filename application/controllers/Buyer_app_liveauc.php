<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer_app_liveauc extends CI_Controller {

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
		$this->load->helper(array('url','html','date'));
		date_default_timezone_set('Asia/Kolkata');
		$time =  Date('Y-m-d H:i:s');
		$this->load->model('Admin_model');
		$this->load->library('session');
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "Buyer_App"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'Buyer_app_login/index_error/'.$datainserr);
			die;
		}else{
		$sess = array('sessi'=>$this->session->userdata('username'));
		//print_r($sess['sessi']);die;
		$data['sqldata'] = $this->Admin_model->datebetweensess('biddercart',$time,$sess['sessi']);
		//print_r($data['sqldata']); die;
		//$check_array = array('dat'=>);
		$this->load->view('buyer_app/header',$sess);
		$this->load->view('buyer_app/liveauc',$data);
		$this->load->view('buyer_app/footer');
		}
	}
	

	
	
	
	
}

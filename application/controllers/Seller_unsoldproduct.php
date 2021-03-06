<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_unsoldproduct extends CI_Controller {

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
		$this->load->helper(array('url','html'));	
		$this->load->library('session');	
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		//$this->load->library('session');
		$this->load->model('Admin_model');
		$sess = $this->session->userdata('username');
		$this->load->model('Admin_model');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$snamechk = array('susername'=>$sess['sessi']);
		$data['sqld'] = $this->Admin_model->getdatafromtable('sellerprofile', $snamechk);
		$snameseller= $data['sqld'][0]->sname;
		$status = array('status'=>2,'sname'=>$snameseller);
		
		
		$query = $this->Admin_model->getdatafromtable('addlot', $status);
		$data['sqldat']= $query;
		//$this->load->library('session');
		//$sess = array('sessi'=>$this->session->userdata('username'));


		$this->load->view('seller/header',$sess);
		$this->load->view('seller/unsoldproduct',$data);
		$this->load->view('seller/footer');
		
	}
	
	
	
}
}
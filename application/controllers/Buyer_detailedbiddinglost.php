<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer_detailedbiddinglost extends CI_Controller {

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
		$this->load->helper('url');
		$this->load->library('session');
		$variable = $this->uri->segment(3);
		$vararray = urldecode($variable);
		$vararray2 = explode('|',$vararray);
		$auctionid = str_ireplace('-','/',$vararray2[0]);
		$lotno = $vararray2[1];
		$sess = $this->session->userdata('username');
		$this->load->model('Admin_model');
		$sess = array('sessi'=>$this->session->userdata('username'));
		//$active = array('bidderusername'=>$sess['sessi'],'auctionid'=>$auctionid,'lotno'=>$lotno,);
		$active2 =array('bidderusername'=>$sess['sessi'],'sauctionid'=>$auctionid,'slotno'=>$lotno,);
		//$query = $this->Admin_model->getdatafromtable('biddercart', $active);
		$query2 = $this->Admin_model->getdatafromtable('biddingdata', $active2);
		//$data['sqldata'] = $query;
		$data['sqldata2'] = $query2;
		$data['sessi'] = $sess['sessi'];
		echo $this->session->userdata('auth');
		if(!$this->session->has_userdata('username')  || $this->session->userdata('auth') != "BUYER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		$this->load->view('buyer/header',$data);
		$this->load->view('buyer/detailedbiddinglost',$sess);
		$this->load->view('buyer/footer');
		}
	}
	
}

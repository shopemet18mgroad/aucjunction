<?php

class Reset_Password extends CI_Controller
{
public function __construct() {
parent::__construct();
        
		$this->load->library('session');
		$this->load->library('email');
		
	}
	
	public function index()
	{
		$this->load->library('session');
		$this->load->helper('url');

		$this->load->view('header2');
		$this->load->view('ResetPassword');
		$this->load->view('footer');
		}

	
	
	
	   public function resetpass()
	{
		$this->load->helper(array('url','html','date'));
		date_default_timezone_set('Asia/Kolkata');
		$time =  Date('Y-m-d H:i:s');
		$this->load->helper('url');
		$this->load->library('session');	
		$this->load->model('Admin_model');
		
		$sess = array('sessi'=>$this->session->userdata('email'));
		$reset = $this->Admin_model->getdatafromtableReset('resetpassword',$sess['sessi']);
		$ot = $reset[0]->otp;
		$otp = $this->input->post('otp');
		$newpassword = base64_encode($this->input->post('newpassword'));
		$confirmpassword =base64_encode($this->input->post('confirmpassword'));
		$table = "resetpassword";
		$check_db = array('otp' => $ot);
		$resetpass = $this->Admin_model->getdatafromtable('resetpassword',$check_db);
		$user = $resetpass[0]->username;
		$name = $resetpass[0]->name;
		$email = $resetpass[0]->email;
		//echo '<pre>';
		//print_r($email);die;
		//echo '</pre>'; 
		
		$data2 = array('busername' =>$user,'bname' =>$name,'bpassword' => $newpassword);
		//$this->load->view('xya', $data);
		$datainserr = "Data Inserted Successfully";
		$updatech = array('busername' => $user);
		
	
		if($email){
		$status = $this->Admin_model->update_custom('buyerprofile',$data2,$updatech,$updatech);
		//header('location: '.base_url().'Login');
		}
		if($email){
		$data3 = array('susername' =>$user,'sname' =>$name,'spassword' => $newpassword);
		//$this->load->view('xya', $data);
		$datainserr = "Data Inserted Successfully";
		$updatech2 = array('susername' => $user);
		
		$status2 = $this->Admin_model->update_custom('sellerprofile',$data3,$updatech2,$updatech2);
		//header('location: '.base_url().'Login');
		}
		else{
			$datainserr = "Invalid OTP";
				  header('location: '.base_url().'login/index_error/'.$datainserr);
				  die;
		}
			
		 
			header('location: '.base_url().'Login');
			
		
		
		
	}
	

	
}
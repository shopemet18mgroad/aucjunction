<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_biddingdata extends CI_Controller {

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
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
			
			$this->load->model('Admin_model');
		$this->load->library('session');
		$sess['sessi'] = $this->session->userdata('username');
		//$active = array('susername'=>$sess['sessi']);
		$data['sqldata'] = $this->Admin_model->sellerbiddetails($sess['sessi']);
		//echo '<pre>';
		//print_r($data['sqldata']); die;
		//echo '</pre>';
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('seller/header',$sess);
		$this->load->view('seller/biddingdata',$data);
		$this->load->view('seller/footer');
		}
	}
	
		public function get_table(){
		$datatoquerydb = $this->uri->segment(3);
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->model('Admin_model');		
		$data = $this->Admin_model->get_lookalikesellerbid('biddingdata','sauctionid',$datatoquerydb);
		if(count($data)){
			echo '<table class="table table-striped table-bordered table-sm text-center mt-5" width="100%" cellspacing="0">';
			echo '<thead class="bg-warning  text-white text-center">';
			echo '<th colspan="21">Auction Details</th>';
			echo '<thead class="bg-primary text-white">';
			echo '<tr>';
			echo '<th>Auction Id</th>';
			echo '<th>Closing Date</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			foreach($data as $dat){
				echo '<tr>';
				echo '<td><a href="'.base_url().'Seller_biddingdatadetail/biddetail2/'.str_ireplace('/','-',$dat['sauctionid']).
				'">';
				echo $dat['sauctionid'];
				$passaucid = str_ireplace('/','-',$dat['sauctionid']);
				echo '</a>';
				echo '</td>';
				echo '<td>'.$dat['Date_time'].'</td>';
				echo '</a>';
				echo '</td>';
			
				echo '</tr>';
			}
			echo '</tbody>';
			echo '</table>';
		}else{
			echo '<table class="table table-striped table-bordered table-sm text-center mt-5" width="100%" cellspacing="0">';
			echo '<thead class="bg-primary text-white">';
			echo '<tr>';
			echo '<th>Auction Id</th>';
			echo '<th>Company Name</th>';
			echo '<th>Location</th>';
			echo '<th>Starting Date</th>';
			echo '<th>Closing Date</th>';
			echo '<th>Download</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			echo '<tr>';
				echo '<td><a href="'.base_url().'#">';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '</tr>';
			echo '</tbody>';
			echo '</table>';
		}



	}
	
}

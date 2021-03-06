<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer_app_forthcoming extends CI_Controller {

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
		$this->load->model('Admin_model');
		$this->load->helper('url');
		$this->load->helper('date');
		date_default_timezone_set("Asia/Kolkata");
    }
	 
	 
	public function index()
	{
		
		//$this->load->model("Admin_model");
		//$data["addlot"] = $this->Admin_model->fetch_all();
		$this->load->helper(array('url','html'));
		$this->load->library('session');
		
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "Buyer_App"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'Buyer_app_login/index_error/'.$datainserr);
			die;
		}else{
		
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('buyer_app/header',$sess);
		$this->load->view('buyer_app/buyer_app_forthcoming');
		$this->load->view('buyer_app/footer');
		}
		
	}
	
	public function get_table(){
		$time =  Date('Y-m-d H:i:s');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$datatoquerydb = $this->uri->segment(3);
		$this->load->model('Admin_model');
		$data = $this->Admin_model->get_lookalike2('addlot','sdescription',$datatoquerydb);
		if(count($data)){
			  
			
			echo '<table id="myTable" class="table table-bordered table-sm text-center mt-5" width="100%" cellspacing="0">';
			echo '<thead class="bg-warning text-white">';
			echo '<tr>';
			echo '<th colspan="12">Add Lot In Your List</th>';
			echo '</tr>';
			echo '<thead class="bg-primary text-white">';
			echo '<tr>';
			echo '<th>Auction Id</th>';
			echo '<th>Lot No</th>';
			echo '<th>Lot Name</th>';
			echo '<th>Auction Start Time</th>';
			echo '<th>Category</th>';
			echo '<th>Lot Description</th>';
			echo '<th>Seller / Company Name</th>';
			echo '<th>Quantity</th>';
			echo '<th>GST</th>';
			echo '<th>Location</th>';
			echo '<th>Download</th>';
			echo '<th>Add to Mylist</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			
			foreach($data as $dat){
				$sauc = str_ireplace('-','/',$dat['sauctionid']);
				$saucqarray = array('sauctionid'=>$sauc,'saucclosedate_time >'=>$time);
				$respdata = $this->Admin_model->getdatafromtable('auction',$saucqarray);
			$q = $this->Admin_model->buyersubscriptionfetch('buyerprofile', $sess['sessi']);
				$subscription = $q[0]->subscription;
				if($respdata){
					echo '<tr>';

				 echo '<td style="color:blue" data-label="Auction Id">'; 


				//echo $dat['sauctionid'];	
				echo $aucencode = str_ireplace('/','-',$dat['sauctionid']);
				//echo '</a>'; 
				echo '</td>'; 
				echo '<td data-label="Lot No">'.$dat['slotno'].'</td>';
				echo '<td data-label="Lot Name">'.$dat['slotname'].'</td>';
				$aucstarttime = $respdata[0]->saucstartdate_time;
				$tm = explode('.',$aucstarttime);
				$aucstarttime = $tm[0];
				$st = $aucstarttime;
				echo '<td data-label="Auction Start Time">'.$st.'</td>';
				echo '<td data-label="Category">'.$dat['scategory'].'</td>';
				echo '<td data-label="Lot Description">'.$dat['sdescription'].'</td>';
				if($subscription == true){
				echo '<td data-label="Seller / Company Name">'.$dat['sname'].'</td>';
				}
				else{
				echo '<td style="color:red">'."Pay Subscription".'</td>';	
				}
				echo '<td data-label="Quantity">'.$dat['sqty'].'</td>';
				echo '<td data-label="GST">'.$dat['sgst'].'</td>';
				echo '<td data-label="Location">'.$dat['slotlocation'].'</td>';
				if($subscription == true){
				echo '<td data-label="Download"><a href="'.base_url().'/Buyer_app_pdf_gen/auc_no/'.$aucencode.'/'.($dat['sname']).'"><i class="fa fa-download"></i></a></td>';
				}else{echo '<td></td>';}
				echo '';

				echo '<td data-label="Add to Mylist">';
				//$desc = str_ireplace(',','%2C',$dat['sdescription']);
				//$desc2 = str_ireplace('(','%28',$desc );
				//$desc3 = str_ireplace(')','%29',$desc2 );
				echo'<button type="button" id="'.$aucencode.'|'.$dat['slotno'].'" onClick="addtocart(this.id)">';
				echo'<i class="fas fa-heart" id="'.$aucencode.'|'.$dat['slotno'].'"></i>';
				echo'</button>';
				echo '</td>';
				echo '</tr>';
				}else{
					
				}
				
			}
			echo '</tbody>';
			echo '</table>';
		}else{
			echo '<table class="table table-striped table-bordered table-sm text-center mt-5" width="100%" cellspacing="0">';
			echo '<thead class="bg-primary text-white">';
			echo '<tr>';
			echo '<th>Auction Id</th>';
			echo '<th>Lot Name</th>';
			echo '<th>Auction Start Time</th>';
			echo '<th>Lot Description</th>';
			echo '<th>Seller / Company Name</th>';
			echo '<th>Quantity</th>';
			echo '<th>GST</th>';
			echo '<th>Location</th>';
			echo '<th>Add to Mylist</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			echo '<tr>';
				echo '<td><a href="'.base_url().'#">';
				echo '<td data-label="Lot No">No Records Found</td>';
				echo '<td data-label="Lot Name">No Records Found</td>';
				echo '<td data-label="Auction Start Time">No Records Found</td>';
				echo '<td data-label="Lot Description">No Records Found</td>';
				echo '<td data-label="Seller / Company Name">No Records Found</td>';
				echo '<td data-label="Quantity">No Records Found</td>';
				echo '<td data-label="GST">No Records Found</td>';
				echo '<td data-label="Location">No Records Found</td>';
				echo '<td data-label="Add to Mylist">No Records Found</td>';
				echo '</tr>';
			echo '</tbody>';
			echo '</table>';
			
		}



	}
		
	public function Addtocart(){
		$dat = urldecode($this->uri->segment(3));
		$this->load->library('session');
		$bidderuname = $this->session->userdata('username');
		$datexp = explode('|',$dat);
		$auctionid = str_ireplace('-','/',$datexp[0]);
		$lotno = $datexp[1];
		//$description = urldecode($datexp[2]);
		//print_r($sdescription); die;
		$data = array('sauctionid'=>$auctionid);
		$data2 = array('sauctionid'=>$auctionid,'slotno'=>$lotno);		
		$dat4 = $this->Admin_model->getdatafromtable('addlot',$data2);
		$dat3 = $this->Admin_model->getdatafromtable('auction',$data);
		$aucstart = $dat3[0]->saucstartdate_time;
		$aucend = $dat3[0]->saucclosedate_time;
		$aucstartbid = $dat4[0]->sstartbidprice;
		$aucstartbidprice = $dat4[0]->sprice;
		$bcheck = array('bidderusername'=>$bidderuname,'auctionid'=>$auctionid,'lotno'=>$lotno);
		$cartdata = array(
		'bidderusername'  => $bidderuname,'auctionid'=>$auctionid,'lotno' => $lotno,'aucstartdate_time'=>$aucstart,'aucclosedate_time'=>$aucend,'bidstart'=>$aucstartbid,'bidprice'=>$aucstartbidprice);
		if($this->Admin_model->check('biddercart',$bcheck)){
			echo "EX";
		}else{
			$status = $this->Admin_model->insert('biddercart', $cartdata);
			echo "IN";
		}
		die;
		
		
	
	}
	
}
?>
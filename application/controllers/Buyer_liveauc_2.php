<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer_liveauc_2 extends CI_Controller {

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
		$active = array('bidderusername'=>$sess['sessi'],'auctionid'=>$auctionid,'lotno'=>$lotno,);
		$active2 = array('sauctionid'=>$auctionid,'slotno'=>$lotno,);
		$query = $this->Admin_model->getdatafromtable('biddercart', $active);
		$query2 = $this->Admin_model->getdatafromtable('addlot', $active2);
		$data['sqldata'] = $query;
		$data['sqldata2'] = $query2;
		$data['sessi'] = $sess['sessi'];
		$this->load->view('buyer/header',$sess);
		$this->load->view('buyer/liveauc_2', $data);
		$this->load->view('buyer/footer');
		
	}
	public function get_table_ajax(){
		$this->load->helper('url');
		$this->load->library('session');
		date_default_timezone_set('Asia/Kolkata');
		$time =  Date('Y-m-d H:i:s');
		$variable = $this->uri->segment(3);
		$vararray = urldecode($variable);
		$vararray2 = explode('|',$vararray);
		$auctionid = str_ireplace('-','/',$vararray2[0]);
		$lotno = $vararray2[1];
		$sess = $this->session->userdata('username');
		$this->load->model('Admin_model');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active = array('bidderusername'=>$sess['sessi'],'auctionid'=>$auctionid,'lotno'=>$lotno,);
		$active2 = array('sauctionid'=>$auctionid,'slotno'=>$lotno,);
		$query = $this->Admin_model->getdatafromtable('biddercart', $active);
		$query2 = $this->Admin_model->getdatafromtable('addlot', $active2);
		$diff = strtotime($query[0]->aucclosedate_time)-strtotime($time);
		$years = floor($diff / (365*60*60*24));  
			$months = floor(($diff - $years * 365*60*60*24)/ (30*60*60*24));   
			$days = floor(($diff - $years * 365*60*60*24 -  $months*30*60*60*24)/ (60*60*24)); 
			$hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60));  
$minutes = floor(($diff - $years * 365*60*60*24  - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);  
$seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60)); 
$Remaining = $days." Days ".$hours." Hours ".$minutes." Minutes ";
		if($diff <= 0){
			$condtion = false;
		}else{
			$condtion = true;
		}
				//$diff = (strtotime($sqldata[0]->aucclosedate_time) - strtotime($time));
				//$diff = abs($time - $sqldata[0]->aucclosedate_time);  
			
		//$datfnl = floor($datediff / (3600)).":".floor($datediff / (60));
		
echo '<table class="table table-striped table-bordered table-sm text-center w-auto small ml-5" width="100%" cellspacing="0" >';
echo '<thead class="bg-info text-white text-center">';
echo '<th colspan="7">Auction Details</th>';
echo '</thead>';
echo '<thead class="bg-primary text-white">';
echo '<tr>';
echo '';
echo '<th width="22%">Auction Id</th>';
echo '<th>User Name</th>';
echo '<th>Auction Start Date</th>';
echo '<th>Auction Close Date</th>';
echo '<th>Seller Terms & Condition</th>';
echo '</tr>';
echo '</thead>';
echo '';
echo '<tbody>';
echo '<form action="<?php echo base_url();?>" method="POST"  enctype="multipart/form-data">';
echo '<tr>';
echo '';
echo '<td><a href="#">'.$query[0]->auctionid.'</a></td>';
echo '';
echo '<td>'.$query[0]->bidderusername.'</td>';
echo '';
echo '<td>'.$query[0]->aucstartdate_time.'</td>';
echo '<td>'.$query[0]->aucclosedate_time.'</td>';
echo '<td><a href="#"><u>Click here</u></a></td>';
echo '</tr>';
echo '</tbody>';
echo '</table>';
echo '</form>';
echo '<table class="table table-striped table-sm w-auto small table-bordered mt-4 text-center" id="dataTable" width="100%" cellspacing="0">';
echo '<thead class="bg-warning  text-white text-center">';
echo '<tr>';
echo '<th colspan="14">Open LOT Number</th>';
echo '</tr>';
echo '</thead>';
echo '<thead class="bg-primary text-white">';
echo '<tr>';
echo '<th width="8%">Lot No</th>';
echo '<th>Lot Name</th>';
echo '<th>Location</th>';
echo '<th>Close Time</th>';
echo '<th>Time Left</th>';
echo '<th>Quantity</th>';
echo '<th>Unit</th>';
echo '<th>Start Price</th>';
echo '<th>My Bid</th>';
echo '<th>Live Status</th>';
echo '<th width="18%">Bid</th>';
echo '<th>Autobid</th>';
echo '<th width="10%">Status</th>';
echo '</tr>';
echo '</thead>';
if($condtion){
	echo '';
echo '<tbody>';
echo '<tr><td>'.$query2[0]->slotno.'</td>';
echo '<td>'.$query2[0]->slotname.'</td>';
echo '<td>'.$query2[0]->slotlocation.'</td>';
echo '<td>'.$query[0]->aucclosedate_time.'</td>';
echo '<td>'.$Remaining.'</td>';
echo '<td>'.$query2[0]->sqty.'</td>';
echo '<td>'.$query2[0]->sunitmeasurment.'</td>';
echo '<td>'.$query2[0]->sstartbidprice.'</td>';
echo '<td>'.$query[0]->bidprice.'</td>';
echo '<td>'.$query2[0]->cbidval.'</td>';
if($query2[0]->sstartbidprice >= $query2[0]->cbidval){
	$datbid = $query2[0]->sstartbidprice;
}else{
	$datbid = $query2[0]->cbidval;
}   

//$sessa2 = urlencode($sess['sessi']);
$sessa2 = str_ireplace('@','%40',$sess['sessi']);
$id = $sessa2."|".str_ireplace('/','-',$query[0]->auctionid)."|".$query2[0]->slotno;
echo '<td><div class="form-group row ml-2">';
echo '<input class="form-control col-sm-7 mr-2" type="number" value="'.$datbid.'" min="0" step="'.$query2[0]->sprice.'" id="bid" name="bid">';
echo '<button type="submit" class="btn btn-info" id="'.$id.'" onclick="bid_manual(this.id)">Bid</button></div>';
echo '';

echo '</td>';
echo '<td><a href="<?php echo base_url();?>buyer_autobid"><button type="button" class="btn btn-info">AutoBid</button></a></td>';
echo '<td><a href="<?php echo base_url();?>buyer_biddinglivestatus"><button type="button" class="btn btn-info btn-sm p-2"><b>Live Status</b></button></a></td>';
echo '</tr>';
echo '';
echo '</tbody>';
	
}else{
	echo '';
echo '<tbody>';
echo '<tr><td>No Live Data</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '</tr>';
echo '';
echo '</tbody>';
}


echo '</table>';
		
	}
	
	
	 public function liveauc_2(){
		$retrivevaltmp = urldecode($this->uri->segment(3));
		$retriveval = array('sauctionid'=>$retrivevaltmp);
		$this->load->model('Admin_model');
		$data['sqldata'] = $this->Admin_model->getdatafromtable('auction',$retriveval);
		$this->load->helper('url');
		$this->load->view('buyer/header');
		$this->load->view('buyer/liveauc_2', $data);
		$this->load->view('buyer/footer');
	}
	 public function liveauc_2_alert(){
		$retrivevaltmp = $this->uri->segment(3);
		$retrivevaltmp2 = urldecode($this->uri->segment(4));
		echo '<script language="javascript">';
			echo 'alert("'.$retrivevaltmp2.'")';  //not showing an alert box.
			echo '</script>';
		$retriveval = array('sauctionid'=>$retrivevaltmp);
		$this->load->model('Admin_model');
		$data['sqldata'] = $this->Admin_model->getdatafromtable('auction',$retriveval);
		$this->load->helper('url');
		$this->load->view('buyer/header');
		$this->load->view('buyer/liveauc_2', $data);
		$this->load->view('buyer/footer');
	} 
	public function get_currency(){
		$data = urldecode($this->uri->segment(3));
		$this->load->library('currency');
		echo $this->currency->getIndianCurrency($data);
		die;
	}
	public function storebidval(){
		$this->load->helper('url');
		$this->load->model('Admin_model');
		$data = urldecode($this->uri->segment(3));
		$data2 = explode('|',$data);
		$username = str_ireplace('%40','@',$data2[0]);
		$auctionid = str_ireplace('-','/',$data2[1]);
		$lotno = $data2[2];
		$bitval = $data2[3];
		$dataforupdate = array('cbidval' => $bitval);
		$active2 = array('sauctionid'=>$auctionid,'slotno'=>$lotno);
		$active3 = array('bidderusername'=>$username,'sauctionid'=>$auctionid,'slotno'=>$lotno);
		//$query = $this->Admin_model->getdatafromtable('biddercart', $active);
		$query2 = $this->Admin_model->getdatafromtable('addlot', $active2);
		if(!$query2[0]->status){
			if($query2[0]->cbidval >= $bitval){
				echo "Higher Bid Value";
				die;
			}else{
				$this->Admin_model->update_custom('addlot',$dataforupdate,$active2,$active2);
				$this->Admin_model->update_custom('biddercart',$dataforupdate,$active3,$active3);
				$auctionid = str_ireplace('/','-',$auctionid);
				echo "Done";
				header('location: '.base_url().'Buyer_liveauc_2/index/'.$auctionid.'|'.$lotno);
				die;
			}
		}else{
			echo "Bidding Closed";
			die;
		}die;
	}
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Enquiry_Form extends CI_Controller
{

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
 echo $this->uri->segment(3);echo "maku"; die;
		$this->load->helper(array('url', 'html', 'date'));
		//Setting  default time zone
		date_default_timezone_set('Asia/Kolkata');
		//initaliazing the current time 
		$time =  Date('Y-m-d H:i:s');
		//Loading Admin Model
		$this->load->model('Admin_model');
		$query = $this->Admin_model->gettable('spocs');
		//echo '<pre>'; print_r($data); die; echo '</pre>';
		$adac['sqldata']= $query;
		//print_r($adac['sqldata']);die;
		
		$this->load->view('enquiry_app/Enquiry Form',$adac);
	}
}
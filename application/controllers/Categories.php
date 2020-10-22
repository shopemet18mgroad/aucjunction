<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

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
		$this->load->view('header');
		//$this->load->view('testimonials');
		$this->load->view('footer');
		
	}
	public function type()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$data = array('metal_type' => $this->uri->segment(3));
		if($data['metal_type'] == 'Ferrous'){
			$this->load->view('dummy-ferrous');
		}else if($data['metal_type'] == 'PCB'){
			$this->load->view('dummy-pcb');
		}else{
			$this->load->view('dummy-others');
		}
		//$metal_type = $this->uri->segment(3);
		
		$this->load->view('footer');
		
	}
	
	
}

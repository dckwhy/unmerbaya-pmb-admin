<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *"); 

class Dashboard extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$admin_auth = $this->session->userdata('admin_auth');
		if(!$admin_auth){
			redirect(base_url('authenticate'));
		}
	}

	public function index()
	{ 
		$data['konten'] = $this->load->view('dashboard/dashboard', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function dashboard()
	{ 
		$data['konten'] = $this->load->view('dashboard/dashboard', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}


}

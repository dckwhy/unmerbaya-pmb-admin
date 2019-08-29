<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *"); 

class Persyaratan extends MY_Controller {

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
		$data['konten'] = $this->load->view('persyaratan/data', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function data()
	{ 
		$data['konten'] = $this->load->view('persyaratan/data', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function add()
	{ 
		$data['konten'] = $this->load->view('persyaratan/add', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function detail()
	{ 
		$data['konten'] = $this->load->view('persyaratan/detail', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function edit()
	{ 
		$data['konten'] = $this->load->view('persyaratan/edit', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function insert_content(){
		$data = $this->input->post();
		$date = date('Yhs');
		if(move_uploaded_file(
			$_FILES['foto_file']['tmp_name'],
			'./prabotan/image/img-persyaratan/'.'syarat'.$date.'.'.pathinfo($_FILES['foto_file']['name'], PATHINFO_EXTENSION)
			)){ $file  = 'syarat'.$date.'.'.pathinfo($_FILES['foto_file']['name'], PATHINFO_EXTENSION); }
			$data['img'] = $file;

		unset($data['foto_file']);
		$data_insert = $this->db->insert('data_persyaratan', $data);
		if ($data_insert) {
			$data_feed['msg'] = 'success';
		}else{
			$data_feed['msg'] = 'fail';
		}

		echo json_encode($data_feed);
	}

	public function edit_data(){
		
		$data = $this->input->post();
		$date = date('Yhs');
		$id = $data['id'];
		if(move_uploaded_file(
			$_FILES['foto_file']['tmp_name'],
			'./prabotan/image/img-persyaratan/'.'syarat'.$date.'.'.pathinfo($_FILES['foto_file']['name'], PATHINFO_EXTENSION)
			))
		{
			$file = 'syarat'.$date.'.'.pathinfo($_FILES['foto_file']['name'], PATHINFO_EXTENSION);
			$data['img'] = $file;
		}

		unset($data['id']);
		unset($data['foto_file']);
		$this->db->where('id', $id);
		$data_insert = $this->db->update('data_persyaratan', $data);
		if ($data_insert) {
			$data_feed['msg'] = 'success';
		}else{
			$data_feed['msg'] = 'fail';
		}

		echo json_encode($data_feed);
	}
	
}

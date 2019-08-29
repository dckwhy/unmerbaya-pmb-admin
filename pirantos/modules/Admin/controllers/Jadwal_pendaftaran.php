<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *"); 

class Jadwal_pendaftaran extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		// $admin_auth = $this->session->userdata('admin_auth');
		// if(!$admin_auth){
		// 	redirect(base_url('authenticate'));
		// }
	}

	public function index()
	{ 
		$data['konten'] = $this->load->view('jadwal_pendaftaran/data', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function data()
	{ 
		$data['konten'] = $this->load->view('jadwal_pendaftaran/data', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function add()
	{ 
		$data['konten'] = $this->load->view('jadwal_pendaftaran/add', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function detail()
	{ 
		$data['konten'] = $this->load->view('jadwal_pendaftaran/detail', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function edit()
	{ 
		$data['konten'] = $this->load->view('jadwal_pendaftaran/edit', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}

	public function insert_content(){
		$data = $this->input->post();
		$date = date('Yhs');
		if(move_uploaded_file(
			$_FILES['foto_file']['tmp_name'],
			'./prabotan/image/jadwal_pendaftaran/'.'jp'.$date.'.'.pathinfo($_FILES['foto_file']['name'], PATHINFO_EXTENSION)
			)){ $file  = 'jp'.$date.'.'.pathinfo($_FILES['foto_file']['name'], PATHINFO_EXTENSION); }
			$data['img'] = $file;

		if(move_uploaded_file(
			$_FILES['foto_file2']['tmp_name'],
			'./prabotan/image/jadwal_pendaftaran/'.'jp'.$date.'.'.pathinfo($_FILES['foto_file2']['name'], PATHINFO_EXTENSION)
			)){ $file2  = 'jp'.$date.'.'.pathinfo($_FILES['foto_file2']['name'], PATHINFO_EXTENSION); }
			$data['img2'] = $file2;

		unset($data['foto_file']);
		unset($data['foto_file2']);
		$data_insert = $this->db->insert('data_jadwal_pendaftaran', $data);
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
			'./prabotan/image/jadwal_pendaftaran/'.'jp'.$date.'.'.pathinfo($_FILES['foto_file']['name'], PATHINFO_EXTENSION)
			))
		{
			$file = 'jp'.$date.'.'.pathinfo($_FILES['foto_file']['name'], PATHINFO_EXTENSION);
			$data['img'] = $file;
		}
		if(move_uploaded_file(
			$_FILES['foto_file2']['tmp_name'],
			'./prabotan/image/jadwal_pendaftaran/'.'jp'.$date.'.'.pathinfo($_FILES['foto_file2']['name'], PATHINFO_EXTENSION)
			))
		{
			$file2 = 'jp'.$date.'.'.pathinfo($_FILES['foto_file2']['name'], PATHINFO_EXTENSION);
			$data['img2'] = $file2;
		}

		unset($data['id']);
		unset($data['foto_file']);
		unset($data['foto_file2']);
		$this->db->where('id', $id);
		$data_insert = $this->db->update('data_jadwal_pendaftaran', $data);
		if ($data_insert) {
			$data_feed['msg'] = 'success';
		}else{
			$data_feed['msg'] = 'fail';
		}

		echo json_encode($data_feed);
	}

	public function delete_data()
	{
		$feedback = array();
		$data = $this->input->post();
		$where_value = $data['where_value'];
		$where_field = $data['where_field'];
		$table_name = $data['table_name'];
		if($where_field){
			$this->db->where($where_field, $where_value);
		}
		$delete = $this->db->delete($table_name);
		if($delete){
			$feedback['msg'] = 'success';
		} else{
			$feedback['msg'] = 'fail';
		}
		echo json_encode($feedback);
	}

	
}

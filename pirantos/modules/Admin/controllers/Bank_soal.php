<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *"); 

class Bank_soal extends MY_Controller {

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
		$data['konten'] = $this->load->view('bank_soal/data', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function data_ipa()
	{ 
		$data['konten'] = $this->load->view('bank_soal/data_ipa', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function ipa_matematika()
	{ 
		$data['konten'] = $this->load->view('bank_soal/ipa_matematika', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function ipa_fisika()
	{ 
		$data['konten'] = $this->load->view('bank_soal/ipa_fisika', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function ipa_kimia()
	{ 
		$data['konten'] = $this->load->view('bank_soal/ipa_kimia', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function ipa_biologi()
	{ 
		$data['konten'] = $this->load->view('bank_soal/ipa_biologi', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function add_ipa_mtk()
	{ 
		$data['konten'] = $this->load->view('bank_soal/add_ipa_mtk', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function add_ipa_fisika()
	{ 
		$data['konten'] = $this->load->view('bank_soal/add_ipa_fisika', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function add_ipa_kimia()
	{ 
		$data['konten'] = $this->load->view('bank_soal/add_ipa_kimia', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function add_ipa_biologi()
	{ 
		$data['konten'] = $this->load->view('bank_soal/add_ipa_biologi', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function detail_ipa_matematika()
	{ 
		$data['konten'] = $this->load->view('bank_soal/detail_ipa_matematika', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function detail_ipa_fisika()
	{ 
		$data['konten'] = $this->load->view('bank_soal/detail_ipa_fisika', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function detail_ipa_kimia()
	{ 
		$data['konten'] = $this->load->view('bank_soal/detail_ipa_kimia', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function detail_ipa_biologi()
	{ 
		$data['konten'] = $this->load->view('bank_soal/detail_ipa_biologi', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function edit_ipa_matematika()
	{ 
		$data['konten'] = $this->load->view('bank_soal/edit_ipa_matematika', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function edit_ipa_fisika()
	{ 
		$data['konten'] = $this->load->view('bank_soal/edit_ipa_fisika', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function edit_ipa_kimia()
	{ 
		$data['konten'] = $this->load->view('bank_soal/edit_ipa_kimia', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function edit_ipa_biologi()
	{ 
		$data['konten'] = $this->load->view('bank_soal/edit_ipa_biologi', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function data_ips()
	{ 
		$data['konten'] = $this->load->view('bank_soal/data_ips', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function ips_sejarah()
	{ 
		$data['konten'] = $this->load->view('bank_soal/ips_sejarah', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function ips_sosiologi()
	{ 
		$data['konten'] = $this->load->view('bank_soal/ips_sosiologi', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function ips_geografi()
	{ 
		$data['konten'] = $this->load->view('bank_soal/ips_geografi', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function ips_ekonomi()
	{ 
		$data['konten'] = $this->load->view('bank_soal/ips_ekonomi', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function add_ips_sejarah()
	{ 
		$data['konten'] = $this->load->view('bank_soal/add_ips_sejarah', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function add_ips_sosiologi()
	{ 
		$data['konten'] = $this->load->view('bank_soal/add_ips_sosiologi', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function add_ips_geografi()
	{ 
		$data['konten'] = $this->load->view('bank_soal/add_ips_geografi', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function add_ips_ekonomi()
	{ 
		$data['konten'] = $this->load->view('bank_soal/add_ips_ekonomi', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function detail_ips_sejarah()
	{ 
		$data['konten'] = $this->load->view('bank_soal/detail_ips_sejarah', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function detail_ips_sosiologi()
	{ 
		$data['konten'] = $this->load->view('bank_soal/detail_ips_sosiologi', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function detail_ips_geografi()
	{ 
		$data['konten'] = $this->load->view('bank_soal/detail_ips_geografi', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function detail_ips_ekonomi()
	{ 
		$data['konten'] = $this->load->view('bank_soal/detail_ips_ekonomi', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function edit_ips_sejarah()
	{ 
		$data['konten'] = $this->load->view('bank_soal/edit_ips_sejarah', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function edit_ips_sosiologi()
	{ 
		$data['konten'] = $this->load->view('bank_soal/edit_ips_sosiologi', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function edit_ips_geografi()
	{ 
		$data['konten'] = $this->load->view('bank_soal/edit_ips_geografi', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function edit_ips_ekonomi()
	{ 
		$data['konten'] = $this->load->view('bank_soal/edit_ips_ekonomi', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function data_ipc()
	{ 
		$data['konten'] = $this->load->view('bank_soal/data_ipc', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	
	// public function insert_data_checker()
	// {
	// 	$feedback 		= array();
	// 	$data 			= $this->input->post();
	// 	$data['upass'] 	= paramEncrypt($data['password']); 
	// 	$table_name 	= $data['table_name'];
	// 	$checker 		= 'clear';
	// 	foreach($data['checker'] as $check){
	// 		$this->db->where($check, $data[$check]);
	// 		$check_result = $this->db->get($table_name)->row();
	// 		if(count($check_result)>0){
	// 			$feedback['msg'] = $check;
	// 			$checker = 'fail';
	// 		}
	// 	}
	// 	unset($data['password']);
	// 	unset($data['table_name']);
	// 	unset($data['checker']);

	// 	if($checker=='clear'){
	// 		$insert = $this->db->insert($table_name, $data);
	// 		if($insert){
	// 			$feedback['msg'] = 'success';
	// 		} else{
	// 			$feedback['msg'] = 'fail';
	// 		}
	// 	}
	// 	echo json_encode($feedback);
	// }
	// public function upload_img_summernote(){
	// 	$data = $this->input->post();

	// 	$allowed = array( 'png', 'jpg', 'gif', 'jpeg' );
	// 	if( isset($_FILES['file']) && $_FILES['file']['error'] == 0 ) {
	// 		$extension = pathinfo( $_FILES['file']['name'], PATHINFO_EXTENSION );
	// 		if( !in_array( strtolower( $extension ), $allowed ) ) {
	// 			echo 'AN ERROR OCCURED - INVALID IMAGE';
	// 			exit;
	// 		}
	// 		if( move_uploaded_file( $_FILES['file']['tmp_name'], 'prabotan/image/photo/'.$_FILES['file']['name'] ) ) {
	// 			echo base_url().'prabotan/image/photo/'.$_FILES['file']['name']; 
	// 			exit;
	// 		}
	// 	}
	// 	echo 'AN ERROR OCCURED';
	// 	exit;
	// }

	// public function edit_data()
	// {
	// 	$data = $this->input->post();
	// 	$date = date('ymhs');
	// 	$id = $data['id'];
	// 	if(move_uploaded_file(
	// 		$_FILES['foto_file']['tmp_name'],
	// 		'./prabotan/image/photo/'.'photo'.$date.'.'.pathinfo($_FILES['foto_file']['name'], PATHINFO_EXTENSION)
	// 	))
	// 	{ 	
	// 		$path = './prabotan/image/photo/'.$data['photo'];
	// 		if(is_file($path)){
	// 			unlink($path);
	// 		}
	// 		$file = 'photo'.$date.'.'.pathinfo($_FILES['foto_file']['name'], PATHINFO_EXTENSION);  
	// 		$data['photo'] = $file;
	// 	}

	// 	unset($data['id']);
	// 	unset($data['foto_file']);
	// 	$this->db->where('id', $id);
	// 	$data_insert = $this->db->update('data_admin', $data);
	// 	if ($data_insert) {
	// 		$data_feed['msg'] = 'success';
	// 	}else{
	// 		$data_feed['msg'] = 'fail'; 
	// 	}

	// 	echo json_encode($data_feed);
	// }
	// public function edit_data_checker()
	// {
	// 	$feedback = array();
	// 	$data = $this->input->post();
	// 	$where_value 	= $data['where_value'];
	// 	$where_field 	= $data['where_field'];
	// 	$table_name 	= $data['table_name'];
	// 	$data['upass'] 	= paramEncrypt($data['password']); 
	// 	if($where_field && $where_field != '' && $where_value && $table_name){
	// 		unset($data['where_field']);
	// 		unset($data['where_value']);
	// 		unset($data['table_name']);
	// 		unset($data['password']);

	// 		$checker = 'clear';

	// 		foreach($data['checker'] as $check){
	// 			$this->db->where($where_field.'!= ',$where_value);
	// 			$this->db->where($check, $data[$check]);
	// 			$check_result = $this->db->get($table_name)->row();
	// 			if(count($check_result)>0){
	// 				$feedback['msg'] = $check.'_fail';
	// 				$checker = 'fail';
	// 			}
	// 		}
	// 		unset($data['table_name']);
	// 		unset($data['checker']);

	// 		if($checker=='clear'){
	// 			$this->db->where($where_field, $where_value);
	// 			$update = $this->db->update($table_name, $data);
	// 			if($update){
	// 				$feedback['msg'] = 'success';
	// 			} else{
	// 				$feedback['msg'] = 'fail';
	// 			}
	// 		}
	// 	}else{
	// 		$feedback['msg'] = 'fail_query';
	// 	}
	// 	echo json_encode($feedback);
	// }
	// public function delete_data()
	// {
	// 	$feedback = array();
	// 	$data = $this->input->post();
	// 	$where_value = $data['where_value'];
	// 	$where_field = $data['where_field'];
	// 	$table_name = $data['table_name'];
	// 	if($where_field){
	// 		$this->db->where($where_field, $where_value);
	// 	}
	// 	$delete = $this->db->delete($table_name);
	// 	if($delete){
	// 		$feedback['msg'] = 'success';
	// 	} else{
	// 		$feedback['msg'] = 'fail';
	// 	}
	// 	echo json_encode($feedback);
	// }
}

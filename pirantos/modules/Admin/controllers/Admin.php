<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *"); 

class Admin extends MY_Controller {

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
		redirect(base_url('admin/dashboard'));
	}

	public function test()
	{ 
		echo form('text.array', 'nama');
		echo form('img', 'nama');
	}

	public function delete_data(){
		$data = $this->input->post();

		$this->db->where($data['where_field'], $data['where_value']);
		$delete = $this->db->delete($data['table_name']); 
		if ($delete) {
			$feed['msg'] = 'success';
		}else{
			$feed['msg'] = 'fail';
		}

		echo json_encode($feed);
	}
	

}

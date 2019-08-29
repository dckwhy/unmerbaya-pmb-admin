<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unmer extends MX_Controller {


	function antiInjection($str) {
		$r = stripslashes(strip_tags(htmlspecialchars($str, ENT_QUOTES)));
		return $r;
	}
	public function register(){
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
		$data = array(
			'name' => $name,
			'phone' => $phone,
			'email' => $email,
			'pass' => $pass,
		);
		if ($data) {
			$this->db->insert('data_user', $data);
			$feedback_msg['auth_message'] = 'success';
		} else {
			$feedback_msg['auth_message'] = 'fail';
		}
		echo json_encode($feedback_msg);
	}
	public function login()
	{
		$user = $this->input->post('login-username');
		$pass = $this->input->post('login-password');
		$feedback_msg['auth'] = 'log';

		$get = $this->db->query("SELECT * FROM data_user WHERE name = '$user' AND pass = '$pass'");
		$hasil = $get->row();

		if ($hasil) {
			unset($hasil->password);
			$feedback_msg['login_data'] = $hasil;
			$feedback_msg['auth_message'] = 'success';
		} else {
			$feedback_msg['auth_message'] = 'fail';
		}
		echo json_encode($feedback_msg);
	}
	public function get_persyaratan(){
		$persyaratan = $this->db->get('data_persyaratan')->result();
		foreach ($persyaratan as $value) {
			$value->img = base_url('prabotan/image/img-persyaratan/'.$value->img);
			$value->content = limit_text($value->content, 20);
		}
		echo json_encode($persyaratan);
	}
	public function get_detail_persyaratan(){
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$detail_persyaratan = $this->db->get('data_persyaratan')->row();
		$detail_persyaratan->img = base_url('prabotan/image/img-persyaratan/'.$detail_persyaratan->img);

		echo json_encode($detail_persyaratan);
	}
	public function get_informasi(){
		$informasi = $this->db->get('data_informasi')->result();
		foreach ($informasi as $key => $value) {
			$value->img = base_url('prabotan/image/Asset1/Pengumuman/'.$value->img);
			$value->content = limit_text($value->content, 12);
		}
		echo json_encode($informasi);
	}
	public function get_detail_informasi(){
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$detail_informasi = $this->db->get('data_informasi')->row();
		$detail_informasi->img = base_url('prabotan/image/Asset1/Pengumuman/'.$detail_informasi->img);

		echo json_encode($detail_informasi);
	}
	public function get_jadwal_test(){
		$jadwal_test = $this->db->get('data_jadwal_test')->result();
		foreach ($jadwal_test as $key => $value) {
			$value->img = base_url('prabotan/image/Asset1/Jadwal/'.$value->img);
			$value->content = limit_text($value->content, 20);
		}
		echo json_encode($jadwal_test);
	}
	public function get_detail_jadwal_test(){
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$detail_jadwal_test = $this->db->get('data_jadwal_test')->row();
		$detail_jadwal_test->img = base_url('prabotan/image/Asset1/Jadwal/'.$detail_jadwal_test->img);

		echo json_encode($detail_jadwal_test);
	}
	public function get_profile(){
		$profile = $this->db->get('data_user')->row();
		$profile->img = base_url('prabotan/image/photo/'.$profile->img);

		echo json_encode($profile);
	}
	public function get_personal_data(){
		$personal_data = $this->db->get('unmer_calon_mahasiswa.personal_data')->row();
		$d = new DateTime($personal_data->tgl_lahir);
		$personal_data->tgl_lahir = $d->format('d/m/Y');
		echo json_encode($personal_data);
	}
	public function get_jadwal_pendaftaran(){
		$jadwal_pendaftaran = $this->db->get('data_jadwal_pendaftaran')->result();
		foreach ($jadwal_pendaftaran as $key => $value) {
			$value->img = base_url('prabotan/image/Asset1/Jadwal/'.$value->img);
			$value->img2 = base_url('prabotan/image/Asset1/Jadwal/'.$value->img2);
		}
		echo json_encode($jadwal_pendaftaran);
	}
	public function get_soal_ipa_matematika()
	{
		$this->db->like('code','MTK');
		$soal_ipa = $this->db->get('unmer_bank_soal.ipa')->result();
		echo json_encode($soal_ipa);
	}
	public function get_soal_ipa_fisika()
	{
		$this->db->like('code','FIS');
		$soal_ipa = $this->db->get('unmer_bank_soal.ipa')->result();
		echo json_encode($soal_ipa);
	}
	public function get_soal_ipa_kimia()
	{
		$this->db->like('code','KIM');
		$soal_ipa = $this->db->get('unmer_bank_soal.ipa')->result();
		echo json_encode($soal_ipa);
	}
	public function get_soal_ipa_biologi()
	{
		$this->db->like('code','BIO');
		$soal_ipa = $this->db->get('unmer_bank_soal.ipa')->result();
		echo json_encode($soal_ipa);
	}
	public function get_soal_ips_geografi()
	{
		$this->db->like('code','GEO');
		$soal_ips = $this->db->get('unmer_bank_soal.ips')->result();
		echo json_encode($soal_ips);
	}
	public function get_soal_ips_sejarah()
	{
		$this->db->like('code','SEJ');
		$soal_ips = $this->db->get('unmer_bank_soal.ips')->result();
		echo json_encode($soal_ips);
	}
	public function get_soal_ips_ekonomi()
	{
		$this->db->like('code','EKO');
		$soal_ips = $this->db->get('unmer_bank_soal.ips')->result();
		echo json_encode($soal_ips);
	}
	public function get_soal_ips_sosiologi()
	{
		$this->db->like('code','SOS');
		$soal_ips = $this->db->get('unmer_bank_soal.ips')->result();
		echo json_encode($soal_ips);
	}
	public function get_home_banner()
	{
		$home_banner = $this->db->get('data_home')->result();
		foreach ($home_banner as $key => $value) {
			$value->banner = base_url('prabotan/image/home/'.$value->banner);
		}
		echo json_encode($home_banner);
	}

	public function input_personal_data(){
		$data = $this->input->post();
		$address = array($data['alamat'],', ', $data['desa'],', ', $data['kecamatan'],', ', $data['kota']);
		$data['address'] = implode($address);
		unset($data['alamat']);
		unset($data['desa']);
		unset($data['kecamatan']);
		unset($data['kota']);
		$data_insert = $this->db->insert('unmer_calon_mahasiswa.personal_data', $data);
		if ($data_insert) {
			$feedback_msg['auth_message'] = 'success';
		} else {
			$feedback_msg['auth_message'] = 'fail';
		}
		echo json_encode($feedback_msg);
	}

	public function input_detail_personal_data(){
		$data = $this->input->post();
		$date = date('Y');

		if(move_uploaded_file($_FILES['foto_file']['tmp_name'],'./prabotan/image/ktp/'.'ktp'.$date.'.'.pathinfo($_FILES['foto_file']['name'], PATHINFO_EXTENSION))){
			$file  = 'ktp'.$date.'.'.pathinfo($_FILES['foto_file']['name'], PATHINFO_EXTENSION);
		}
		$data['img_ktp'] = $file;

		unset($data['foto_file']);

		if(move_uploaded_file($_FILES['foto_file_2']['tmp_name'],'./prabotan/image/kk/'.'kk'.$date.'.'.pathinfo($_FILES['foto_file_2']['name'], PATHINFO_EXTENSION))){
			$file  = 'kk'.$date.'.'.pathinfo($_FILES['foto_file_2']['name'], PATHINFO_EXTENSION);
		}
		$data['img_kk'] = $file;

		unset($data['foto_file_2']);

		if(move_uploaded_file($_FILES['foto_file_3']['tmp_name'],'./prabotan/image/nisn/'.'nisn'.$date.'.'.pathinfo($_FILES['foto_file_3']['name'], PATHINFO_EXTENSION))){
			$file  = 'nisn'.$date.'.'.pathinfo($_FILES['foto_file_3']['name'], PATHINFO_EXTENSION);
		}
		$data['img_nisn'] = $file;

		unset($data['foto_file_3']);

		if(move_uploaded_file($_FILES['foto_file_4']['tmp_name'],'./prabotan/image/ijazah/'.'ijazah'.$date.'.'.pathinfo($_FILES['foto_file_4']['name'], PATHINFO_EXTENSION))){
			$file  = 'ijazah'.$date.'.'.pathinfo($_FILES['foto_file_4']['name'], PATHINFO_EXTENSION);
		}
		$data['img_ijazah'] = $file;

		unset($data['foto_file_4']);

		if(move_uploaded_file($_FILES['foto_file_5']['tmp_name'],'./prabotan/image/photo/'.'photo'.$date.'.'.pathinfo($_FILES['foto_file_5']['name'], PATHINFO_EXTENSION))){
			$file  = 'photo'.$date.'.'.pathinfo($_FILES['foto_file_5']['name'], PATHINFO_EXTENSION);
		}
		$data['photo'] = $file;

		unset($data['foto_file_5']);

		$data_insert = $this->db->insert('unmer_calon_mahasiswa.personal_data_details', $data);

		if ($data_insert){
			$feedback_msg['auth_message'] = 'success';
		} else {
			$feedback_msg['auth_message'] = 'fail';
		}
		echo json_encode($feedback_msg);
	}

	public function update_profile(){
		$data = $this->input->post();
		$date = date('Y');
		$id = $data['id'];
		if(move_uploaded_file(
			$_FILES['foto_file']['tmp_name'],
			'./prabotan/image/photo/'.'photo'.$date.'.'.pathinfo($_FILES['foto_file']['name'], PATHINFO_EXTENSION)
			))
		{ 	
			$file = 'photo'.$date.'.'.pathinfo($_FILES['foto_file']['name'], PATHINFO_EXTENSION);  
			$data['img'] = $file;
		}
		unset($data['foto_file']);

		$this->db->where('id', $id);
		$update = $this->db->update('unmer_core.data_user', $data);

		if ($update) {
			$feedback_msg['msg'] = 'success';
		}else{
			$feedback_msg['msg'] = 'fail';
		}
		echo json_encode($feedback_msg);
	}
}

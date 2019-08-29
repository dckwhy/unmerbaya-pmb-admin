<?php if (!defined('BASEPATH'))
exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");

class Authenticate extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $admin_auth = $this->session->userdata('admin_auth');

    }

    public function index()
    {
        $this->load->view('login', NULL, FALSE);
    }
    public function change_password()
    {
        $admin_auth = $this->session->userdata('admin_auth');
        if(!$admin_auth){
            redirect(base_url('authenticate'));
        }else{
            $this->load->view('change_password', NULL, FALSE);
        }
    }

    public function antiInjection($str) {
        $r = stripslashes(strip_tags(htmlspecialchars($str, ENT_QUOTES)));
        return $r;
    }

    public function update_password(){
        $data = $this->input->post();
        $pass_lama = paramEncrypt($data['pass_lama']);
        $pass_baru = paramEncrypt($data['pass_baru']); 

        $id = $data['id'];
        unset($data['id']);

        $this->db->where('id', $id);
        $this->db->where('upass', $pass_lama);
        $get_data = $this->db->get('data_admin')->row();
        if (!empty($get_data)) {
            $this->db->where('id', $id);
            $data_update['upass'] = $pass_baru;
            $update = $this->db->update('data_admin', $data_update);
            if($update){
                $data_msg['msg'] = 'success';
            }else{
                $data_msg['msg'] = 'success';
            }
        }else{
            $data_msg['msg'] = 'salah'; 
        } 
        echo json_encode($data_msg);
    }

    public function login()
    {  
        $user = $this->antiInjection($this->input->post('login-email'));
        // $pass = paramEncrypt($this->input->post('login-password'));
        $pass = $this->input->post('login-password');
        $feedback_msg['auth'] = 'log';         

        $get = $this->db->query("SELECT * FROM data_admin WHERE email = '$user' AND upass = '$pass'");
        $hasil = $get->row();

        if ($hasil) {
            unset($hasil->upass);
            $this->session->set_userdata('admin_auth', $hasil);
            $feedback_msg['auth_message'] = 'success';
        } else {            
            $feedback_msg['auth_message'] = 'fail';         
        }
        echo json_encode($feedback_msg);
    } 
    public function edit_data()
    {
        $param = $this->input->post();
        $exist = $this->Mdl_login->login(array('login_password' => $param['upass'],
            'login_email' => $param['uname']));
        $user = @$this->session->userdata('astrosession_kasir');
        if (!is_null($exist)) {
            $where = array('id' => $user[0]->id);

            $save = $this->Mdl_login->replace('karyawan', $param, $where);
            if ($save) {
                $redirect = 'dashboard';
            }
        } else {
            $redirect = $this->cname . '/edit_password';
        }
        redirect($redirect);
    }

    public function logout()
    {
        $admin_auth = $this->session->unset_userdata('admin_auth'); 
        $this->session->sess_destroy();
        redirect(base_url('authenticate'));
    }

    public function decode($value = '')
    {
        echo paramDecrypt($value);
    }
}
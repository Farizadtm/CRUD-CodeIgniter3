<?php

class Auth extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_auth');
        // udah_login();
    }

    function index()
    {
        $this->load->view('v_auth');
    }

    function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
        );
        $cek = $this->m_auth->cek_login("users", $where)->num_rows();
        $row = $this->m_auth->cek_login("users", $where)->row();
        if ($cek > 0) {

            $data_session = array(
                'username' => $username,
                'nama' => $row->nama,
                'user_id' => $row->user_id,
                'role_id' => $row->role_id,
            );

            $this->session->set_userdata($data_session);

            redirect(base_url('admin'));
        } else {
            echo "Username dan password salah !";
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('auth'));
    }
}

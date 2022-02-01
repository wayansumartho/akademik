<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['titel'] = 'Login Page';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }

    public function registration()
    {
        $data['titel'] = 'Create Account Page';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/registration');
        $this->load->view('templates/auth_footer');
    }

    public function complate()
    {
        $data =
            [
                'userName' => htmlspecialchars($this->input->post('username', true)),
                'password' => $this->input->post('password', true)
            ];
        $this->db->insert('tbl_admin', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Congralulation! Your account has been created. Please Login</div>');
        redirect('auth');
    }
    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $cek = $this->M_login->cek_admin($username, $password)->num_rows();
        if ($cek > 0) {
            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect('akademik');
        } else {
            echo '<script>alert("Username atau Password Salah!."); document.location="../";</script>';
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('auth');
    }
}

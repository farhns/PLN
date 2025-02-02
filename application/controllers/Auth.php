<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->library('session');
    }

    public function login() {
        $this->load->view('auth/login');
    }

    public function process_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->UserModel->getUserByUsername($username);

        if ($user && password_verify($password, $user->password)) {
            $this->session->set_userdata('user_id', $user->id);
            $this->session->set_userdata('username', $user->username);
            $this->session->set_userdata('hak_akses', $user->hak_akses);
            redirect('Dashboard');
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah!');
            redirect('Auth/login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('Auth/login');
    }
}

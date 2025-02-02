<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
    }

    public function index() {
        $data['users'] = $this->UserModel->getAllUsers();
        $this->load->view('users/index', $data);
    }

    public function create() {
        $this->load->view('users/create');
    }

    public function store() {
        $username = $this->input->post('username');
        
        // Cek apakah username sudah ada
        if ($this->UserModel->isUsernameExists($username)) {
            $this->session->set_flashdata('error', 'Username sudah digunakan, coba yang lain.');
            redirect('User/create');
            return;
        }

        $data = [
            'username' => $username,
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'hak_akses' => $this->input->post('hak_akses')
        ];

        if ($this->UserModel->insertUser($data)) {
            $this->session->set_flashdata('success', 'User berhasil ditambahkan!');
        } else {
            $this->session->set_flashdata('error', 'Gagal menambahkan user.');
        }
        redirect('User/create');
    }


    public function edit($id) {
        $data['user'] = $this->UserModel->getUserById($id);
        $this->load->view('users/edit', $data);
    }

    public function update($id) {
        $this->load->model('UserModel');
    
        $data = [
            'username' => $this->input->post('username'),
            'hak_akses' => $this->input->post('hak_akses'),
        ];
    
        // Cek apakah password diisi
        if (!empty($this->input->post('password'))) {
            $data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        }
    
        $this->UserModel->updateUser($id, $data);
    
        $this->session->set_flashdata('success', 'User berhasil diperbarui!');
        redirect('User');
    }
    

    public function delete($id) {
        $this->UserModel->deleteUser($id);
        redirect('User');
    }
}

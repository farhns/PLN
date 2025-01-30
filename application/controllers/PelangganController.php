<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PelangganController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('PelangganModel');
    }

    public function index() {
        $data['pelanggan'] = $this->PelangganModel->getAllPelanggan();
        $this->load->view('pelanggan/index', $data);
    }

    public function create() {
        $this->load->view('pelanggan/create');
    }

    public function store() {
        $data = [
            'tbTarifListrik_id' => $this->input->post('tbTarifListrik_id'),
            'pelanggan_id' => $this->input->post('pelanggan_id'),
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'alamat' => $this->input->post('alamat')
        ];

        if ($this->PelangganModel->insertPelanggan($data)) {
            $this->session->set_flashdata('success', 'Pelanggan berhasil ditambahkan!');
        } else {
            $this->session->set_flashdata('error', 'Gagal menambahkan pelanggan.');
        }

        redirect('PelangganController/create');
    }

    public function edit($id) {
        $data['pelanggan'] = $this->PelangganModel->getPelangganById($id);
        $this->load->view('pelanggan/edit', $data);
    }

    public function update($id) {
        $data = [
            'tbTarifListrik_id' => $this->input->post('tbTarifListrik_id'),
            'pelanggan_id' => $this->input->post('pelanggan_id'),
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'alamat' => $this->input->post('alamat')
        ];

        if ($this->PelangganModel->updatePelanggan($id, $data)) {
            $this->session->set_flashdata('success', 'Pelanggan berhasil diperbarui!');
        } else {
            $this->session->set_flashdata('error', 'Gagal memperbarui pelanggan.');
        }

        redirect('PelangganController');
    }

    public function delete($id) {
        if ($this->PelangganModel->deletePelanggan($id)) {
            $this->session->set_flashdata('success', 'Pelanggan berhasil dihapus!');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus pelanggan.');
        }

        redirect('PelangganController');
    }
}

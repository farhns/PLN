<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TarifListrik extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('TarifListrikModel');
    }

    public function index() {
        $data['tarif'] = $this->TarifListrikModel->getAllTarif();
        $this->load->view('tarif/index', $data);
    }

    public function create() {
        $this->load->view('tarif/create');
    }

    public function store() {
        $data = [
            'tbUser_id' => $this->input->post('tbUser_id'),
            'kdtarif' => $this->input->post('kdtarif'),
            'beban' => $this->input->post('beban'),
            'tarif_perkwh' => $this->input->post('tarif_perkwh')
        ];

        if ($this->TarifListrikModel->insertTarif($data)) {
            $this->session->set_flashdata('success', 'Tarif listrik berhasil ditambahkan!');
        } else {
            $this->session->set_flashdata('error', 'Gagal menambahkan tarif listrik.');
        }

        redirect('TarifListrik/create');
    }

    public function edit($id) {
        $data['tarif'] = $this->TarifListrikModel->getTarifById($id);
        $this->load->view('tarif/edit', $data);
    }

    public function update($id) {
        $data = [
            'tbUser_id' => $this->input->post('tbUser_id'),
            'kdtarif' => $this->input->post('kdtarif'),
            'beban' => $this->input->post('beban'),
            'tarif_perkwh' => $this->input->post('tarif_perkwh')
        ];

        if ($this->TarifListrikModel->updateTarif($id, $data)) {
            $this->session->set_flashdata('success', 'Tarif listrik berhasil diperbarui!');
        } else {
            $this->session->set_flashdata('error', 'Gagal memperbarui tarif listrik.');
        }

        redirect('TarifListrik');
    }

    public function delete($id) {
        if ($this->TarifListrikModel->deleteTarif($id)) {
            $this->session->set_flashdata('success', 'Tarif listrik berhasil dihapus!');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus tarif listrik.');
        }

        redirect('TarifListrik');
    }
}

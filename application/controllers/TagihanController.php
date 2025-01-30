<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TagihanController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('TagihanModel');
    }

    public function index() {
        $data['tagihan'] = $this->TagihanModel->getAllTagihan();
        $this->load->view('tagihan/index', $data);
    }

    public function create() {
        $this->load->view('tagihan/create');
    }

    public function store() {
        $data = [
            'tbPelanggan_id' => $this->input->post('tbPelanggan_id'),
            'tahun_tagihan' => $this->input->post('tahun_tagihan'),
            'bulan_tagihan' => $this->input->post('bulan_tagihan'),
            'pemakaian' => $this->input->post('pemakaian')
        ];

        if ($this->TagihanModel->insertTagihan($data)) {
            $this->session->set_flashdata('success', 'Tagihan berhasil ditambahkan!');
        } else {
            $this->session->set_flashdata('error', 'Gagal menambahkan tagihan.');
        }

        redirect('TagihanController/create');
    }

    public function edit($id) {
        $data['tagihan'] = $this->TagihanModel->getTagihanById($id);
        $this->load->view('tagihan/edit', $data);
    }

    public function update($id) {
        $data = [
            'tbPelanggan_id' => $this->input->post('tbPelanggan_id'),
            'tahun_tagihan' => $this->input->post('tahun_tagihan'),
            'bulan_tagihan' => $this->input->post('bulan_tagihan'),
            'pemakaian' => $this->input->post('pemakaian')
        ];

        if ($this->TagihanModel->updateTagihan($id, $data)) {
            $this->session->set_flashdata('success', 'Tagihan berhasil diperbarui!');
        } else {
            $this->session->set_flashdata('error', 'Gagal memperbarui tagihan.');
        }

        redirect('TagihanController');
    }

    public function delete($id) {
        if ($this->TagihanModel->deleteTagihan($id)) {
            $this->session->set_flashdata('success', 'Tagihan berhasil dihapus!');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus tagihan.');
        }

        redirect('TagihanController');
    }
}

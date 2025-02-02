<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('TagihanModel');
    }

    public function index() {
        $data['tagihan'] = $this->TagihanModel->getAllTagihan();
        $this->load->view('pembayaran/index', $data);
    }

    public function bayar($id) {
        $tagihan = $this->TagihanModel->getTagihanById($id);
        
        if (!$tagihan) {
            show_404();
        }

        $data = ['status' => 'Lunas'];
        $this->TagihanModel->updateTagihan($id, $data);

        $this->session->set_flashdata('success', 'Pembayaran berhasil!');
        redirect('Pembayaran');
    }
}

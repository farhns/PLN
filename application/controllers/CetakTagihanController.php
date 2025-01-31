<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CetakTagihanController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('TagihanModel');
        $this->load->library('pdf'); // Library untuk cetak PDF
    }

    public function index() {
        $data['tagihan'] = $this->TagihanModel->getAllTagihan();
        $this->load->view('cetak_tagihan/index', $data);
    }

    public function cetak($id) {
        $data['tagihan'] = $this->TagihanModel->getTagihanById($id);

        if (!$data['tagihan']) {
            show_404();
        }

        $this->load->view('cetak_tagihan/slip_tagihan', $data);
    }

    public function cetak_pdf($id) {
        $data['tagihan'] = $this->TagihanModel->getTagihanById($id);

        if (!$data['tagihan']) {
            show_404();
        }

        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->load_view('cetak_tagihan/slip_tagihan_pdf', $data);
    }
}

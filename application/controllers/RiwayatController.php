<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RiwayatController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('TagihanModel');
    }

    public function index() {
        $data['riwayat'] = $this->TagihanModel->getRiwayatPembayaran();
        $this->load->view('riwayat/index', $data);
    }
}

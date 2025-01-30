<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Employee_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['employees'] = $this->Employee_model->get_all_employees();
        $this->load->view('employee/list');
    }

    public function create() {
        $this->form_validation->set_rules('nip', 'NIP', 'required|is_unique[employees.nip]');
        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('tahun_masuk', 'Entry Year', 'required|numeric');
        $this->form_validation->set_rules('gaji_pokok', 'Basic Salary', 'required|numeric');
        $this->form_validation->set_rules('jabatan', 'Position', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('employee/create');
        } else {
            $employee_data = $this->input->post();
            $gaji_akhir = $this->Employee_model->calculate_salary($employee_data);
            $employee_data['gaji_akhir'] = $gaji_akhir;

            $this->Employee_model->insert_employee($employee_data);
            redirect('employee');
        }
    }

    public function print_slip($nip) {
        // Implementation for salary slip printing
    }
}
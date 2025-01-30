<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {
    public function insert_employee($data) {
        return $this->db->insert('employees', $data);
    }

    public function calculate_salary($employee) {
        $gaji_akhir = $employee['gaji_pokok'];

        switch($employee['jabatan']) {
            case 'satpam':
                $gaji_akhir += $employee['jam_lembur'] * 20000;
                break;
            case 'sales':
                $gaji_akhir += $employee['jumlah_pelanggan'] * 50000;
                break;
            case 'administrasi':
                $tahun_kerja = date('Y') - $employee['tahun_masuk'];
                if ($tahun_kerja >= 5) {
                    $gaji_akhir += $employee['gaji_pokok'] * 0.03;
                } elseif ($tahun_kerja >= 3) {
                    $gaji_akhir += $employee['gaji_pokok'] * 0.01;
                }
                break;
            case 'manajer':
                if ($employee['presentase_penjualan'] > 10) {
                    $gaji_akhir += $employee['gaji_pokok'] * 0.10;
                } elseif ($employee['presentase_penjualan'] >= 6) {
                    $gaji_akhir += $employee['gaji_pokok'] * 0.05;
                } elseif ($employee['presentase_penjualan'] >= 1) {
                    $gaji_akhir += $employee['gaji_pokok'] * 0.02;
                }
                break;
        }

        return $gaji_akhir;
    }

    public function get_all_employees() {
        return $this->db->get('employees')->result_array();
    }
}
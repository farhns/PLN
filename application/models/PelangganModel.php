<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PelangganModel extends CI_Model {
    private $table = 'tbPelanggan';

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Tambahkan ini untuk memastikan koneksi database
    }
    
    public function getAllPelanggan() {
        return $this->db->get($this->table)->result();
    }

    public function getPelangganById($id) {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function insertPelanggan($data) {
        return $this->db->insert($this->table, $data);
    }

    public function updatePelanggan($id, $data) {
        return $this->db->where('id', $id)->update($this->table, $data);
    }

    public function deletePelanggan($id) {
        return $this->db->where('id', $id)->delete($this->table);
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TarifListrikModel extends CI_Model {
    private $table = 'tbTarifListrik';

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Tambahkan ini untuk memastikan koneksi database
    }
    
    public function getAllTarif() {
        return $this->db->get($this->table)->result();
    }

    public function getTarifById($id) {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function insertTarif($data) {
        return $this->db->insert($this->table, $data);
    }

    public function updateTarif($id, $data) {
        return $this->db->where('id', $id)->update($this->table, $data);
    }

    public function deleteTarif($id) {
        return $this->db->where('id', $id)->delete($this->table);
    }
}

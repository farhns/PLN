<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TagihanModel extends CI_Model {
    private $table = 'tbTagihan';

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Tambahkan ini untuk memastikan koneksi database
    }
    
    public function getAllTagihan() {
        return $this->db->get($this->table)->result();
    }

    public function getTagihanById($id) {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function insertTagihan($data) {
        return $this->db->insert($this->table, $data);
    }

    public function updateTagihan($id, $data) {
        return $this->db->where('id', $id)->update($this->table, $data);
    }

    public function deleteTagihan($id) {
        return $this->db->where('id', $id)->delete($this->table);
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
    private $table = 'tbUser';

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Tambahkan ini untuk memastikan koneksi database
    }

    public function getUserByUsername($username) {
        return $this->db->get_where($this->table, ['username' => $username])->row();
    }
    
    public function getAllUsers() {
        return $this->db->get($this->table)->result();
    }

    public function getUserById($id) {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function insertUser($data) {
        // return $this->db->insert($this->table, $data);
        return $this->db->insert('tbUser', $data); // Pastikan nama tabel benar
    }


    public function updateUser($id, $data) {
        return $this->db->where('id', $id)->update($this->table, $data);
    }

    public function deleteUser($id) {
        return $this->db->where('id', $id)->delete($this->table);
    }
    
    public function isUsernameExists($username) {
        $query = $this->db->get_where('tbUser', ['username' => $username]);
        return $query->num_rows() > 0; // Jika ada username yang sama, return true
    }

}

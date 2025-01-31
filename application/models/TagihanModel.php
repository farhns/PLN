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
        // return $this->db->where('id', $id)->update($this->table, $data);
        return $this->db->where('id', $id)->update('tbTagihan', $data);
    }

    public function deleteTagihan($id) {
        return $this->db->where('id', $id)->delete($this->table);
    }

    // public function getRiwayatPembayaran() {
    //     return $this->db->get_where('tbTagihan', ['status' => 'Lunas'])->result();
    // }
    public function getRiwayatPembayaran() {
        $this->db->select('tbTagihan.*, tbPelanggan.nama_pelanggan'); // Ambil semua data dari tbTagihan + nama_pelanggan
        $this->db->from('tbTagihan');
        $this->db->join('tbPelanggan', 'tbPelanggan.id = tbTagihan.tbPelanggan_id', 'left'); // Join dengan tbPelanggan
        $this->db->where('tbTagihan.status', 'Lunas');
        return $this->db->get()->result();
    }
}

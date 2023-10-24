<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model {

    public function lists() 
    {

    $this->db->select('*');
        $this->db->from('tbl_transaksi');    
		$this->db->order_by('id_transaksi', 'DESC');
        return $this->db->get()->result();
    }

    public function get_joined_data() {
        $this->db->select('*');
        $this->db->from('tbl_transaksi'); // Nama tabel pertama
        $this->db->join('tbl_donatur', 'tbl_donatur.id_donatur= tbl_transaksi.id_donatur'); // Join ke tabel kedua
        // $this->db->join('products', 'products.product_id = orders.product_id'); // Join ke tabel ketiga
        $query = $this->db->get();
        
        return $query->result();
    }
    
    public function detail($id_transaksi) 
    {
        $this->db->select('*');
        $this->db->from('tbl_transaksi');                      
        $this->db->where('id_transaksi', $id_transaksi);
        return $this->db->get()->row();
    }

    public function add($data) 
    {
        $this->db->insert('tbl_transaksi', $data);
    }

    public function edit($data) 
    {
        $this->db->where('id_transaksi', $data['id_transaksi']);
        $this->db->update('tbl_transaksi', $data);
        
    }

    public function delete($data) 
    {
        $this->db->where('id_transaksi', $data['id_transaksi']);
        $this->db->delete('tbl_transaksi', $data);
        
    }


}

/* End of file M_transaksi.php */
    
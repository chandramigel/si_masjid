<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

    public function pengumuman()
    {
        $this->db->select('*');
        $this->db->from('tbl_pengumuman');            
        $this->db->order_by('id_pengumuman', 'desc');
        return $this->db->get()->result();
    }

    public function transaksi()
    {
        $this->db->select('*');
        $this->db->from('tbl_transaksi');            
        $this->db->order_by('id_transaksi', 'desc');
        return $this->db->get()->result();
    }

    public function jenis_transaksi()
    {
        $this->db->select('*');
        $this->db->from('tbl_jenis_transaksi');            
        $this->db->order_by('id_jenis', 'desc');
        return $this->db->get()->result();
    }


    public function kajian()
    {
        $this->db->select('*');
        $this->db->from('tbl_kajian');            
        $this->db->order_by('id_kajian', 'desc');
        return $this->db->get()->result();
    }
    
    public function sapra()
    {
        $this->db->select('*');
        $this->db->from('tbl_sapra');            
        $this->db->order_by('id_sapra', 'desc');
        return $this->db->get()->result();
    }
    
    //memunculkan berita deg pging
    public function berita($limit,$start)
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');  
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');       
        $this->db->order_by('id_berita', 'desc');
        $this->db->limit($limit,$start);
        return $this->db->get()->result();
    }

    public function total_berita()
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');  
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');       
        $this->db->order_by('id_berita', 'desc');
        return $this->db->get()->result();
    }

    public function detail_berita($slug_berita)
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');  
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
        $this->db->where('slug_berita', $slug_berita);
        return $this->db->get()->row();
    }

    public function latest_berita()
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');  
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');       
        $this->db->order_by('id_berita', 'desc');
        $this->db->limit(3);
        return $this->db->get()->result();
    }
    public function slider_berita()
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');  
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');       
        $this->db->order_by('id_berita', 'desc');
        $this->db->limit(2);
        return $this->db->get()->result();
    }
        
}

/* End of file M_Home.php */

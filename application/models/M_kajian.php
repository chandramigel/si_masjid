<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_kajian extends CI_Model {

    public function lists() 
    {

    $this->db->select('*');
        $this->db->from('tbl_kajian');    
		$this->db->order_by('id_kajian', 'DESC');
        return $this->db->get()->result();
    }

    public function detail($id_kajian) 
    {
        $this->db->select('*');
        $this->db->from('tbl_kajian');                      
        $this->db->where('id_kajian', $id_kajian);
        return $this->db->get()->row();
    }

    public function add($data) 
    {
        $this->db->insert('tbl_kajian', $data);
    }

    public function edit($data) 
    {
        $this->db->where('id_kajian', $data['id_kajian']);
        $this->db->update('tbl_kajian', $data);
        
    }

    public function delete($data) 
    {
        $this->db->where('id_kajian', $data['id_kajian']);
        $this->db->delete('tbl_kajian', $data);
        
    }


}

/* End of file M_kajian.php */

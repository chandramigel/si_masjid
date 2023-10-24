<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_sapra extends CI_Model {
	
    
    public function lists()
	{
		$this->db->select('*');
        $this->db->from('tbl_sapra');    
		$this->db->order_by('id_sapra', 'DESC');
        return $this->db->get()->result();
    }  
    
    public function detail($id_sapra )
	{
		$this->db->select('*');
		$this->db->from('tbl_sapra ');
		$this->db->where('id_sapra ', $id_sapra );
		return $this->db->get()->row();
    }
    
    public function add($data)
	{
		$this->db->insert('tbl_sapra', $data);
	}

		public function edit($data)
	{
		$this->db->where('id_sapra', $data['id_sapra']);
		$this->db->update('tbl_sapra', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_sapra', $data['id_sapra']);
		$this->db->delete('tbl_sapra', $data);
	}



} 
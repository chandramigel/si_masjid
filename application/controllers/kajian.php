<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kajian extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kajian');
    }

    public function index()
        {
            $data = array(
                'title' => 'Data kajian', 
                'kajian' => $this->m_kajian->lists(),
                'isi'  => 'admin/kajian/v_list'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }


        public function add()          
        {
            $this->form_validation->set_rules('nm_kajian', 'Nama Kajian ', 'required');   
            $this->form_validation->set_rules('hari', 'Hari', 'required');        
            $this->form_validation->set_rules('nm_ustad', 'Nama Ustad', 'required');        
            $this->form_validation->set_rules('pembahasan', 'Pembahasan', 'required');    
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Tambah Data kajian', 
                    'isi'  => 'admin/kajian/v_add'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                    }
                    else
                    {
                            $data = array(
                                'nm_kajian'     => $this->input->post('nm_kajian'),
                                'hari'          => $this->input->post('hari'),
                                'nm_ustad'      => $this->input->post('nm_ustad'),
                                'pembahasan'    => $this->input->post('pembahasan')
                                );
                        $this->m_kajian->add($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
                        redirect('kajian');
                    }
                }

        public function edit($id_kajian)
        {
            $this->form_validation->set_rules('nm_kajian', 'Nama Kajian ', 'required');   
            $this->form_validation->set_rules('hari', ' Hari', 'required');        
            $this->form_validation->set_rules('nm_ustad', 'NamaUstad', 'required');        
            $this->form_validation->set_rules('pembahasan', 'Pembahasan', 'required');    
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Tambah Data kajian', 
                    'kajian' => $this->m_kajian->detail($id_kajian),
                    'isi'  => 'admin/kajian/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                    }
                    else
                    {
                            $data = array(
                                'id_kajian' 	=> $id_kajian,
                                'nm_kajian'  => $this->input->post('nm_kajian'),
                                'hari'    => $this->input->post('hari'),
                                'nm_ustad'    => $this->input->post('nm_ustad'),
                                'pembahasan'    => $this->input->post('pembahasan')
                                );
                        $this->m_kajian->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                        redirect('kajian');
                    }
                }

        public function delete($id_kajian)
        {
            $data = array(
                'id_kajian' => $id_kajian,
            );
            $this->m_kajian->delete($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!!');        
            redirect('kajian');
        }
}

/* End of file Siswa.php */
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sapra extends CI_Controller {


public function __construct()
    {
        parent::__construct();
        $this->load->model('m_sapra');

    }

	  public function index()
        {
            $data = array(
                'title' => 'Sarana & Prasarana', 
                'sapra' => $this->m_sapra->lists(),
                'isi'  => 'admin/sapra/v_list'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }

         public function add()
        {         
            
        $this->form_validation->set_rules('nama_sapra','Nama Sarana & Prasarana', 'required');

            
            if ($this->form_validation->run() == TRUE) {
               $config['upload_path'] = './sampul/';
               $config['allowed_types']        = 'gif|jpg|png|jpeg';
               $config['max_size']             = 2000;
               $this->upload->initialize($config);
                    if (!$this->upload->do_upload('sampul'))
                    {
                           
                            $data = array(                
                                'title' => 'Input Data Sarana & Prasarana',
								'error_upload' => $this->upload->display_errors(),
								'isi'=> 'admin/sapra/v_add'  
                            );
                            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                    }
                    else
                    {
                            $upload_data = array('uploads' => $this->upload->data());
                            $config = array('uploads' => $this->upload->data());
                            $config ['image_library'] = 'gd2';
                            $config ['source_image'] = './sampul/'.$upload_data['uploads']['file_name'];
                            $this->load->library('image_lib', $config);

                            $data = array(
                                'nama_sapra' 		=> $this->input->post('nama_sapra'),							
								'sampul' 	=> $upload_data['uploads']['file_name'],
                                );
                        $this->m_sapra->add($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
                        redirect('sapra');
                    }
            } 
            
            $data = array(
                'title' => 'Tambah Data Sarana & Prasarana', 
                'mapel' => $this->m_sapra->lists(),
                'isi'  => 'admin/sapra/v_add'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }
        

 		 public function edit($id_sapra)
        {
            $this->form_validation->set_rules('nama_sapra','Nama Sarana & Prasarana', 'required');

            
            if ($this->form_validation->run() == TRUE) {
               $config['upload_path'] = './sampul/';
               $config['allowed_types']        = 'gif|jpg|png|jpeg';
               $config['max_size']             = 2000;
               $this->upload->initialize($config);
                    if (!$this->upload->do_upload('sampul'))
                    {
                           
                            $data = array(                
                                'title' => ' Edit Data Sarana & Prasarana', 
                                'sapra' => $this->m_sapra->detail($id_sapra),
                                'isi'  => 'admin/sapra/v_edit'
                            );
                            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                    }
                    else
                    {
                            $upload_data = array('uploads' => $this->upload->data());
                            $config = array('uploads' => $this->upload->data());
                            $config ['image_library'] = 'gd2';
                            $config ['source_image'] = './sampul/'.$upload_data['uploads']['file_name'];
                            $this->load->library('image_lib', $config);
                            //menghapus file photo lama
                            $sapra=$this->m_sapra->detail($id_sapra);
                            if ($sapra->sampul !="") {
                                unlink('./sampul/'.$sapra->sampul);
                            }
                            //end menghapus photo lama
                            $data = array(
                                'id_sapra'       =>$id_sapra,
                                'nama_sapra' 	=> $this->input->post('nama_sapra'),
                                'sampul' 	=> $upload_data['uploads']['file_name'],
                                );
                        $this->m_sapra->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                        redirect('sapra');
                    }

                    $upload_data = array('uploads' => $this->upload->data());
                    $config = array('uploads' => $this->upload->data());
                    $config ['image_library'] = 'gd2';
                    $config ['source_image'] = './sampul/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array(
                        		'id_sapra'       =>$id_sapra,
                                'nama_sapra' 	=> $this->input->post('nama_sapra'),
                        );
                        $this->m_sapra->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                        redirect('sapra');
            } 

            $data = array(
                'title' => 'Edit Data Sarana & Prasarana',                
                'sapra' => $this->m_sapra->detail($id_sapra),
                'isi'  => 'admin/sapra/v_edit'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
        }


        public function delete($id_sapra)
        {

             //menghapus file photo lama
             $sapra=$this->m_sapra->detail($id_sapra);
             if ($sapra->sampul !="") {
                 unlink('./sampul/'.$sapra->sampul);
             }
             //end menghapus photo lama
            $data = array(
                'id_sapra' => $id_sapra,
            );
            $this->m_sapra->delete($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!!');        
            redirect('sapra');
        }

        public function add_foto($id_sapra)
        {         
             $this->form_validation->set_rules('ket_foto','Keterangan Foto', 'required');

            
            if ($this->form_validation->run() == TRUE) {
               $config['upload_path'] = './foto/';
               $config['allowed_types']        = 'gif|jpg|png|jpeg';
               $config['max_size']             = 2000;
               $this->upload->initialize($config);
                    if (!$this->upload->do_upload('foto'))
                    {
                           $sapra = $this->m_sapra->detail($id_sapra);
                            $data = array(                
                				'title' => 'Tambah Data Foto Sarana & Prasarana : '.$sapra->nama_sapra,   
                                'sapra' => $sapra ,
                                'isi'  => 'admin/sapra/v_add_foto'
                            );
                            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                    }
                    else
                    {
                            $upload_data = array('uploads' => $this->upload->data());
                            $config = array('uploads' => $this->upload->data());
                            $config ['image_library'] = 'gd2';
                            $config ['source_image'] = './foto/'.$upload_data['uploads']['file_name'];
                            $this->load->library('image_lib', $config);
                          
                            $data = array(
                                'id_sapra'       =>$id_sapra,
                                'ket_foto' 	=> $this->input->post('ket_foto'),
                                'foto' 	=> $upload_data['uploads']['file_name'],
                                );
                        $this->m_sapra->add_foto($data);
                        $this->session->set_flashdata('pesan', 'Data Foto Berhasil Ditambakan');
                        redirect('sapra/add_foto/'.$id_sapra);
                    }                 
            } 
            $sapra = $this->m_sapra->detail($id_sapra);
            $data = array(
                'title' => 'Tambah Data Sarana & Prasarana : '.$sapra->nama_sapra,                
                'sapra' => $sapra, 
                'isi'  => 'admin/sapra/v_add_foto'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }
}

/* End of file Sapra.php */

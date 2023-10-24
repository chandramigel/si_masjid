<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_transaksi');
        $this->load->model('m_home'); //
    }

    public function join_example() {
        $data['joined_data'] = $this->your_model->get_joined_data(); // Panggil method pada model
        $this->load->view('v_lihat_transaksi', $data);
    }


    public function index()
        {
            $data = array(
                'title' => 'Data Keuangan', 
                'transaksi' => $this->m_transaksi->lists(),
                'isi'  => 'admin/keuangan/v_list'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }


        public function add()          
        {
            $this->form_validation->set_rules('nama', 'Nama Donatur ', 'required');   
            $this->form_validation->set_rules('id_jenis', 'Jenis Donatur', 'required');        
            $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');        
            $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');    
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Tambah Data Keuangan', 
                    'isi'  => 'admin/keuangan/v_add',
                    'jenis_transaksi' => $this->m_home->jenis_transaksi(), //
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                    }
                    else
                    {
                            $data = array(
                                'nama'          => $this->input->post('nama'),
                                'id_jenis'      => $this->input->post('id_jenis'),
                                'tanggal'       => date('Y,m.d'),
                                'keterangan'    => $this->input->post('keterangan')
                                );
                        $this->m_transaksi->add($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
                        redirect('transaksi');
                    }
                }

        public function edit($id_transaksi)
        {
            $this->form_validation->set_rules('nm_kajian', 'Nama Kajian ', 'required');   
            $this->form_validation->set_rules('hari', ' Hari', 'required');        
            $this->form_validation->set_rules('nm_ustad', 'NamaUstad', 'required');        
            $this->form_validation->set_rules('pembahasan', 'Pembahasan', 'required');    
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Tambah Data Keuangan', 
                    'prestasi' => $this->m_transaksi->detail($id_transaksi),
                    'isi'  => 'admin/Keuangan/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                    }
                    else
                    {
                        $data = array(
                            'nama'          => $this->input->post('nama'),
                            'id_jenis'      => $this->input->post('id_jenis'),
                            'tanggal'       => $this->input->post('tanggal'),
                            'keterangan'    => $this->input->post('keterangan')
                            );
                        $this->m_transaksi->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                        redirect('transaksi');
                    }
                }

        public function delete($id_transaksi)
        {
            $data = array(
                'id_transaksi' => $id_transaksi,
            );
            $this->m_transaksi->delete($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!!');        
            redirect('transaksi');
        }
}

/* End of file Transaksi.php */
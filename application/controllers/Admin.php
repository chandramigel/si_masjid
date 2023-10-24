<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('m_home');
		$this->load->model('m_pengumuman');
		$this->load->model('m_transaksi');

	}
    

    public function index()
    {
        $data = array(
            'title' => 'Selamat Datang Admin', 
            'isi'  => 'admin/v_home',
            'jenis_transaksi' => $this->m_home->jenis_transaksi(),
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

        public function tanggal()
        {
            $this->load->view('tanggal_form');
        }
    
        public function proses_tanggal()
        {
            $tanggal = $this->input->post('tanggal');
            echo 'Tanggal yang Anda pilih adalah: ' . $tanggal;
        }

}

/* End of file admin.php */

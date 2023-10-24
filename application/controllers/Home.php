<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
            'title' => 'Web Informasi Masjid',         
             'pengumuman' => $this->m_pengumuman->lists(),          
             'berita' => $this->m_home->slider_berita(),   
            'isi'  => 'v_home'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }


	public function pengumuman()
	{
		$data = array(
			'title' => 'Pengumuman',
			'pengumuman' => $this->m_home->pengumuman(),
			'isi'=> 'v_pengumuman' 
			);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	

	public function transaksi()
	{
		$data = array(
			'title' => 'transaksi',
			'transaksi' => $this->m_home->transaksi(),
			'joined_data' => $this->m_transaksi->get_joined_data(),
			'isi'=> 'v_lihat_transaksi' 
			);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function tambah_transaksi()
	{
		$data = array(
			'title' => 'tambah transaksi',
			'transaksi' => $this->m_home->transaksi(),
			'jenis_transaksi' => $this->m_home->jenis_transaksi(),
			'joined_data' => $this->m_transaksi->get_joined_data(),
			'isi'=> 'v_tambah_transaksi' 
			);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function kajian()
	{
		$data = array(
			'title' => 'kajian',
			'kajian' => $this->m_home->kajian(),
			'isi'=> 'v_kajian' 
			);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function struktur()
	{
		$data = array(
			'title' => 'Struktur Organisasi',
			'isi'=> 'v_struktur' 
			);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function visimisi()
	{
		$data = array(
			'title' => 'Visi Misi',
			'isi'=> 'v_visimisi' 
			);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	

	 public function sapra()
	{
		$data = array(
			'title' => 'Sarana & Prasarana',
			'sapra' => $this->m_home->sapra(),
			'isi'=> 'v_sapra' 
			);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}


	
	 public function contact()
	{
		$data = array(
			'title' => 'Contact',
			'isi'=> 'v_contact' 
			);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	//berita
	public function berita()
	{
		$this->load->library('pagination');
		$config['base_url'] = base_url('home/berita');
		$config['total_rows'] = count($this->m_home->total_berita());
		$config['per_page'] = 4;
		$config['url_segmen'] = 3;	
		
		/////
			$limit= $config['per_page'];
			$start= ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;
		//////
		
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Prev';
		$config['full_tag_open'] = '<div class="pagination__number blog__pagination"><ul class="pagination">"';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';			
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';		
		$config['full_tag_close'] = '</ul></div>';		
		/////............

		$this->pagination->initialize($config);

		$data = array(
			'paginasi' =>$this->pagination->create_links(),
			'latest_berita'=>$this->m_home->latest_berita(),
			'berita' =>$this->m_home->berita($limit,$start),
			'title' => 'Berita',
			'isi'=> 'v_berita' 
			);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}


	 public function detail_berita($slug_berita)
	{
		$data = array(
			'title' => 'Detail Berita',
			'latest_berita'=>$this->m_home->latest_berita(),
			'berita' => $this->m_home->detail_berita($slug_berita),
			'isi'=> 'v_berita_detail' 
			);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}
	//end berita
}

/* End of file Home.php */

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Allpenjualan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('m_db');		
		if(akses()!="bos")
		{
			$this->login_model->user_logout();
		}
		$this->load->model('produk_model','mod_produk');
	}
		
	
	function index()
	{		
		// $meta['judul']="Laporan Penjualan All Data";
		// $this->load->view('tema/header',$meta);
		// $this->load->view(akses().'/laporan/allpenjualanview');
        // $this->load->view('tema/footer');
        $status=$this->input->get('status')?$this->input->get('status'):"lunas";
		$s=array(
		'status'=>$status,
		);
		$meta['judul']="Data Penjualan";
		$this->load->view('tema/header',$meta);
		$d['data']=$this->m_db->get_data('penjualan',$s);
		$this->load->view(akses().'/laporan/allpenjualanview',$d);
		$this->load->view('tema/footer');
	}
	
}
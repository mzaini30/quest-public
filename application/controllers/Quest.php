<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quest extends CI_Controller {
	private $jumlah_koin;

	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Makassar');

		$status = 'selesai';
		$ambil_koin = $this->db->get_where('quest', compact('status'))->result();
		$koin = null;
		foreach ($ambil_koin as $y) {
			$koin += $y->koin;
		}
		$this->jumlah_koin = $koin;
	}

	public function index(){
		$status = 'belum selesai';
		$jumlah_koin = $this->jumlah_koin;
		$data = $this->db->order_by('id', 'DESC')->get_where('quest', compact('status'))->result();
		$this->twig->display('quest/beranda', compact('data', 'jumlah_koin'));
	}

	public function baru(){
		if (!$_POST) {
			$this->twig->display('quest/baru');
		} else {
			$data = (object) $this->input->post();
			$data->waktu_dibuat = date('Y-m-d H:i:s');
			$data->status = 'belum selesai';
			$this->db->insert('quest', $data);
			redirect(site_url());
		}
	}

	public function detail($id){
		$data = $this->db->get_where('quest', compact('id'))->result()[0];
		$this->twig->display('quest/detail', compact('data'));
	}

	public function hapus($id){
		$this->db->delete('quest', compact('id'));
		redirect(site_url());
	}

	public function selesai($id){
		$status = 'selesai';
		$waktu_selesai = date('Y-m-d H:i:s');
		$this->db->update('quest', compact('status', 'waktu_selesai'), compact('id'));
		redirect(site_url());
	}

	public function quest_selesai(){
		$status = 'selesai';
		$jumlah_koin = $this->jumlah_koin;
		$data = $this->db->order_by('waktu_selesai', 'DESC')->get_where('quest', compact('status'))->result();
		$this->twig->display('quest/selesai', compact('data', 'jumlah_koin'));
	}

	public function edit($id){
		if (!$_POST) {
			$judul = 'Edit Quest -';
			$data = $this->db->get_where('quest', compact('id'))->result()[0];
			$this->twig->display('quest/baru', compact('data', 'judul'));
		} else {
			$data = (object) $this->input->post();
			$this->db->update('quest', $data, compact('id'));
			redirect(site_url() . 'tantangan/' . $id);
		}
	}
}

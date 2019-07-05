<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koin extends CI_Controller {
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

		$koin_terpakai = $this->db->get_where('koin', ['status' => 'terpakai'])->result();
		$koin_pengurang = null;
		foreach ($koin_terpakai as $x) {
			$koin_pengurang += $x->koin;
		}

		$this->jumlah_koin = $koin - $koin_pengurang;
	}

	public function index(){
		$jumlah_koin = $this->jumlah_koin;
		$status = 'belum terpakai';
		$data = $this->db->order_by('koin', 'DESC')->get_where('koin', compact('status'))->result();
		$this->twig->display('koin/beranda', compact('data', 'jumlah_koin'));
	}

	public function detail($id){
		$data = $this->db->get_where('koin', compact('id'))->result()[0];
		$this->twig->display('koin/detail', compact('data'));
	}

	public function tambah(){
		if (!$_POST) {
			$this->twig->display('koin/tambah');
		} else {
			$data = (object) $this->input->post();
			$data->status = 'belum terpakai';
			$this->db->insert('koin', $data);
			redirect(site_url() . 'tukar-koin');
		}
	}

	public function edit(){
		$status = 'belum terpakai';
		$data = $this->db->order_by('judul')->get_where('koin', compact('status'))->result();
		$this->twig->display('koin/edit', compact('data'));
	}

	public function edit_satuan($id){
		if (!$_POST) {
			$data = $this->db->get_where('koin', compact('id'))->result()[0];
			$judul = 'Edit Hadiah -';
			$this->twig->display('koin/tambah', compact('data', 'judul'));
		} else {
			$data = (object) $this->input->post();
			$this->db->update('koin', $data, compact('id'));
			redirect(site_url() . 'edit-hadiah');
		}
	}

	public function hapus($id){
		$this->db->delete('koin', compact('id'));
		redirect(site_url() . 'edit-hadiah');
	}

	public function ambil($id){
		$status = 'terpakai';
		$this->db->update('koin', compact('status'), compact('id'));
		redirect(site_url() . 'tukar-koin');
	}

	public function terpakai(){
		$status = 'terpakai';
		$data = $this->db->order_by('koin', 'DESC')->get_where('koin', compact('status'))->result();
		$this->twig->display('koin/terpakai', compact('data'));
	}
}

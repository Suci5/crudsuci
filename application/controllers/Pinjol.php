<?php
defined('BASEPATH') or exit('no direct script access allowed');
class Pinjol extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pinjol_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Pinjol";
        $data['pinjol'] = $this->Pinjol_model->get();
        $this->load->view("layout/header");
        $this->load->view("pinjol/vw_pinjol", $data);
        $this->load->view("layout/footer");
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Pinjol";
        $data['prodi'] = $this->Pinjol_model->get();
        $this->load->view("layout/header");
        $this->load->view("pinjol/vw_tambah_pinjol", $data);
        $this->load->view("layout/footer");
    }
    public function detail($id)
    {
        $data['judul'] = "Halaman Detail Pinjol";
        $data['pinjol'] = $this->Pinjol_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("pinjol/vw_detail_pinjol", $data);
        $this->load->view("layout/footer");
    }
    public function hapus($id)
    {
        $this->Pinjol_model->delete($id);
        redirect('Pinjol');
    }
    public function upload()
    {
        $data = [
            // 'id' => $this->input->
            'nama' => $this->input->POST('nik'),
            'nim' => $this->input->POST('nama_lengkap'),
            'jenis_kelamin' => $this->input->POST('alamat'),
            'email' => $this->input->POST('no_hp'),
            'prodi' => $this->input->POST('email'),
            'asal_sekolah' => $this->input->POST('besar_peminjaman'),
            'no_hp' => $this->input->POST('durasi'),


        ];
        // $id = $this->input->POST('id')
        $this->Pinjol_model->insert($data);
        redirect('Pinjol');
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Update Pinjol";
        $data['pinjol'] = $this->Pinjol_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("pinjol/vw_ubah_pinjol", $data);
        $this->load->view("layout/footer");
    }
    public function update()
    {
        $data = [
            'nik' => $this->input->POST('nik'),
            'nama_lengkap' => $this->input->POST('nama_lengkap'),
            'alamat' => $this->input->POST('alamat'),
            'no_hp' => $this->input->POST('no_hp'),
            'email' => $this->input->POST('email'),
            'besar_peminjaman' => $this->input->POST('peminjaman'),
            'durasi' => $this->input->POST('durasi'),

        ];
        $id = $this->input->post('id');
        $this->Pinjol_model->update(['id' => $id], $data);
        redirect('Pinjol');
    }
}

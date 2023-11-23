<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Controller Auth
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Biodata extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Biodata_model');
    }
    function index()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Isi nama'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
            'required' => 'Pilih jenis kelamin'
        ]);
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', [
            'required' => 'Isi tanggal lahir'
        ]);
        $this->form_validation->set_rules('hobi', 'Hobi', 'required', [
            'required' => 'Isi hobi'
        ]);
        $this->form_validation->set_rules('foto', 'Foto', 'required', [
            'required' => 'Unggah foto'
        ]);


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/auth_header');
            $this->load->view('biodata/biodata');
            $this->load->view('layout/auth_footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'hobi' => $this->input->post('hobi'),
                'foto' => $this->input->post('foto')
            ];
            $upload_image = $_FILES['biodata']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/biodata/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('foto')) {
                    $old_image = $data['biodata']['foto'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/biodata/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('foto', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
        }
    }
}
    // function cek_biodata()
    // {
    // 	$data = [
    // 		'nama' => htmlspecialchars($this->input->POST('nama', true)),
    // 		'jenis_kelamin' => htmlspecialchars($this->input->POST('jenis_kelamin', true)),
    // 		'hobi' => htmlspecialchars($this->input->POST('hobi', true)),

    // 	];

    // 	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Biodata berhasil di isi :D</div>');
    // 	redirect('Biodata');
    // }

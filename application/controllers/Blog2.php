<?php
defined('BASEPATH') or exit('no direct script access allowed');
class Blog2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        // $data['judul'] = 'Judul Blog';
        // $data['isi'] = 'Isi Blog';
        // $this->load->view("blog_view", $data);
        $data['judul'] = 'Judul Blog';
        $data['isi'] = 'Isi Blog';
        $out = $this->load->view("blog_view", $data, true);
        echo $out;
    }
}
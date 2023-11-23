<?php
defined('BASEPATH') or exit('no direct script access allowed');
class hitungBaju extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('store');
    }
    function index()
    {
        $this->store->hitung('150000', '350000', '300000', '450000', '2000');
       
    }
}
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('M_Home');
  }

  function index(){
    $data['rec_kat']  = $this->M_Home->dt_home();
    $this->load->view('public/pv_profil', $data);
  }
  function kriteria(){
    $data['rec_kat']  = $this->M_Home->dt_home();
    $this->load->view('public/pv_kriteria', $data);
  }
  function kontak(){
    $data['rec_kat']  = $this->M_Home->dt_home();
    $this->load->view('public/pv_kontak', $data);
  }
}
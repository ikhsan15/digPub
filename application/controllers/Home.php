<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('M_Home');
  }

  function index(){
    $data['recordcs']       = $this->M_Home->dt_seg_terbit();
    $data['rec_new_prod']   = $this->M_Home->dt_new_prod();
    $data['recordterlaris'] = $this->M_Home->dt_terlaris();
    $data['rec_kat']        = $this->M_Home->dt_home();
    $this->load->view('public/pv_home', $data);
  }

  function kat_seg_terbit(){
    $data['rec_kat']  = $this->M_Home->dt_home();
    $data['rec_up']   = $this->M_Home->dt_seg_terbit_up();
    $data['rec_down'] = $this->M_Home->dt_seg_terbit_down();
    $this->load->view('public/katalog/pv_katalogs', $data);
  }
  function kat_new_prod(){
    $data['rec_kat']  = $this->M_Home->dt_home();
    // $data['record']   = $this->M_Home->dt_new_prod();
    $data['rec_up']   = $this->M_Home->dt_new_prod_up();
    $data['rec_down'] = $this->M_Home->dt_new_prod_down();
    $this->load->view('public/katalog/pv_katalogs', $data);
  }
  function kat_hamka(){
    $data['rec_kat']  = $this->M_Home->dt_home();
    $data['rec_up']   = $this->M_Home->dt_hamka_up();
    $data['rec_down'] = $this->M_Home->dt_hamka_down();
    $this->load->view('public/katalog/pv_katalogs', $data);
  }
  function kat_referensi(){
    $data['rec_kat']  = $this->M_Home->dt_home();
    // $data['record']   = $this->M_Home->dt_referensi();
    $data['rec_up']   = $this->M_Home->dt_referensi_up();
    $data['rec_down'] = $this->M_Home->dt_referensi_down();
    $this->load->view('public/katalog/pv_katalogs', $data);
  }
  function kat_fiqih(){
    $data['rec_kat']  = $this->M_Home->dt_home();
    $data['rec_up']   = $this->M_Home->dt_fiqih_up();
    $data['rec_down'] = $this->M_Home->dt_fiqih_down();
    $this->load->view('public/katalog/pv_katalogs', $data);
  }
  function kat_umum(){
    $data['rec_kat']  = $this->M_Home->dt_home();
    $data['rec_up']   = $this->M_Home->dt_umum_up();
    $data['rec_down'] = $this->M_Home->dt_umum_down();
    $this->load->view('public/katalog/pv_katalogs', $data);
  }
  function kat_kesehatan(){
    $data['rec_kat']  = $this->M_Home->dt_home();
    $data['rec_up']   = $this->M_Home->dt_kesehatan_up();
    $data['rec_down'] = $this->M_Home->dt_kesehatan_down();
    $this->load->view('public/katalog/pv_katalogs', $data);
  }
  function kat_motivasi(){
    $data['rec_kat']  = $this->M_Home->dt_home();
    $data['rec_up']   = $this->M_Home->dt_motivasi_up();
    $data['rec_down'] = $this->M_Home->dt_motivasi_down();
    $this->load->view('public/katalog/pv_katalogs', $data);
  }
  function kat_wanita(){
    $data['rec_kat']  = $this->M_Home->dt_home();
    $data['rec_up']   = $this->M_Home->dt_wanita_up();
    $data['rec_down'] = $this->M_Home->dt_wanita_down();
    $this->load->view('public/katalog/pv_katalogs', $data);
  }
  function kat_pernikahan(){
    $data['rec_kat']  = $this->M_Home->dt_home();
    $data['rec_up']   = $this->M_Home->dt_pernikahan_up();
    $data['rec_down'] = $this->M_Home->dt_pernikahan_down();
    $this->load->view('public/katalog/pv_katalogs', $data);
  }
  function kat_anak(){
    $data['rec_kat']  = $this->M_Home->dt_home();
    $data['rec_up']   = $this->M_Home->dt_anak_up();
    $data['rec_down'] = $this->M_Home->dt_anak_down();
    $this->load->view('public/katalog/pv_katalogs', $data);
  }
  function kat_remaja(){
    $data['rec_kat']  = $this->M_Home->dt_home();
    $data['rec_up']   = $this->M_Home->dt_remaja_up();
    $data['rec_down'] = $this->M_Home->dt_remaja_down();
    $this->load->view('public/katalog/pv_katalogs', $data);
  }

  public function detail_prod($produk_id){
    $data['rec_kat']  = $this->M_Home->dt_home();
    $data['record']   = $this->M_Home->dt_detail_prod($produk_id);
    $this->load->view('public/katalog/pv_detail', $data);
  }

  function bahasa($language){
    $newData  = array(
      'language'  => $language
    );
    $this->session->set_userdata($newData);

    if($this->session->userdata('language')){
      redirect($_SERVER['HTTP_REFERER']);
    }
  }

  


}
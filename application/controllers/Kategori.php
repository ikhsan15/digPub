<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kategori extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('M_Kategori');
  }

  function index(){
    if($this->session->userdata('access') == 'Administrator' || $this->session->userdata('access') == 'Magang'){
      $this->formawal();
    }
    else{
      redirect(base_url('login'));
    }
  }

  function formawal($mode='', $kategori_id=0){
    if($this->session->userdata('access') == 'Administrator' || $this->session->userdata('access') == 'Magang'){
      // die($kategori_id);
      $kategori_idn = '';
      $kategori_eng = '';
      $foto         = '';
      $old          = '';

      if($mode == 'do_update'){
        $query = "select * from kategori where kategori_id = ".$kategori_id;
        $row = $this->db->query($query);
        $rr = $row->row();

        $kategori_idn = $rr->nama_kategori_idn;   
        $kategori_eng = $rr->nama_kategori_eng;
        $hasil        = $rr->cover_img;
      }
      elseif($mode == 'do_save'){
        $config['upload_path']    = './gambar/cover_kat/';
        $config['allowed_types']  = 'gif|jpg|png';

        $this->load->library('upload', $config);
        $this->upload->do_upload();

        if($kategori_id > 0){
          $kategori_id        = $this->input->post('kategori_id');
          $nama_kategori_idn  = $this->input->post('kategori_idn');
          $nama_kategori_eng  = $this->input->post('kategori_eng');

          $foto               = $_FILES['userfile']['name'];
          $old                = $this->input->post('cover');

          if($foto == ""){
            $data= array(
              'nama_kategori_idn' => "'".pg_escape_string($nama_kategori_idn)."'",
              'nama_kategori_eng' => "'".pg_escape_string($nama_kategori_eng)."'"
            );

            // die(print_r($data));

            $this->M_Kategori->edit($data, $kategori_id);
            redirect('kategori');
          }
          else{
            $_idcover = $this->db->get_where('kategori', ['kategori_id' => $kategori_id])->row();
            unlink("gambar/cover_kat/".$_idcover->cover_img);

            $hasil          = $this->upload->data();

            $data = array(
              'nama_kategori_idn' => "'".pg_escape_string($nama_kategori_idn)."'",
              'nama_kategori_eng' => "'".pg_escape_string($nama_kategori_eng)."'",
              'cover_img'         => "'".$hasil['file_name']."'",
              'cover_size'        => "'".$hasil['file_size']."'",
            );

            // die(print_r($data));

            $this->M_Kategori->edit($data, $kategori_id);
            redirect('kategori');
          }
        }
        else{
          $nama_kategori_idn  = $this->input->post('kategori_idn');
          $nama_kategori_eng  = $this->input->post('kategori_eng');
          $hasil              = $this->upload->data();
          
          // die(print_r($hasil));

          $data = array(
            'nama_kategori_idn' => "'".pg_escape_string($nama_kategori_idn)."'",
            'nama_kategori_eng' => "'".pg_escape_string($nama_kategori_eng)."'",
            'cover_img'         => "'".$hasil['file_name']."'",
            'cover_size'        => "'".$hasil['file_size']."'"
          );

          // die(print_r($data));

          $this->M_Kategori->insert($data);
          redirect('kategori');
        }

        $this->M_Kategori->edit($data, $kategori_id);
        redirect('kategori');
      }
      elseif($mode == 'do_delete'){
        $_idcover = $this->db->get_where('kategori', ['kategori_id' => $kategori_id])->row();
        $query    = $this->db->delete('kategori', ['kategori_id' => $kategori_id]);

        if($query){
          unlink("gambar/cover_kat/".$_idcover->cover_img);
        }
        
        redirect('kategori');
      }
      
      $data['kategori_id']  = $kategori_id;  
      $data['kategori_idn'] = $kategori_idn;
      $data['kategori_eng'] = $kategori_eng;
      $data['rec_kat']      = $this->M_Kategori->tampil_data();
      $data['recordimg']    = $this->M_Kategori->get_one($kategori_id)->row_array();  
    }
    $this->load->view('kategori/v_data', $data);
  }

}
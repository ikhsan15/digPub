<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('M_Produk');
    $this->load->model('M_Kategori');
    // $this->load->library('form_validation');
  }
  
  function index(){
    if($this->session->userdata('access') == 'Administrator' || $this->session->userdata('access') == 'Magang'){
      $this->f_produk();
    }
    else{
      redirect(base_url('login'));
    }
  }

  // function index(){
  //   if($this->session->userdata('access') == 'Administrator'){
  //     $data['record'] = $this->M_Produk->tampil_data();
  //     $this->load->view('produk/v_data', $data);
  //   }else{
  //     redirect(base_url('login'));
  //   }
  // }

  function f_produk($mode='', $produk_id=0){
    if($this->session->userdata('access') == 'Administrator' || $this->session->userdata('access') == 'Magang'){
      // die('123131');
      $nama_penulis = '';
      $judul_idn    = '';
      $judul_eng    = '';
      $kategori_idn = '';
      $terlaris     = '';
      $sinopsis_idn = '';
      $sinopsis_eng = '';
      $foto         = '';
      $old          = '';
      $link_gplay   = '';
      $link_yt      = '';
      $eisbn        = '';
      $halaman      = '';
      $ukuran       = '';

      // $tes          = '';

      if($mode == 'do_update'){
        $query  = "select * from produk where produk_id = ".$produk_id;
        $row    = $this->db->query($query);
        $rr     = $row->row();

        $nama_penulis = $rr->nama_penulis;
        $judul_idn    = $rr->judul_idn;
        $judul_eng    = $rr->judul_eng;
        $kategori_idn = $rr->kategori_idn;
        $terlaris     = $rr->terlaris;
        $sinopsis_idn = $rr->sinopsis_idn;
        $sinopsis_eng = $rr->sinopsis_eng;
        $hasil        = $rr->cover_img;
        $link_gplay   = $rr->link_gplay;
        $link_yt      = $rr->link_yt;
        $eisbn        = $rr->eisbn;
        $halaman      = $rr->halaman;
        $ukuran       = $rr->ukuran;

        // $tes          = $rr->tes;
      }
      elseif($mode == 'do_save'){
        
        $config['upload_path']    = './gambar/cover/';
        $config['allowed_types']  = 'gif|jpg|png';
        // $config['max_size']       = '500';
        // $config['remove_spaces'] = FALSE;
        // $this->file_name = preg_replace("/\s+/", "_", $this->file_name);

        $this->load->library('upload', $config);
        $this->upload->do_upload();
        
        if($produk_id > 0){
          // $produk_id      = $this->input->post('produk_id');
          $nama_penulis   = $this->input->post('nama_penulis');
          $judul_idn      = $this->input->post('judul_idn');
          $judul_eng      = $this->input->post('judul_eng');
          $kategori_idn   = $this->input->post('kategori_idn');
          $terlaris       = $this->input->post('terlaris');
          $sinopsis_idn   = $this->input->post('sinopsis_idn');
          $sinopsis_eng   = $this->input->post('sinopsis_eng');
          $link_gplay     = $this->input->post('link_gplay');
          $link_yt        = $this->input->post('link_yt');
          $eisbn          = $this->input->post('eisbn');
          $halaman        = $this->input->post('halaman');
          $ukuran         = $this->input->post('ukuran');
          
          $terlaris = "Iya";
          if($this->input->post("terlaris") != null)
            $terlaris = $this->input->post("terlaris");

          $produk_id      = $this->input->post('produk_id');
          $field = array(
            "terlaris" => $terlaris
          );

          $foto           = $_FILES['userfile']['name'];
          $old            = $this->input->post('cover');
          
          if($foto == ""){
            $data = array(
              'nama_penulis'  => "'".pg_escape_string($nama_penulis)."'",
              'judul_idn'     => "'".pg_escape_string($judul_idn)."'",
              'judul_eng'     => "'".pg_escape_string($judul_eng)."'",
              'kategori_idn'  => $kategori_idn,
              'kategori_eng'  => $kategori_idn,
              'terlaris'      => "'".$terlaris."'",
              'sinopsis_idn'  => "'".pg_escape_string($sinopsis_idn)."'",
              'sinopsis_eng'  => "'".pg_escape_string($sinopsis_eng)."'",
              'link_gplay'    => "'".$link_gplay."'",
              'link_yt'       => "'".$link_yt."'",
              'eisbn'         => "'".$eisbn."'",
              'halaman'       => "'".$halaman."'",
              'ukuran'        => "'".$ukuran."'"

              // 'tes'           => "'".$tes."'"
            );

            $this->M_Produk->edit($data, $produk_id);
            redirect('produk');
          }
          else{
            $_idcover = $this->db->get_where('produk', ['produk_id' => $produk_id])->row();
            unlink("gambar/cover/".$_idcover->cover_img);

            $hasil          = $this->upload->data();
            
            $data = array(
              'nama_penulis'  => "'".pg_escape_string($nama_penulis)."'",
              'judul_idn'     => "'".pg_escape_string($judul_idn)."'",
              'judul_eng'     => "'".pg_escape_string($judul_eng)."'",
              'kategori_idn'  => $kategori_idn,
              'kategori_eng'  => $kategori_idn,
              'terlaris'      => "'".$terlaris."'",
              'sinopsis_idn'  => "'".pg_escape_string($sinopsis_idn)."'",
              'sinopsis_eng'  => "'".pg_escape_string($sinopsis_eng)."'",
              // 'cover_img'     => "'".$foto."'",
              // 'cover_size'    => "'".$foto_size."'",
              'cover_img'     => "'".$hasil['file_name']."'",
              'cover_size'    => "'".$hasil['file_size']."'",
              'link_gplay'    => "'".$link_gplay."'",
              'link_yt'       => "'".$link_yt."'",
              'eisbn'         => "'".$eisbn."'",
              'halaman'       => "'".$halaman."'",
              'ukuran'        => "'".$ukuran."'"

              // 'tes'           => "'".$tes."'"
            );

            $this->M_Produk->edit($data, $produk_id);
            redirect('produk');
          }          
        }
        else{
          $nama_penulis   = $this->input->post('nama_penulis');
          $judul_idn      = $this->input->post('judul_idn');
          $judul_eng      = $this->input->post('judul_eng');
          $kategori_idn   = $this->input->post('kategori_idn');
          $terlaris       = $this->input->post('terlaris');
          $sinopsis_idn   = $this->input->post('sinopsis_idn');
          $sinopsis_eng   = $this->input->post('sinopsis_eng');
          $hasil          = $this->upload->data();
          $link_gplay     = $this->input->post('link_gplay');
          $link_yt        = $this->input->post('link_yt');
          $eisbn          = $this->input->post('eisbn');
          $halaman        = $this->input->post('halaman');
          $ukuran         = $this->input->post('ukuran');

          // $tes            = $this->input->post('tes');

          
          // die(print_r($hasil));

          // pg_escape_string = mengabaikan tanda '
          // atau menggunakan
          // Converts double and single quotes
          // echo htmlspecialchars($str, ENT_QUOTES);

          // $check = TRUE;
          // if (filesize($_FILES['userfile']['name']) > 209152) {
          //   $this->form_validation->set_message('validate_image', 'The Image file size shoud not exceed 2MB!');
          //   $check = FALSE;
          // }
          // return $check;
          // die($check);

          if($_FILES['userfile']['size'] > 5000000){
            die("image is too large, must be < 5MB");
          }

          die(print_r($kategori_idn));
          $data = array(
            'nama_penulis'  => "'".pg_escape_string($nama_penulis)."'",
            'judul_idn'     => "'".pg_escape_string($judul_idn)."'",
            'judul_eng'     => "'".pg_escape_string($judul_eng)."'",
            'kategori_idn'  => $kategori_idn,
            'kategori_eng'  => $kategori_idn,
            'terlaris'      => "'".$terlaris."'",
            'sinopsis_idn'  => "'".pg_escape_string($sinopsis_idn)."'",
            'sinopsis_eng'  => "'".pg_escape_string($sinopsis_eng)."'",
            'cover_img'     => "'".$hasil['file_name']."'",
            'cover_size'    => "'".$hasil['file_size']."'",
            'link_gplay'    => "'".$link_gplay."'",
            'link_yt'       => "'".$link_yt."'",
            'eisbn'         => "'".$eisbn."'",
            'halaman'       => "'".$halaman."'",
            'ukuran'        => "'".$ukuran."'"
            
            // 'tes'           => "'".$tes."'"
          );

          // die(print_r($data));

          $this->M_Produk->insert($data);
          redirect('produk');
        }

        $this->M_Produk->edit($data, $produk_id);
        redirect('produk');
      }
      elseif($mode == 'do_delete'){
        $_idcover = $this->db->get_where('produk', ['produk_id' => $produk_id])->row();
        $query    = $this->db->delete('produk', ['produk_id' => $produk_id]);

        if($query){
          unlink("gambar/cover/".$_idcover->cover_img);
        }
        
        redirect('produk');
      }
      
      $data['produk_id']    = $produk_id;  
      $data['nama_penulis'] = $nama_penulis;
      $data['judul_idn']    = $judul_idn;
      $data['judul_eng']    = $judul_eng;
      $data['kategori_idn'] = $this->M_Kategori->tampil_data()->result();
      $data['terlaris']     = $terlaris;
      // $data['terlaris']     = $this->M_Produk->show_terlaris()->result();
      $data['sinopsis_idn'] = $sinopsis_idn;
      $data['sinopsis_eng'] = $sinopsis_eng;
      $data['rec_prod']     = $this->M_Produk->tampil_data();
      $data['record']       = $this->M_Produk->get_one($produk_id)->row_array();  
      $data['cover_img']    = $foto;
      // $data['cover_size']   = $foto_size;
      $data['link_gplay']   = $link_gplay;
      $data['link_yt']      = $link_yt;
      $data['eisbn']        = $eisbn;
      $data['halaman']      = $halaman;
      $data['ukuran']       = $ukuran;

      // $data['tes']          = $tes;

      // $data['list_terlaris']		= $this->M_Produk->show_combo("v_pilihan", "pilihan_id", "pilihan_name", "pilihan_id > 0 ", "pilihan_name", $yesno);
    }
    $this->load->view('produk/v_data', $data);
  }

  function print_excel(){
    header("Content-type=application/vnd.ms.excel");
    header("Content-disposition: attachment; filename=Data_Excel_Produk.xls");
    $data['e_excel']         = $this->M_Produk->tampil_data();
    $this->load->view('produk/export_excel', $data);
  }

}
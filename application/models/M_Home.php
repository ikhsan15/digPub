<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model{

  function dt_home(){
    $query = "SELECT * 
              FROM kategori
              ORDER BY kategori_id
              ";
    return $this->db->query($query);
  }  
  
  function dt_seg_terbit(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 1
              ORDER BY p.produk_id
              ";
    return $this->db->query($query);
  }
  function dt_terlaris(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND p.terlaris = 'Iya'
              ORDER BY p.produk_id
              DESC
              LIMIT 10
              ";
    return $this->db->query($query);
  }
  function dt_new_prod(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 2
              ORDER BY p.produk_id
              DESC
              LIMIT 10
              ";
    return $this->db->query($query);
  }

  function dt_seg_terbit_up(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 1
              ORDER BY p.produk_id
              DESC
              LIMIT 5
              ";
    return $this->db->query($query);
  }
  function dt_seg_terbit_down(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 1
              ORDER BY p.produk_id
              DESC
              OFFSET 5
              ";
    return $this->db->query($query);
  }

  function dt_new_prod_up(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 2
              ORDER BY p.produk_id
              DESC
              LIMIT 5
              ";
    return $this->db->query($query);
  }
  function dt_new_prod_down(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 2
              ORDER BY p.produk_id
              DESC
              OFFSET 5
              ";
    return $this->db->query($query);
  }

  function dt_hamka_up(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 3
              ORDER BY p.produk_id
              DESC
              LIMIT 5
              ";
    return $this->db->query($query);
  }
  function dt_hamka_down(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 3
              ORDER BY p.produk_id
              DESC
              OFFSET 5
              ";
    return $this->db->query($query);
  }

  function dt_referensi_up(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 4
              ORDER BY p.produk_id
              DESC
              LIMIT 5
              ";
    return $this->db->query($query);
  }  
  function dt_referensi_down(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 4
              ORDER BY p.produk_id
              DESC
              OFFSET 5
              ";
    return $this->db->query($query);
  } 

  function dt_fiqih_up(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 5
              ORDER BY p.produk_id
              DESC
              LIMIT 5
              ";
    return $this->db->query($query);
  }
  function dt_fiqih_down(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 5
              ORDER BY p.produk_id
              DESC
              OFFSET 5
              ";
    return $this->db->query($query);
  }

  function dt_umum_up(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 6
              ORDER BY p.produk_id
              DESC
              LIMIT 5
              ";
    return $this->db->query($query);
  }
  function dt_umum_down(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 6
              ORDER BY p.produk_id
              DESC
              OFFSET 5
              ";
    return $this->db->query($query);
  }

  function dt_kesehatan_up(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 7
              ORDER BY p.produk_id
              DESC
              LIMIT 5
              ";
    return $this->db->query($query);
  }
  function dt_kesehatan_down(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 7
              ORDER BY p.produk_id
              DESC
              OFFSET 5
              ";
    return $this->db->query($query);
  }

  function dt_motivasi_up(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 8
              ORDER BY p.produk_id
              DESC
              LIMIT 5
              ";
    return $this->db->query($query);
  }
  function dt_motivasi_down(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 8
              ORDER BY p.produk_id
              DESC
              OFFSET 5
              ";
    return $this->db->query($query);
  }

  function dt_wanita_up(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 9
              ORDER BY p.produk_id
              DESC
              LIMIT 5
              ";
    return $this->db->query($query);
  }
  function dt_wanita_down(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 9
              ORDER BY p.produk_id
              DESC
              OFFSET 5
              ";
    return $this->db->query($query);
  }

  function dt_pernikahan_up(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 10
              ORDER BY p.produk_id
              DESC
              LIMIT 5
              ";
    return $this->db->query($query);
  }
  function dt_pernikahan_down(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 10
              ORDER BY p.produk_id
              DESC
              OFFSET 5
              ";
    return $this->db->query($query);
  }

  function dt_anak_up(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 11
              ORDER BY p.produk_id
              DESC
              LIMIT 5
              ";
    return $this->db->query($query);
  }
  function dt_anak_down(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 11
              ORDER BY p.produk_id
              DESC
              OFFSET 5
              ";
    return $this->db->query($query);
  }

  function dt_remaja_up(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 12
              ORDER BY p.produk_id
              DESC
              LIMIT 5
              ";
    return $this->db->query($query);
  }
  function dt_remaja_down(){
    $query = "SELECT p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk AS p, kategori AS k
              WHERE k.kategori_id = p.kategori_idn AND k.kategori_id = 12
              ORDER BY p.produk_id
              DESC
              OFFSET 5
              ";
    return $this->db->query($query);
  }
  
  function dt_detail_prod($produk_id){
    $this->db->select('*');
    $this->db->from('produk');
    $this->db->where('produk.produk_id', $produk_id);
    return $this->db->get()->result();
  }
  
  public function get_one($id){
    $param  = array('produk_id' => $id);
    return $this->db->get_where('produk', $param)->result();
  }
  
  


}
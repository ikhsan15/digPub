<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kategori extends CI_Model{
  
  function tampil_data(){
    // return $this->db->get('kategori');
    $query = "SELECT * FROM kategori
              ORDER BY kategori_id
              ";
    return $this->db->query($query);
  }

  // function insertData($tabelName, $data){
  //   $res  = $this->db->insert($tabelName, $data);
  //   return $res;
  // }

  function insert($data){
    $this->db->insert('kategori', $data);
  }

  function get_one($id){
    $param  = array('kategori_id' => $id);
    return $this->db->get_where('kategori', $param);
  }

  function edit($data, $id){
    $this->db->where('kategori_id', $id);
    $this->db->update('kategori', $data);
  }

  function delete($id){
    $this->db->where('kategori_id', $id);
    $this->db->delete('kategori');
  }

}
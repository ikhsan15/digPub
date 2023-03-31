<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Produk extends CI_Model{
  
  function tampil_data(){
    $query = "SELECT
              p.*,
              k.kategori_id, k.nama_kategori_idn, k.nama_kategori_eng
              FROM produk as p, kategori as k
              WHERE k.kategori_id = p.kategori_idn
              ORDER BY p.produk_id desc
              ";
    return $this->db->query($query);
  }
  
  // function show_produk(){
  //   $query  = "SELECT * FROM produk
  //             ORDER BY produk_id
  //             ";
  //   return $this->db->query($query);
  // }

  function insert($data){
    $this->db->insert('produk', $data);
  }

  function get_one($id){
    $param  = array('produk_id' => $id);
    return $this->db->get_where('produk', $param);
  }

  function edit($data, $id){
    $this->db->where('produk_id', $id);
    $this->db->update('produk', $data);
  }
  
  // function delete($id, $cover){
  //   $this->db->where('produk_id', $id);
  //   unlink(base_url("gambar/cover/hamka/".$cover));
  //   $this->db->delete('produk', array('produk_id' => $id));
  // }
  function delete($produk_id, $cover_img){
    $this->db->where('produk_id = '.$produk_id);
    unlink(base_url("gambar/cover/".$cover_img));
    $this->db->delete('produk');
  }
  
  // function show_terlaris(){
  //   $query = "SELECT * FROM pilihan
  //             ORDER BY pilihan_id
  //             ";
  //   return $this->db->query($query);
  // }

  function GetDataExcel(){
    
    return $this->db->get('produk')->result_array();
  }

  function show_combo($table, $fieldId, $fieldName, $clause, $fieldOrder, $value) {
		$list = '';
    $sql  = " SELECT	".$fieldId.",
          ".$fieldName."
          FROM	".$table."
          WHERE	".$clause."
          ORDER BY ".$fieldOrder;
		$rhQ  = $this->db->query($sql);
          foreach($rhQ->result() as $rrQ){
            $field_id		= $rrQ->$fieldId;
            $field_name	= $rrQ->$fieldName;
			      ($value == $field_id) ? $selected = "selected" : $selected = "";
            $list	.= '<option value="'.$field_id.'" '.$selected.'>'.$field_name.'</option>';
          }
          return $list;
  }
  
  

}
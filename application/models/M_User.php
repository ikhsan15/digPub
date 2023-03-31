<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model{
  
  function show_user(){
    // return $this->db->get('kategori');
    $query = "SELECT * FROM public.user
              ORDER BY user_id DESC
              ";
    return $this->db->query($query);
  }

  function insert($data){
    $this->db->insert('public.user', $data);
  }

  function get_one($user_id){
    $param  = array('user_id' => $user_id);
    return $this->db->get_where('public.user', $param);
  }

  function edit($data, $user_id){
    $this->db->where('user_id', $user_id);
    $this->db->update('public.user', $data);
  }

  function delete($user_id){
    $this->db->where('user_id', $user_id);
    $this->db->delete('public.user');
  }

}
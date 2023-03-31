<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model{

  function query_validasi_email($email){
    $result = $this->db->query("SELECT * FROM public.user WHERE user_email='$email' LIMIT 1");
    return $result;
  }

  function query_validasi_password($email, $password){
    $result = $this->db->query("SELECT * FROM public.user WHERE user_email='$email' AND user_password='$password' LIMIT 1");
    return $result;
  }

} 
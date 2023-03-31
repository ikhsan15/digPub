<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('M_User');
  }

  function index(){
    if($this->session->userdata('access') == 'Administrator' || $this->session->userdata('access') == 'Magang'){
      $this->formawal();
    }
    else{
      redirect(base_url('login'));
    }
  }

  function formawal($mode='', $user_id=0){
    if($this->session->userdata('access') == 'Administrator'){
      // die($user_id);
      // $kategori = '';
      $u_name   = '';
      $u_email  = '';
      $u_pass   = '';
      $u_akses  = '';
      $u_status = '';


      if($mode=='do_update'){
        $query  = "select * from public.user where user_id = ".$user_id;
        $row    = $this->db->query($query);
        $rr     = $row->row();

        $u_name   = $rr->user_name;
        $u_email  = $rr->user_email;
        $u_pass   = $rr->user_password;
        $u_akses  = $rr->user_akses;
        $u_status = $rr->user_status;
      }
      elseif($mode == 'do_save'){
        $u_name   = $this->input->post('u_name');
        $u_email  = $this->input->post('u_email');
        $u_pass   = $this->input->post('u_pass');
        $u_akses  = $this->input->post('u_akses');
        $u_status = $this->input->post('u_status');

        $data= array(
          'user_name'     => "'".$u_name."'",
          'user_email'    => "'".$u_email."'",
          'user_password' => "'".$u_pass."'",
          'user_akses'    => "'".$u_akses."'",
          'user_status'   => "'".$u_status."'"
        );

        if($user_id > 0){       
          $this->M_User->edit($data, $user_id);
        }else{
          $this->M_User->insert($data);
        }
        redirect('user');
      }
      elseif($mode == 'do_delete'){
        // die(print_r('asdadsad'));
        // $this->M_User->delete($data, $user_id);
        $this->db->delete('public.user', ['user_id' => $user_id]);
        redirect('user');
      }
      
      $data['user_id']  = $user_id;
      $data['u_name']   = $u_name;
      $data['u_email']  = $u_email;
      $data['u_pass']   = $u_pass;
      $data['u_akses']  = $u_akses;
      $data['u_status'] = $u_status;
      $data['record']   = $this->M_User->show_user();
    }
    $this->load->view('admin/v_user', $data);
  }


}
<?php defined('BASEPATH') OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Admin extends MY_Controller {  
  function __construct() {
    parent::__construct();
    $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
    $this->lang->load('auth');
    if (!$this->ion_auth->logged_in()) {
        redirect('auth/login', 'refresh');
    }
    if (!$this->ion_auth->is_admin()) {
      redirect('/auth');
    }
  }
  
  public function index() {
    $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
    $data['title'] = 'Dashboard';
    $data['page'] = 'dashboard';
    $this->load->view('tpl/main_tpl',$data);
  }
  
  public function users() {      
    $data['title'] = $this->lang->line('index_heading');
    $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
    $data['users'] = $this->ion_auth->users()->result();
    
    foreach ($data['users'] as $k => $user)
    {
      $data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
    }
    $data['page'] = 'users';
    $this->load->view('tpl/main_tpl', $data);
  }
  
  public function groups() {      
    $data['title'] = $this->lang->line('groups_heading');
    $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
    $data['groups'] = $this->ion_auth->groups()->result();
    $data['page'] = 'groups';
    $this->load->view('tpl/main_tpl', $data);
  }
 
}

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
    $this->load->view('tpl/main_tpl');
  }
 
}

<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Dashbord extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $this->load->view('template/header-login');
    $this->load->view('dashbord/index');
    $this->load->view('template/footer-login');
  }


}

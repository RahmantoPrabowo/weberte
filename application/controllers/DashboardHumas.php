<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardHumas extends CI_Controller {


  public function __construct()
  {
      parent::__construct();
      $this->load->model('Registrasi_model');
  }

	public function index()
	{
     $this->load->view('header/header-humas');
     $this->load->view('LandingPage/DashboardHumas');
     $this->load->view('footer/footer-form');
  }

}

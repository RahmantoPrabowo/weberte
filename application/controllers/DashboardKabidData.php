<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardKabidData extends CI_Controller {


  public function __construct()
  {
      parent::__construct();
      $this->load->model('Registrasi_model');
  }

	public function index()
	{
     $this->load->view('header/header-kabid-data');
     $this->load->view('LandingPage/DashboardKabidData');
     $this->load->view('footer/footer-form');
  }

}

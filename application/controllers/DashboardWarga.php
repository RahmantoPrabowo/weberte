<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardWarga extends CI_Controller {


  public function __construct()
  {
      parent::__construct();
      $this->load->model('Registrasi_model');
  }

	public function index()
	{
     $this->load->view('header/header-warga');
     $this->load->view('LandingPage/DashboardWargaNotApproved');
     $this->load->view('footer/footer-form');
  }

  public function Approved()
  {
     $this->load->view('header/header-warga');
     $this->load->view('LandingPage/DashboardWarga');
     $this->load->view('footer/footer-form');
  }

}

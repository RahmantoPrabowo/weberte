<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InfoWarga extends CI_Controller {


  public function __construct()
  {
      parent::__construct();
      $this->load->model('Registrasi_model');
  }

	public function index()
	{
     $this->load->view('header/header-infowarga');
     $this->load->view('LandingPage/InfoWarga');
     $this->load->view('footer/footer-form');
  }
}
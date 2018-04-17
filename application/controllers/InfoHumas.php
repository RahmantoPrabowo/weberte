<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InfoHumas extends CI_Controller {


  public function __construct()
  {
      parent::__construct();
      $this->load->model('Registrasi_model');
  }

	public function index()
	{
     $this->load->view('header/header-infohumas');
     $this->load->view('LandingPage/InfoHumas');
     $this->load->view('footer/footer-form');
  }
}
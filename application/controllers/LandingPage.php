<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingPage extends CI_Controller {

	public function index()
	{
	   $this->load->view('LandingPage/LandingPage');
  }

  public function sign_up()
	{
	   $this->load->view('LandingPage/sign-up');
  }

  public function forgot_pass()
	{
	   $this->load->view('LandingPage/forgot-password');
  }
}

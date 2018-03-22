<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {


  public function __construct()
  {
      parent::__construct();
      $this->load->model('Registrasi_model');
  }
	public function index()
	{
     $this->load->view('header/header-user-form');
	   $this->load->view('Registrasi/form-registrasi-detail');
     $this->load->view('footer/footer-form');
  }

  public function add_new_member()
	{
     $name          = $_POST['namesurname'];
     $id_number     = $_POST['id-number'];
     $email         = $_POST['email'];
     $pass          = $_POST['password'];

     $data = array(
          'fullname'  => $name,
          'id_number' => $id_number,
          'email'     => $email,
          'password'  => md5($pass)

    );

    $this->Registrasi_model->Insert_new_member($data);

    redirect('LandingPage','refresh');

  }

}

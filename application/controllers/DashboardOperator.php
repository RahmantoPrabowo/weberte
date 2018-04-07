<<<<<<< Updated upstream
<?php 

class DashboardOperator extends CI_Controller {

	public function __construct()
=======
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardOperator extends CI_Controller {


  public function __construct()
>>>>>>> Stashed changes
  {
      parent::__construct();
      $this->load->model('Registrasi_model');
  }

<<<<<<< Updated upstream
  public function index()
  {
     $this->load->view('header/header-operator');
     $this->load->view('LandingPage/DashboardOperator');
     $this->load->view('footer/footer-form');
    
  }

  public function view($id)
  {
    $this->load->view('header/header-operator');
    $this->load->view('LandingPage/operator-view-user',$id);
    $this->load->view('footer/footer-form');
  }

}

?>
=======
	public function index()
	{
     //$this->session->has_userdata();
     //$this->load->view('header/header-operator');
     $this->load->view('LandingPage/DashboardOperator');
     //$this->load->view('footer/footer-form');

  }

}
>>>>>>> Stashed changes

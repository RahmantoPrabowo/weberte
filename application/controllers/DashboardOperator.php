<?php 

class DashboardOperator extends CI_Controller {

	public function __construct()
  {
      parent::__construct();
      $this->load->model('Registrasi_model');
  }

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
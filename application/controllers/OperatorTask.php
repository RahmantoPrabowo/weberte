<?php 

class OperatorTask extends CI_Controller {

	public function __construct()
  {
      parent::__construct();
      $this->load->model('Registrasi_model');
  }

  public function index()
  {
     $this->load->view('header/header-basicform');
     $this->load->view('Operator/ListGroup');
     $this->load->view('footer/footer-form');
    
  }

  public function view($id)
  {
    $data['id'] = $id;
    $this->load->view('header/header-basicform');
    $this->load->view('Operator/operator-view-group',$data);
    $this->load->view('footer/footer-form');
  }

   public function ListNewUser()
  {
    $this->load->view('header/header-basicform');
    $this->load->view('Operator/ListNewUser');
    $this->load->view('footer/footer-form');
  }

   public function AddNew()
  {
   
    $this->load->view('header/header-basicform');
    $this->load->view('Operator/AddNewGroup');
    $this->load->view('footer/footer-form');
  }

  public function SaveNewGroup()
  {

     $data = array(
          'name'          => $_POST['nama_group'],
          'ketua'         => $_POST['ketua_rt'],
          'deskripsi'     => $_POST['deskripsi']
          
    );

    $this->db->insert('group_rt', $data);

    redirect('OperatorTask','refresh');



  }

  public function SaveEditGroup()
  {

    $id = $_POST['id_group'];
     $data = array(
          'name'          => $_POST['nama_group'],
          'ketua'         => $_POST['ketua_rt'],
          'deskripsi'     => $_POST['deskripsi']
          
    );

     $this->db->where('id', $id);
     $this->db->update('group_rt', $data);

    redirect('OperatorTask','refresh');
  }

  public function ApproveUser($id)
  {

     $data = array(
          'status'          => '1'   
    );

     $this->db->where('id', $id);
     $this->db->update('member_reguler', $data);

    redirect('DashboardOperator','refresh');
  }

   public function deleteGroup($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('group_rt');
    redirect('OperatorTask','refresh');
  }



  

}

?>
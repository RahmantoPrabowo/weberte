<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function VerifyInput()
  {
    $user_name = $_POST['username'];
    $password   = md5($_POST['password']);

    $this->db->select('*');
    $this->db->from('member_reguler');
    $this->db->where('email', $user_name);
    $this->db->where('password', $password);
    $query = $this->db->get();

    if($query->num_rows() > 0){
          $this->session->set_userdata('status','loged');
          $hasil = $query->result_array();
          $sess_array = array();

            foreach($hasil as $row)
            {

                $sess_array = array(
                'id'         => $row['id'],
                'fullname'   => $row['firstname'],
                'id_number'  => $row['lastname'],
                'email'      => $row['nama'],
                'role'       => $row['role']

                );
                    $this->session->set_userdata('data_session',$sess_array);

            }

            if($hasil[0]['role']=="lurah"){ 
                    //redirect(site_url('DashboardLurah'));
                    redirect(site_url('DashboardLurah'));
                }

<<<<<<< Updated upstream
            elseif($hasil[0]['email']=="thor@avenger.com"){ 
                  //redirect(site_url('DashboardKabidData'));
                    redirect(site_url('DashboardOperator'));
=======
            elseif($hasil[0]['role']=="kabid data"){ 
                  redirect(site_url('DashboardKabidData'));
>>>>>>> Stashed changes
                }

            elseif($hasil[0]['role']=="operator"){
                  redirect(site_url('DashboardOperator'));
            }
                
            else{ 
                  redirect(site_url('Registrasi'));
                }        

          }

    else{
            redirect(site_url('LandingPage'));
    }
}
}

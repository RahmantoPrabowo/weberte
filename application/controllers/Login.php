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
                'email'      => $row['nama']

                );
                    $this->session->set_userdata('data_session',$sess_array);

            }

            if($hasil[0]['email']=="iron.man@avenger.com"){ 
                  redirect(site_url('DashboardLurah'));
                }

            elseif($hasil[0]['email']=="thor@avenger.com"){ 
                  //redirect(site_url('DashboardKabidData'));
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

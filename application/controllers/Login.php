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
                'peran'      => $row['peran'],
                'role'       => $row['role'],
                'status'     => $row['status']

                );
                    $this->session->set_userdata('data_session',$sess_array);

            }

            if($hasil[0]['peran']=="Pak Lurah")
            { 
              redirect(site_url('DashboardLurah'));
            }
            elseif($hasil[0]['peran']=="Kabid Data")
            { 
              redirect(site_url('DashboardKabidData'));
            }
            elseif($hasil[0]['peran']=="Operator")
            {
              redirect(site_url('DashboardOperator'));
            }
            elseif($hasil[0]['role']=="7")
            {
              if ($hasil[0]['status']=="1") {
                redirect(site_url('DashboardWarga/Approved'));
              }
              else{
                redirect(site_url('DashboardWarga'));
              }
              
            }
            elseif($hasil[0]['role']=="5")
            {
              redirect(site_url('DashboardHumas'));
            }          
            else
            { 
              redirect(site_url('Registrasi'));
            }        

          }

    else{
            redirect(site_url('LandingPage'));
    }
}
}

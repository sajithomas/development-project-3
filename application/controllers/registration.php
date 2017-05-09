<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registration extends CI_Controller {


    public function index()
    {
        $this->load->view('registration_view');
    }

    public function insrtNUser()
    {
        date_default_timezone_set('US/Eastern');

/*$username = 'saji';
$emailid = 'saji.thomas@gmail.com';
$password = 'passw12312';
        $data = array(
            'username'   => $username,
            'emailid'    => $emailid,
            'password'  => $password,

        );*/
        $data = array(
            'username'   => $_POST['username'],
            'emailid'    => $_POST['emailid'],
            'password'  => $_POST['password'],

        );
        $this->load->model('registration_model');
        $result = $this->registration_model->insert_user($data, 'registration');

        if ($result > 0) {

            $userId = $result; // As the result from model returns maximum value of research table
           echo $userId;
        }


        //}else{

        //  $rollback = $this->usragr_model->deleteUser($result);
        //echo $rollback;
        // }

    }
}

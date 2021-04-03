<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

  public function __construct(){
    parent::__construct();

        $this->load->model('Issue_Model', 'issue');
        $this->load->model('Book_Model', 'book');
        $this->load->model('Return_Model', 'return');
        $this->load->model('Categories_Model', 'class');
        $this->load->model('Students_Model', 'student');
        $this->load->model('Admin_Model', 'admin');
  }

  public function editprofile()
  {
    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $box = $this->input->post('box');
    $id = $this->input->post('id');

    $data = array(
      'name' => $name, 
      'email' => $email, 
    );

    $info = $this->return->verify('user_table', $data);
    
    if(empty($info)||$box==true){
      if($box==true){

        $data = array(
          'name' => $name, 
          'email' => $email, 
          'password' => md5($password), 
        );  
      }else{
        $data = array(
          'name' => $name, 
          'email' => $email, 
        );
      }

      $info = $this->student->update('user_table', $data, array('id' => $id ));

      $sessionArray = array(
        'msg' => 'success',
        'name' => $name,
        'id' => $id,
      );

      $this->session->set_userdata($sessionArray);
    }
    else{
      $info = array('msg' => 'error');
    }

    echo json_encode($info);
    
  }


}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct(){
    parent::__construct();

        $this->load->model('Issue_Model', 'issue');
        $this->load->model('Book_Model', 'book');
        $this->load->model('Return_Model', 'return');
        $this->load->model('Categories_Model', 'class');
        $this->load->model('Students_Model', 'student');
        $this->load->model('Admin_Model', 'admin');
  }

  public function adminlist()
  {
        $match = $this->uri->segment(3);
        $info = $this->admin->get('user_table',$match);
        echo json_encode($info);
  }

  public function addadmin()
  {
    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $status = $this->input->post('status');
    $password = 'admin123';

    $data = array(
        'name' => $name, 
        'email' => $email, 
      );

    $info = $this->return->verify('user_table',$data);
    
    $data = array(
        'name' => $name, 
        'email' => $email, 
        'status' => $status, 
        'password' => md5($password), 
      );

    if(empty($info)){
      $info = $this->admin->insert('user_table', $data);
    }
    else{
      $info = array('msg' => 'error');
    }

    echo json_encode($info);
    
  }

  public function editadmin()
  {
    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $status = $this->input->post('status');
    $password = $this->input->post('password');
    $box = $this->input->post('box');
    $id = $this->input->post('id');

    $data = array(
      'name' => $name, 
      'email' => $email, 
      'status' => $status, 
      'id !=' => $id, 
    );

    $info = $this->return->verify('user_table', $data);
    
    if(empty($info)){
      if($box==true){

        $data = array(
          'name' => $name, 
          'email' => $email, 
          'status' => $status, 
          'password' => md5($password), 
        );  
      }else{
        $data = array(
          'name' => $name, 
          'email' => $email, 
          'status' => $status, 
        );
      }

      $info = $this->student->update('user_table', $data, array('id' => $id ));

    }
    else{
      $info = array('msg' => 'error');
    }

    echo json_encode($info);
    
  }

  public function deleteadmin()
  {
    $id = $this->input->post('id');

    $info = $this->student->delete('user_table',$id);

    echo json_encode($info);
    
  }

}

?>
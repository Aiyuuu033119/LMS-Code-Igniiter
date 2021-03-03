<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

  public function __construct(){
    parent::__construct();

        $this->load->model('Issue_Model', 'issue');
        $this->load->model('Book_Model', 'book');
        $this->load->model('Return_Model', 'return');
        $this->load->model('Categories_Model', 'class');
        $this->load->model('Students_Model', 'student');
  }

  public function studentlist()
  {
        $match = $this->uri->segment(3);
        $info = $this->student->get('member_table',$match);
        echo json_encode($info);
  }

  public function addstudent()
  {
    $name = $this->input->post('name');
    $section = $this->input->post('section');
    $contact = $this->input->post('contact');

    $letter = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 4);
    $number = substr(str_shuffle("123456789"), 0, 4);

    $data = array(
      'name' => $name, 
      'section' => $section, 
      'contact' => $contact, 
      'member_id' => $letter.$number, 
    );

    $info = $this->return->verify('member_table',$data);
    
    if(empty($info)){
      $info = $this->student->insert('member_table', $data);
    }
    else{
      $info = array('msg' => 'error');
    }

    echo json_encode($info);
    
  }

  public function editstudent()
  {
    $name = $this->input->post('name');
    $section = $this->input->post('section');
    $contact = $this->input->post('contact');
    $id = $this->input->post('id');
    
    $data = array(
      'name' => $name, 
      'section' => $section, 
      'contact' => $contact, 
      'id !=' => $id, 
    );

    $info = $this->return->verify('member_table', $data);
    
    if(empty($info)){
      $info = $this->student->update('member_table', $data, array('id' => $id ));
    }
    else{
      $info = array('msg' => 'error');
    }

    echo json_encode($info);
    
  }

  public function deletestudent()
  {
    $id = $this->input->post('id');

    $info = $this->student->delete('member_table',$id);

    echo json_encode($info);
    
  }

}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

  public function __construct(){
    parent::__construct();

        $this->load->helper('url');
        $this->load->model('Issue_Model', 'issue');
        $this->load->model('Book_Model', 'book');
        $this->load->model('Return_Model', 'return');
        $this->load->model('Categories_Model', 'class');
  }

  public function classlist()
  {
        $match = $this->uri->segment(3);
        $info = $this->class->get('class_table',$match);
        echo json_encode($info);
  }

  public function addclass()
  {
    $class = $this->input->post('class');
    $code = $this->input->post('code');

    $data = array(
      'categories' => $class, 
      'code' => $code, 
    );

    $info = $this->return->verify('class_table',$data);
    
    if(empty($info)){
      $info = $this->class->insert('class_table', $data);
    }
    else{
      $info = array('msg' => 'error');
    }

    echo json_encode($info);
    
  }

  public function editclass()
  {
    $class = $this->input->post('class');
    $code = $this->input->post('code');
    $id = $this->input->post('id');

    $data = array(
      'categories' => $class, 
      'code' => $code, 
      'id != ' => $id, 
    );

    $info = $this->return->verify('class_table', $data);
    
    if(empty($info)){
      $info = $this->class->update('class_table', $data, array('id' => $id ));
    }
    else{
      $info = array('msg' => 'error');
    }

    echo json_encode($info);
    
  }

  public function deleteclass()
  {
    $id = $this->input->post('id');

    $info = $this->class->delete('class_table',$id);

    echo json_encode($info);
    
  }

}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

  public function __construct(){
    parent::__construct();

        $this->load->model('Issue_Model', 'issue');
        $this->load->model('Book_Model', 'book');
        $this->load->model('Return_Model', 'return');
        $this->load->model('Categories_Model', 'class');
        $this->load->model('Students_Model', 'student');
        $this->load->model('Admin_Model', 'admin');
  }

  public function editsetting()
  {
    $days = $this->input->post('days');
    $class = $this->input->post('class');
    $admin = $this->input->post('admin');

    $data = array(
      'days_borrowed' => $days, 
      'book_categories' => $class, 
      'admin_population' => $admin, 
    );

    $info = $this->student->update('setting_table', $data, array('id' => '1' ));

    echo json_encode($info);
    
  }


}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function __construct(){
    parent::__construct();

        $this->load->model('Model', 'model');
  }

  public function books()
  {
    $info = $this->model->display('book_table', array(), array(5), '', array('code'));

    echo json_encode($info);

  }

  public function student()
  {
    $info = $this->model->display('member_table', array(), array(5), '', array());

    echo json_encode($info);

  }

}
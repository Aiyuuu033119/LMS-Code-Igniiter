<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Issue extends CI_Controller {

  public function __construct(){
    parent::__construct();

        $this->load->helper('url');
        $this->load->model('Issue_Model', 'issue');
        $this->load->model('Book_Model', 'book');
        $this->load->model('Return_Model', 'return');
  }

  public function issuelist(){
    $match = $this->uri->segment(3);
    $info = $this->issue->get('issue_table',$match);
    echo json_encode($info);
  }

  public function user(){
    $member = $this->input->post('member');

    $data = array('member_id' => $member);

    $info = $this->return->verify('member_table',$data);

    echo json_encode($info);
  }

  public function retrieve(){
    $member = $this->input->post('member');
    $code = $this->input->post('code');

    $data = array('code_id' => $code);

    $info = $this->return->verify('book_table',$data);

    echo json_encode($info);
  }

  public function code(){
    $member = $this->input->post('code');

    $data = array('code_id' => $member);

    $info = $this->return->verify('book_table',$data);

    echo json_encode($info);
  }

  public  function addissue()
  {
    $member = $this->input->post('member');
    $code = $this->input->post('code');
    $issued = $this->input->post('issued');
    $return = $this->input->post('return');

    $data = array(
      'member' => $member, 
      'code' => $code, 
      'issued' => $issued,
      'return' => $return,
      'status' => 'Pending',
    );

    $this->issue->insert('issue_table',$data);

    $data = array(
      'status' => 'Pending'
    );

    $this->issue->update('book_table',$data, 'code_id', $code);
    
    $gencode = substr($code, 0, -1);
    $total = $this->book->count('book_table',$gencode, '');
    $status = $this->book->count('book_table',$gencode, 'Available');

    $data = array();
    $items = array();
    for ($i=0; $i < $total; $i++) { 
      $items = array(
        'count' => $status, 
        'code_id' => $gencode.$i, 
      );

      array_push($data, $items);
    }

    $info = $this->issue->updatebatch('book_table',$data, 'code_id');
    
    echo json_encode($info);

  }

  public  function detailsissue()
  {
    if(isset($_SESSION['name'])){
      $data['title'] = 'Issued Details';
      $data['info'] = $this->issue->details('issue_table', $this->uri->segment(3));
      $this->load->view('application/issued_details',$data);
    }
    else{
      redirect('auth/login');
    }
    
  }

  public  function editissue()
  {
    if(isset($_SESSION['name'])){
      $data['title'] = 'Edit Issued Details';
      $data['info'] = $this->issue->details('issue_table', $this->uri->segment(3));
      $this->load->view('application/issued_edit',$data);
    }
    else{
      redirect('auth/login');
    }
    
  }

  public  function updateissue()
  {
    $member = $this->input->post('member');
    $memberold = $this->input->post('old_member');
		$code = $this->input->post('code');
		$old = $this->input->post('old_code');

    if($code!=$old||$member!=$memberold){
      $data = array(
        'member' => $member, 
        'code' => $code, 
      );
  
      $this->issue->update('issue_table', $data, 'id',$this->uri->segment(3));
  
      $data = array(
        'status' => 'Pending', 
      );
  
      $this->issue->update('book_table', $data, 'code_id', $code);
  
      $data = array(
        'status' => 'Available', 
      );
  
      $info = $this->issue->update('book_table', $data, 'code_id', $old);
    }else{
      $info = array('msg' => 'success' );
    }

    echo json_encode($info);

  }

  public function delete()
  {
    $id = $this->input->post('id');
    $code = $this->input->post('code');

    $this->issue->delete('issue_table',$id);

    $data = array(
      'status' => 'Available', 
    );

    $info = $this->issue->update('book_table', $data, 'code_id', $code);

    $gencode = substr($code, 0, -1);
    $total = $this->book->count('book_table',$gencode, '');
    $status = $this->book->count('book_table',$gencode, 'Available');
    $status = ($status-1) + 1;

    $data = array();
    $items = array();
    for ($i=0; $i < $total; $i++) { 
      $items = array(
        'count' => $status, 
        'code' => $gencode, 
      );

      array_push($data, $items);
    }

    $info = $this->issue->updatebatch('book_table',$data, 'code');

    echo json_encode($info);

  }

}

?>
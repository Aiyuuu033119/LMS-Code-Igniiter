<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Returned extends CI_Controller {

  public function __construct(){
    parent::__construct();

        $this->load->helper('url');
        $this->load->model('Issue_Model', 'issue');
        $this->load->model('Book_Model', 'book');
        $this->load->model('Return_Model', 'return');
  }

  public function returnlist(){
    $match = $this->uri->segment(3);
    $info = $this->return->get('return_table',$match);
    echo json_encode($info);
  }

  public function user(){
    $member = $this->input->post('member');

    $data = array('member' => $member);

    $info = $this->return->verify('issue_table',$data);

    echo json_encode($info);
  }

  public function code(){
    $member = $this->input->post('code');

    $data = array('code' => $member);

    $info = $this->return->verify('issue_table',$data);

    echo json_encode($info);
  }

  public function retrieve(){
    $member = $this->input->post('member');
    $code = $this->input->post('code');

    $data = array('member' => $member, 'code' => $code, 'status' => 'Pending');

    $info = $this->return->verify('issue_table',$data);

    echo json_encode($info);
  }
  
  public function returnbooks(){
    $member = $this->input->post('member');
    $code = $this->input->post('code');
    $issue = $this->input->post('issued');
    $expire = $this->input->post('expire');
    $return = $this->input->post('return');

    $date1 = new DateTime($issue);
    $date2 = new DateTime($return);
    $diff = $date1->diff($date2);

    $days = $this->return->verify('setting_table',array('id' => '1', ));

    $status = '';
    if(intval($diff->d) < intval($days[0]->days_borrowed)){
      $status = 'On Time';
    }else{
      $status = 'Late';
    }

    $data = array(
      'member' => $member,
      'code' => $code,
      'release' => $issue,
      'expire' => $expire,
      'return' => $return,
      'status' => $status,
    );

    $this->return->insert('return_table', $data);

    $where = array(
      'member' => $member,
      'code' => $code,
      'status' => 'Pending',
    );

    $this->return->delete('issue_table', $where);
    
    $data = array(
      'status' => 'Available'
    );
    // 'code_id', $code
    $this->return->update('book_table',$data, array('code_id' => $code));
    
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

  public  function detailsreturn()
  {
    if(isset($_SESSION['name'])){
      $data['title'] = 'Returned Details';
      $data['info'] = $this->return->details('return_table', $this->uri->segment(3));
      $this->load->view('application/returned_details',$data);
    }
    else{
      redirect('auth/login');
    }
    
  }

  public  function editreturn()
  {
    if(isset($_SESSION['name'])){
      $data['title'] = 'Edit Return Details';
      $data['info'] = $this->return->details('return_table', $this->uri->segment(3));
      $this->load->view('application/returned_edit',$data);
    }
    else{
      redirect('auth/login');
    }
    
  }

  public  function updatereturn()
  {
    $member = $this->input->post('member');
		$code = $this->input->post('code');
		$old = $this->input->post('old_code');

    if($code!=$old){
      
      $data = array('code' => $old, 'id' => $this->uri->segment(3));

      $info = $this->return->verify('return_table',$data);
      
      $data = array(
        'member' => $info[0]->member, 
        'code' => $info[0]->code, 
        'status' => 'Pending', 
        'issued' => $info[0]->release, 
        'return' => $info[0]->expire, 
      );

      $this->return->insert('issue_table', $data);

      $data = array(
        'member' => $member, 
        'code' => $code, 
      );

      $info = $this->return->verify('issue_table',$data);

      $data = array(
        'member' => $member, 
        'code' => $code, 
        'release' => $info[0]->issued, 
        'expire' => $info[0]->return, 
      );
      
      $this->return->update('return_table',$data, array('id' => $this->uri->segment(3)));

      $where = array(
        'member' => $member,
        'code' => $code,
        'status' => 'Pending',
      );
  
      $this->return->delete('issue_table', $where);

      $data = array(
        'status' => 'Available', 
      );
      
      // 'code_id', $code
      $this->return->update('book_table', $data, array('code_id' => $code));
  
      $data = array(
        'status' => 'Pending', 
      );
      //'code_id', $old
      $info = $this->return->update('book_table', $data, array('code_id' => $old));

    }else{
      $info = array('msg' => 'success' );
    }

    echo json_encode($info);

  }

  public function delete()
  {
    $id = $this->input->post('id');
    $code = $this->input->post('code');

    $data = array('code' => $code, 'id' => $id);

    $info = $this->return->verify('return_table',$data);

    $data = array(
      'member' => $info[0]->member, 
      'code' => $info[0]->code, 
      'status' => 'Pending', 
      'issued' => $info[0]->release, 
      'return' => $info[0]->expire, 
    );

    $this->return->insert('issue_table', $data);

    $data = array(
      'status' => 'Pending', 
    );

    $info = $this->issue->update('book_table', $data, 'code_id', $code);
    
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
    
    $this->issue->delete('return_table',$id);
    
    echo json_encode($info);

  }

}

?>
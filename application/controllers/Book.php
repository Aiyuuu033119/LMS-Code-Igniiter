<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

  public function __construct(){
    parent::__construct();

        $this->load->helper('url');
        $this->load->model('Book_Model', 'book');
  }

  public  function booklist()
  {
    $match = $this->uri->segment(3);
    $info = $this->book->get('book_table',$match);
    echo json_encode($info);
  }

  public  function addbook()
  {
    $book = $this->input->post('book');
		$author = $this->input->post('author');
		$class = $this->input->post('class');
		$price = $this->input->post('price');
		$count = $this->input->post('count');
		$rack = $this->input->post('rack');
		$date = $this->input->post('date');

    $rand = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 4);

    $data = array();
    $items = array();
    for ($i=0; $i < intval($count); $i++) {
      $items = array(
        'book' => $book, 
        'author' => $author,
        'class' => $class,
        'price' => $price,
        'count' => $count,
        'rack' => $rack,
        'arrival' => $date,
        'code' => $rand,
        'code_id' => $rand.$i,
        'total' => $count,
        'status' => 'Available',
      );

      array_push($data, $items);
    }

    $info = $this->book->insertbatch('book_table',$data);

    echo json_encode($info);

  }

  public function addsubbook(){
    $book = $this->input->post('book');
		$author = $this->input->post('author');
		$class = $this->input->post('class');
		$price = $this->input->post('price');
		$count = $this->input->post('count');
		$rack = $this->input->post('rack');
		$date = $this->input->post('date');
		$total = $this->input->post('total');
		$code = $this->input->post('code');
    $status = $this->book->count('book_table',$code, 'Available');

    $data = array();
    $items = array();

    for ($i=intval($total); $i < intval($total)+intval($count); $i++) { 
      $items = array(
        'book' => $book, 
        'author' => $author,
        'class' => $class,
        'price' => $price,
        'count' => $status+$count,
        'rack' => $rack,
        'arrival' => $date,
        'code' => $code,
        'total' => $total+$count,
        'status' => 'Available',
        'code_id' => $code.$i, 
      );

      array_push($data, $items);
    }


    $this->book->insertbatch('book_table',$data);

    $data = array();
    $items = array();
    for ($i=0; $i < $total; $i++) { 
      $items = array(
        'count' => $status+$count,
        'total' => $total+$count,
        'code_id' => $code.$i, 
      );

      array_push($data, $items);
    }

    $info = $this->book->update('book_table',$data, 'code_id');

    $data = $this->book->bookinfo('book_table',array('code' => $code), false);
    echo json_encode($data);
  }

  public  function detailsbook()
  {
    if(isset($_SESSION['name'])){
      $data['title'] = 'Book Details';
      $data['info'] = $this->book->bookinfo('book_table',array('code' => $this->uri->segment(3)), true);
      $data['status'] = $this->book->bookinfo('book_table',array('code' => $this->uri->segment(3)), false);
      $this->load->view('application/booklist_details',$data);
    }
    else{
      redirect('auth/login');
    }
    
  }

  public  function editbook()
  {
    
    if(isset($_SESSION['name'])){
      $data['title'] = 'Edit Books';
      $data['info'] = $this->book->bookinfo('book_table',array('code' => $this->uri->segment(3)), true);
      $data['status'] = $this->book->bookinfo('book_table',array('code' => $this->uri->segment(3)), false);
      $this->load->view('application/booklist_edit',$data);
    }
    else{
      redirect('auth/login');
    }
  }

  public  function updatebook()
  {
    $book = $this->input->post('book');
		$author = $this->input->post('author');
		$class = $this->input->post('class');
		$price = $this->input->post('price');
		$rack = $this->input->post('rack');
		$date = $this->input->post('date');
		$total = $this->input->post('total');

    $data = array();
    $items = array();
    for ($i=0; $i < $total; $i++) { 
      $items = array(
        'book' => $book, 
        'author' => $author, 
        'class' => $class, 
        'price' => $price, 
        'rack' => $rack, 
        'arrival' => $date, 
        'code_id' => $this->uri->segment(3).$i, 
      );

      array_push($data, $items);
    }

    $info = $this->book->update('book_table',$data, 'code_id');

    echo json_encode($info);

  }

  public  function deletebook()
  {
    $data['title'] = 'Delete Books';
    $data['info'] = $this->book->bookinfo('book_table',array('code' => $this->uri->segment(3)), true);
    $data['status'] = $this->book->bookinfo('book_table',array('code' => $this->uri->segment(3)), false);
    $this->load->view('application/booklist_delete',$data);
  }
  
  public  function removebook()
  {
		$code = $this->input->post('code');

    $info = $this->book->delete('book_table',$code);

    if(strlen($code)==5){
      $code = substr($code, 0, -1);

      $total = $this->book->count('book_table',$code, '');
      
      if($total!=null){
        $status = $this->book->count('book_table',$code, 'Available');

        // $info = array('count' => $status );
        $data = array();
        $items = array();

        for ($i=0; $i < $total; $i++) { 
          $items = array(
            'count' => $status, 
            'total' => $total, 
            'code_id' => $code.$i, 
          );

          array_push($data, $items);
  
          $info = $this->book->update('book_table',$data, 'code_id');

        }

      }
      else{
        $info = array('msg' => 'success' );
      }

    }

    echo json_encode($info);

  }
  
}

?>
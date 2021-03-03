<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

    public function __construct(){
		parent::__construct();

        $this->load->helper('url');
		$this->load->model('Return_Model', 'return');
		$this->load->model('Model', 'model');
	}

    public  function dashboard()
	{
        $data['title'] = 'Dashboard';
		$data['books'] = $this->model->count_rows('book_table');
		$data['issue'] = $this->model->count_rows('issue_table');
		$data['return'] = $this->model->count_rows('return_table');
		$data['class'] = $this->model->count_rows('class_table');
		$this->load->view('application/dashboard',$data);
	}

    public  function booklist()
	{
        $data['title'] = 'Book List';
		$this->load->view('application/booklist',$data);
	}

    public  function issuebook()
	{
        $data['title'] = 'Issued Books';
		$data['info'] = $this->return->verify('setting_table',array('id' => '1', ));
		$this->load->view('application/issued_book',$data);
	}

    public  function returnbook()
	{
        $data['title'] = 'Returned Books';
		$this->load->view('application/returned_book',$data);
	}

    public  function categories()
	{
        $data['title'] = 'Categories';
		$data['info'] = $this->return->verify('setting_table',array('id' => '1', ));
		$data['total'] = $this->model->count_rows('class_table');
		$this->load->view('application/categories',$data);
	}

    public  function generatereports()
	{
        $data['title'] = 'Generate Reports';
		$this->load->view('application/reports',$data);
	}
	
	public  function students()
	{
        $data['title'] = 'Students';
		$this->load->view('application/students',$data);
	}

    public  function administrator()
	{
        $data['title'] = 'Administrator';
		$data['info'] = $this->return->verify('setting_table',array('id' => '1', ));
		$data['total'] = $this->model->count_rows('user_table');
		$this->load->view('application/administrator',$data);
	}

    public  function profile()
	{
        $data['title'] = 'Profile';
		$data['info'] = $this->return->verify('user_table', array('name' => $_SESSION['name']));
		$this->load->view('application/profile',$data);
	}
	
    public  function settings()
	{
        $data['title'] = 'Settings';
		$data['info'] = $this->return->verify('setting_table', array('id' => '1'));
		$this->load->view('application/settings',$data);
	}
}

?>
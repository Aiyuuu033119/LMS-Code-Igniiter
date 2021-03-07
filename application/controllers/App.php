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
		if(isset($_SESSION['name'])){
			$data['title'] = 'Dashboard';
			$data['books'] = $this->model->count_rows('book_table');
			$data['issue'] = $this->model->count_rows('issue_table');
			$data['return'] = $this->model->count_rows('return_table');
			$data['class'] = $this->model->count_rows('class_table');
			$this->load->view('application/dashboard',$data);
		}
		else{
			redirect('auth/login');
		}
        
	}

    public  function booklist()
	{
		if(isset($_SESSION['name'])){
	        $data['title'] = 'Book List';
			$this->load->view('application/booklist',$data);
		}
		else{
			redirect('auth/login');
		}
	}

    public  function issuebook()
	{
		if(isset($_SESSION['name'])){
	        $data['title'] = 'Issued Books';
			$data['info'] = $this->return->verify('setting_table',array('id' => '1', ));
			$this->load->view('application/issued_book',$data);
		}
		else{
			redirect('auth/login');
		}
	}

    public  function returnbook()
	{
        
		if(isset($_SESSION['name'])){
	        $data['title'] = 'Returned Books';
			$this->load->view('application/returned_book',$data);
		}
		else{
			redirect('auth/login');
		}

	}

    public  function categories()
	{
        
		if(isset($_SESSION['name'])){
	        $data['title'] = 'Categories';
			$data['info'] = $this->return->verify('setting_table',array('id' => '1', ));
			$data['total'] = $this->model->count_rows('class_table');
			$this->load->view('application/categories',$data);
		}
		else{
			redirect('auth/login');
		}
	}

    public  function generatereports()
	{
		if(isset($_SESSION['name'])){
	        $data['title'] = 'Generate Reports';
			$this->load->view('application/reports',$data);	
		}
		else{
			redirect('auth/login');
		}
        
	}
	
	public  function students()
	{
        
		if(isset($_SESSION['name'])){
	        $data['title'] = 'Students';
			$this->load->view('application/students',$data);
		}
		else{
			redirect('auth/login');
		}
	}

    public  function administrator()
	{
		if(isset($_SESSION['name'])){
	        $data['title'] = 'Administrator';
			$data['info'] = $this->return->verify('setting_table',array('id' => '1', ));
			$data['total'] = $this->model->count_rows('user_table');
			$this->load->view('application/administrator',$data);
		}
		else{
			redirect('auth/login');
		}
        
	}

    public  function profile()
	{
        if(isset($_SESSION['name'])){
	        $data['title'] = 'Profile';
			$data['info'] = $this->return->verify('user_table', array('name' => $_SESSION['name']));
			$this->load->view('application/profile',$data);
		}
		else{
			redirect('auth/login');
		}

	}
	
    public  function settings()
	{
        if(isset($_SESSION['name'])){
	        $data['title'] = 'Settings';
			$data['info'] = $this->return->verify('setting_table', array('id' => '1'));
			$this->load->view('application/settings',$data);
		}
		else{
			redirect('auth/login');
		}
        
        
	}
}

?>
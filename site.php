<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller{
	
	var $data = array();

	function __construct(){
		parent::__construct();
		$this->load->model("math_model");
	}

	public function index(){
		//
		$this->loadMainView();
	}
	
	function loadMainView(){
		//$data = array();
		$data['title'] = "CodeIgniter";
		$data['num1'] = "7";
		$data['num2'] = "14";
		
		
		$data['multiply'] = $this->math_model->multiply($data['num1'], $data['num2']);
		$data['divide'] = $this->math_model->divide($data['num1'], $data['num2']);
		
		$this->load->view("main_view", $data);
		
	}

	function other_view(){
		$this->load->view['welcomeView'];
	}
}
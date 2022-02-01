<?php
class Hello extends CI_Controller {

	public function index ()
	{
		echo "<h2>Hello World!</h2>";
	}

	public function hello_by_model(){
		$this->load->model('Hello_model');
		$data = $this->Hello_model->get_hello();
		echo "<h2>".$data."</h2>";
	}
	public function hello_by_view (){
		$this->load->view('hello');
	}
	public function hello_by_mvc(){
		$this->load->model('Hello_model');
		$data['hello'] = $this->Hello_model->get_hello();
		$this->load->view('hello_mvc', $data);
	}
}
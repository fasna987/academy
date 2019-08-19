<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');

	}

	public function index()
	{

		$this->load->view('sections/header');
		$this->load->view('sections/nav');
		$this->load->view('index');
		$this->load->view('sections/footer');
	}
	public function about()
	{
		$this->load->view('sections/header');
		$this->load->view('sections/nav');
		$this->load->view('about');
		$this->load->view('sections/footer');
	}
	public function contact()
	{
		$this->load->view('sections/header');
		$this->load->view('sections/nav');
		$this->load->view('contact');
		$this->load->view('sections/footer');
	}
	public function course()
	{
		$this->load->model("course_model"); // we load to get the data from db
		$data["courses"]=$this->course_model->getCourse();

		$this->load->view('sections/header');
		$this->load->view('sections/nav');
		$this->load->view("course",$data);
		$this->load->view('sections/footer');
	}
	public function computerscience()
	{
		$this->load->view('sections/header');
		$this->load->view('sections/nav');
		$this->load->view('computerscience');
		$this->load->view('sections/footer');
	}
	public function photography()
	{
		$this->load->view('sections/header');
		$this->load->view('sections/nav');
		$this->load->view('photography');
		$this->load->view('sections/footer');
	}
	public function english()
	{
		$this->load->view('sections/header');
		$this->load->view('sections/nav');
		$this->load->view('english');
		$this->load->view('sections/footer');
	}
	public function it()
	{
		$this->load->view('sections/header');
		$this->load->view('sections/nav');
		$this->load->view('it');
		$this->load->view('sections/footer');
	}
	public function architecture()
	{
		$this->load->view('sections/header');
		$this->load->view('sections/nav');
		$this->load->view('architecture');
		$this->load->view('sections/footer');
	}
	public function micro()
	{
		$this->load->view('sections/header');
		$this->load->view('sections/nav');
		$this->load->view('micro');
		$this->load->view('sections/footer');
	}
}


<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
    {
        parent::__construct();
        // โหลดโมเดลที่สร้างขึ้น
        $this->load->model('News_model');
        $this->load->database();
    }

    public function index()
    {
        // ดึงข้อมูลทั้งหมดจากโมเดล
        $data['news'] = $this->News_model->home();

        // ส่งข้อมูลไปยังวิว (View)
        $this->load->view('Header');
        $this->load->view('Homepage', $data);
        $this->load->view('Footer');
    }

	public function login()
	{
		$this->load->view('Header');
		$this->load->view('Login');
	}

	public function aboutus()
	{
		$this->load->view('Header');
		$this->load->view('Aboutus');
		$this->load->view('Footer');
	}
	public function news()
	{
		$this->load->view('Header');
		$this->load->view('News');
		$this->load->view('Footer');
	}
	public function personnel()
	{
		$this->load->view('Header');
		$this->load->view('Personnel');
		$this->load->view('Footer');
	}
	public function service()
	{
		$this->load->view('Header');
		$this->load->view('Service');
		$this->load->view('Footer');
	}
}

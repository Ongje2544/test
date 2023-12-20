<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *  @property News_model $News_model 
 *  @property CI_Input $input 
 */



class News extends CI_Controller
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
        $data['news'] = $this->News_model->get_all_news();

        // ส่งข้อมูลไปยังวิว (View)
        $this->load->view('backend/Header');
        $this->load->view('backend/News/lists', $data);
    }

    //ดู News
    public function view($id)
    {
        // ดึงข้อมูลจากโมเดล
        $this->load->model('News_model');
        $data['news'] = $this->News_model->get_news_by_id($id);

        // ส่งข้อมูลไปยังวิว (View)
        $this->load->view('backend/Header');
        $this->load->view('backend/News/View', $data);
    }

    public function add()
    {
        $this->load->view('backend/Header');
        $this->load->view('backend/News/Add');
    }
    
    public function insert()
    {
        // ตรวจสอบการส่งข้อมูลแบบ POST
        if ($this->input->post()) {
            $data = $this->input->post();
        
            // ตรวจสอบว่าข้อมูลที่ได้รับไม่ใช่ข้อความเปล่า
            if (!empty(trim($data['Head'])) && !empty(trim($data['Info']))) {
                // เพิ่มข้อมูลในโมเดลพร้อมเวลา
                $this->News_model->insert($data);
        
                // กลับไปที่หน้าแรกหลังจากเพิ่มข้อมูลเรียบร้อย
                redirect('News/index');
            } else {
                // ถ้าข้อมูลบางส่วนเป็นข้อความเปล่า ให้เข้าสู่เงื่อนไข else
                redirect('News/add');
            }
        } else {
            // ถ้าไม่ได้ส่งข้อมูลแบบ POST แสดงฟอร์มสร้างข่าว
            redirect('News/add');
        }
    }

    public function edit($id)
    {
        // ดึงข้อมูลจากโมเดลตาม ID และส่งไปยังวิว (View) สำหรับฟอร์มการแก้ไข
        $data['news_item'] = $this->News_model->get_news_by_id($id);
        $this->load->view('backend/Header');
        $this->load->view('backend/News/Edit', $data);
    }

    public function update()
    {
        $data = $this->input->post();

        // ตรวจสอบการส่งข้อมูลแบบ POST
        if ($this->input->post()) {
            
            
            // ตรวจสอบว่าข้อมูลที่ได้รับไม่ใช่ข้อความเปล่า
            if (!empty(trim($data['Head'])) && !empty(trim($data['Info']))) {
                // อัปเดตข้อมูลในโมเดล
                $this->News_model->update($data);
            }
            
            
            // กลับไปที่หน้าแก้ไขหลังจากอัปเดตข้อมูลเรียบร้อย
            redirect('News/index');
        } else {
            // ถ้าไม่ได้ส่งข้อมูลแบบ POST ให้ redirect กลับไปที่หน้าแก้ไข
            redirect('News/edit/' . $data['Id']);
        }
    }

    public function delete($id)
    {
        // ลบข้อมูลในโมเดล
        $this->News_model->delete_news($id);

        // กลับไปที่หน้าแรกหลังจากลบข้อมูลเรียบร้อย
        redirect('News/index');
        $this->load->view('backend/header/Delete');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // เพิ่มข้อมูล
    public function insert($data)
    {
        date_default_timezone_set('Asia/Bangkok');

        $insert = array(
            'head' => $data['Head'],
            'info' => $data['Info'],
            'date' => date('Y-m-d H:i:s') // เพิ่มเวลา
        );
        return $this->db->insert('news', $insert);
    }

    public function home()
    {
      $query = $this->db->order_by('date', 'DESC')->get('news',3);
        // $this->db->get('news',3)->order_by('date', 'DESC');
        return $query->result();
    }

    // ดึงข้อมูลทั้งหมด
    public function get_all_news()
    {
        $query = $this->db->get('news');
        return $query->result();
    }

    // ดึงข้อมูลตาม ID
    public function get_news_by_id($id)
    {
        $query = $this->db->get_where('news', array('Id' => $id));
        return $query->row();
    }

    // News_model
    public function update($data)
    {
        $update = array(
            'head' => $data['Head'],
            'info' => $data['Info'],
        );

        $this->db->where('id', $data['Id']);
        return $this->db->update('news', $update);
    }


    // ลบข้อมูล
    public function delete_news($id)
    {
        $this->db->where('Id', $id);
        $this->db->delete('news');
    }
}

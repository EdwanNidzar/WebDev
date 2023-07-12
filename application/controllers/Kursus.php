<?php

class Kursus extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Kursus');
    }

    public function index()
    {
        $data['title'] = "Kursus | WEBDEV DIGITALIZ BATCH #5";
        $data['kursus'] = $this->M_Kursus->get_courses();
        $this->load->view('temp/head', $data);
        $this->load->view('temp/nav');
        $this->load->view('kursus/kursus_read', $data);
        $this->load->view('temp/foot');
    }

    public function tambah()
    {
        if (isset($_POST['insert'])) {
            $this->M_Kursus->insert_courses();
            redirect('kursus');
        } else {
            $data['title'] = "Tambah | WEBDEV DIGITALIZ BATCH #5";
            $data['kursus'] = $this->M_Kursus->get_courses();
            $this->load->view('temp/head', $data);
            $this->load->view('temp/nav');
            $this->load->view('kursus/kursus_add');
            $this->load->view('temp/foot');
        }
    }

    public function ubah($id)
    {
        if (isset($_POST['update'])) {
            $this->M_Kursus->update_courses();
            redirect('kursus');
        } else {
            $data['title'] = "Ubah | SIMDAWA-APP";
            $data['kursus'] = $this->M_Kursus->get_courses_byid($id);
            $this->load->view('temp/head', $data);
            $this->load->view('temp/nav');
            $this->load->view('kursus/kursus_update', $data);
            $this->load->view('temp/foot');
        }
    }

    public function hapus($id)
    {
        if (isset($id)) {
            $this->M_Kursus->delete_courses($id);
            redirect('kursus');
        }
    }
}

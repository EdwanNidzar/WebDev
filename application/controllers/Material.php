<?php

class Material extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Material', 'M_Kursus'));
    }

    public function index()
    {
        $data['title'] = "Materi | WEBDEV DIGITALIZ BATCH #5";
        $data['material'] = $this->M_Material->get_material();
        $this->load->view('temp/head', $data);
        $this->load->view('temp/nav');
        $this->load->view('material/material_read', $data);
        $this->load->view('temp/foot');
    }

    public function tambah()
    {
        if (isset($_POST['insert'])) {
            $this->M_Material->insert_material();
            redirect('material');
        } else {
            $data['title'] = "Tambah | WEBDEV DIGITALIZ BATCH #5";
            $data['kursus'] = $this->M_Kursus->get_courses();
            $this->load->view('temp/head', $data);
            $this->load->view('temp/nav');
            $this->load->view('material/material_add', $data);
            $this->load->view('temp/foot');
        }
    }

    public function ubah($id)
    {
        if (isset($_POST['update'])) {
            $this->M_Material->update_material();
            redirect('material');
        } else {
            $data['title'] = "Ubah | WEBDEV DIGITALIZ BATCH #5";
            $data['kursus'] = $this->M_Kursus->get_courses();
            $data['material'] = $this->M_Material->get_material_byid($id);
            $this->load->view('temp/head', $data);
            $this->load->view('temp/nav');
            $this->load->view('material/material_update', $data);
            $this->load->view('temp/foot');
        }
    }

    public function hapus($id)
    {
        if (isset($id)) {
            $this->M_Material->delete_material($id);
            redirect('material');
        }
    }
}

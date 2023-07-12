<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Dashboard | WEBDEV DIGITALIZ BATCH #5";
        $this->load->view('temp/head', $data);
        $this->load->view('temp/nav');
        $this->load->view('home_view');
        $this->load->view('temp/foot');
    }

}

<?php

class Pages extends CI_Controller
{

    public function view($page = 'home')
    {
        //APPATH = application Path
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            show_404();
        }
        //title qui est injecté dans views/pages
        $data['title'] = ucfirst($page); 
        //on les load
        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer', $data);
    }
}
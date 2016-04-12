<?php 

class Connexion extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['title'] = 'Login';
        $this->load->helper('form');
        $this->load->view('templates/header',$data);
        $this->load->view('connexion/index');
        $this->load->view('templates/footer',$data);
    }

}


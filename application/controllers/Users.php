<?php

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }

    public function index()
    {
        $data['users'] = $this->users_model->get_score();
        $data['title'] = 'HighScores';
        //chargements des vues

        $this->load->view('templates/header', $data);
        $this->load->view('users/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($username = NULL)
    {
        $data['users_unique'] = $this->users_model->get_score($username);
        if (empty($data['users_unique'])) {
            show_404();
        }

        $data['title'] = $data['users_unique']['username'];

        $this->load->view('templates/header', $data);
        $this->load->view('users/view', $data);
        $this->load->view('templates/footer');
    }

    public function signup()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'S\'inscrire';
        
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        if ($this->form_validation->run() === FALSE) {
//            $this->load->view('templates/header', $data);
            $this->load->view('users/signup');
//            $this->load->view('templates/footer');

        } else {
            $this->users_model->set_user();
            redirect('/pages/view', 'refresh');
//            $this->load->view('templates/header', $data);
//            $this->load->view('users/view');
//            $this->load->view('templates/footer');

        }
    }
}
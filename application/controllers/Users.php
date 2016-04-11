<?php

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->helper('url_helper');
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

    public function view($pseudo = NULL)
    {
        $data['users_unique'] = $this->users_model->get_score($pseudo);
        if (empty($data['users_unique'])) {
            show_404();
        }

        $data['title'] = $data['users_unique']['pseudo'];

        $this->load->view('templates/header', $data);
        $this->load->view('users/view', $data);
        $this->load->view('templates/footer');
    }


}
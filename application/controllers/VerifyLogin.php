<?php

class VerifyLogin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('connexion_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }

    function index()
    {
        //This method will have the credentials validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|callback_check_database');

        if ($this->form_validation->run() == FALSE) {
            //Field validation failed.  User redirected to login page
            $data['title'] = 'Fail';
            $this->load->view('connexion/index', $data);
        } else {
            //redirectionne la page et la refresh
            redirect('home', 'refresh');
        }

    }

    function check_database($password)
    {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');

        //query the database
        $result = $this->connexion_model->login($username, $password);

        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'id' => $row->id,
                    'username' => $row->username
                );
                $this->session->set_userdata($sess_array);
                $_SESSION = $sess_array;
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }
}

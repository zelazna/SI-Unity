<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }

//    function index()
//    {
//        if ($this->session->has_userdata("username")) {
//            $session_data = $this->session->userdata('logged_in');
//            $data['username'] = $session_data['username'];
//            $this->load->view('index.php', $data);
//        } else {
//            //If no session, redirect to login page
//            redirect('index.php/connexion/index', 'refresh');
//        }
//    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('pages/view', 'refresh');
    }

}

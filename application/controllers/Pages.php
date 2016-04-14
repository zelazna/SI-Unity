<?php header('Access-Control-Allow-Origin: *');

class Pages extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url_helper');

    }

    public function view($page = 'home')
    {
        //APPATH = application Path
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            show_404();
        }
        //title qui est injecté dans views/pages
        $data['title'] = ucfirst($page);
        //on les load
        //$this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        //$this->load->view('templates/footer', $data);
    }
}
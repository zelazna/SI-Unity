<?php header("Access-Control-Allow-Origin: *");


class Form extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->helper('file');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->model("json_model");
    }

// Load view page
    public function index()
    {
        $this->load->view("view_form");
    }

// Fetch user data and convert data into json
    public function data_submitted()
    {

// Store user submitted data in array
        $data = array(
            'score' => $this->input->post('score'),
            'scores_id' => $this->input->post('scores_id'),
        );

// Converting $data in json
        $json_data['emp_data'] = json_encode($data);

// Send json encoded data to model
        $return = $this->json_model->insert_json_in_db($json_data);
        if ($return == true) {
            $data['result_msg'] = 'Json data successfully inserted into database !';
            redirect('game', 'refresh');
        } else {
            $data['result_msg'] = 'Please configure your database correctly';
        }

// Load view to show message
        $this->load->view("view_form", $data);
    }

}

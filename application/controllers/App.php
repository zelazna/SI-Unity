<?php

class Form extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('file');
        $this->load->model("App_model");
    }

// Fetch user data and convert data into json
    public function data_submitted($_POST)
    {
// Send json encoded data to model
        $return = $this->App_model->insert_json_in_db($_POST);
        if ($return == true) {
            $data['result_msg'] = 'Json data successfully inserted into database !';
        } else {
            $data['result_msg'] = 'Please configure your database correctly';
        }

    }

}

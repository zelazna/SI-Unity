<?php

class Json_Model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

// Insert json data into database
    public function insert_json_in_db($json_data)
    {
        var_dump($json_data);
        $test = json_decode($json_data['emp_data']);

        $this->db->insert('scores', $test);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}

<?php

class Users_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_score($username = FALSE)
    {
        if ($username === FALSE) {
            $query = $this->db->select('users.username,scores.score')
                ->from('users')
                ->join('scores', 'users.id = scores.scores_id')
                ->order_by('scores.score', 'DESC')
                ->get();
            return $query->result_array();
        } else {
            $query = $this->db->select('users.username,scores.score')
                ->from('users')
                ->join('scores', 'users.id = scores.scores_id')
                ->where('username', $username)
                ->get();
            return $query->row_array();
        }

    }
    
    public function set_user()
    {
        $this->load->helper('url');

        $username = url_title($this->input->post('username'), 'dash', TRUE);

        $data = array(
            'username' => $username,
            'password' => md5($this->input->post('password'))
        );

        return $this->db->insert('users', $data);
    }
}
<?php

class Users_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_score($pseudo = FALSE)
    {
        if ($pseudo === FALSE) {
            $this->db->select('users.pseudo,scores.score');
            $this->db->from('users');
            $this->db->join('scores', 'users.id = scores.scores_id');
            $query = $this->db->get();
            return $query->result_array();
        } else {
            $this->db->select('users.pseudo,scores.score');
            $this->db->from('users');
            $this->db->join('scores', 'users.id = scores.scores_id');
            $this->db->where('pseudo', $pseudo);
            $query = $this->db->get();
            return $query->row_array();
        }

    }
}
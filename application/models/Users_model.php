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
            $query = $this->db->select('users.pseudo,scores.score')
                ->from('users')
                ->join('scores', 'users.id = scores.scores_id')
                ->order_by('scores.score', 'DESC')
                ->get();
            return $query->result_array();
        } else {
            $query = $this->db->select('users.pseudo,scores.score')
                ->from('users')
                ->join('scores', 'users.id = scores.scores_id')
                ->where('pseudo', $pseudo)
                ->get();
            return $query->row_array();
        }

    }

//@TODO changer la requete
    public function set_user()
    {
        $this->load->helper('url');

        $pseudo = url_title($this->input->post('pseudo'), 'dash', TRUE);

        $data = array(
            //'title' => $this->input->post('title'),
            'pseudo' => $pseudo,
            'password' => $this->input->post('password')
        );

        return $this->db->insert('users', $data);
    }
}
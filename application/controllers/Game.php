<?php

class Game extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');

    }

    public function load()
    {
        header('location:game.php');
    }
}
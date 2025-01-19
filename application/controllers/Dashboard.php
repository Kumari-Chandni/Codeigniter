<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('is_logged_in')) {
            redirect('signin');
        }
    }

    public function index()
    {
        echo "Welcome to the Dashboard, " . $this->session->userdata('username') . "!";
    }
}

<?php

class Admin extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('auth'));
        }
    }

    function index()
    {
        $this->load->view('v_admin');
    }
}

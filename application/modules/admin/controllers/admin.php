<?php

class Admin extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        belum_login();
    }

    function index()
    {
        $this->load->view('v_admin');
    }
    function showtable()
    {
        $this->load->view('v_table');
    }
}

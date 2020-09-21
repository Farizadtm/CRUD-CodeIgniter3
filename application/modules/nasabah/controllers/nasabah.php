<?php

class Nasabah extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_nasabah');
    }
    function index()
    {
        $data['nasabah'] = $this->m_nasabah->getall();
        $this->load->view('v_nasabah', $data);
    }
    function form_add()
    {
        $this->load->view('v_form_add');
    }
    function add()
    {
    }
    function delete($id)
    {
        $this->m_nasabah->delete($id);
        redirect('nasabah');
    }
}

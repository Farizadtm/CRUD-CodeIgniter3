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
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $notelp = $this->input->post('notelp');

        $data = array(
            'nama' => $nama,
            'email' => $email,
            'no_telp' => $notelp
        );
        $this->m_nasabah->add($data, 'nasabah');
        redirect('nasabah');
    }
    function form_update($id)
    {
        $where = array('nasabah_id' => $id);
        $data['nasabah'] = $this->m_nasabah->edit('nasabah', $where)->result();
        $this->load->view('v_form_update', $data);
    }
    function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $notelp = $this->input->post('notelp');

        $data = array(
            'nama' => $nama,
            'email' => $email,
            'no_telp' => $notelp,
        );

        $where = array(
            'nasabah_id' => $id,
        );

        $this->m_nasabah->update($where, $data, 'nasabah');
        redirect('nasabah');
    }
    function delete($id)
    {
        $this->m_nasabah->delete($id);
        redirect('nasabah');
    }
}

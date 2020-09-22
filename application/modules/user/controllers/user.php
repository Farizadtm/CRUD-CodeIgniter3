<?php

class Cs extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_cs');
    }
    function index()
    {
        $data['nasabah'] = $this->m_cs->getall();
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
        $this->m_cs->add($data, 'nasabah');
        redirect('nasabah');
    }
    function form_update($id)
    {
        $where = array('nasabah_id' => $id);
        $data['nasabah'] = $this->m_cs->edit('nasabah', $where)->result();
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

        $this->m_cs->update($where, $data, 'nasabah');
        redirect('nasabah');
    }
    function delete($id)
    {
        $this->m_cs->delete($id);
        redirect('nasabah');
    }
}

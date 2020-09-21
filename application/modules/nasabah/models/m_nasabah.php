<?php

class M_nasabah extends MX_Controller
{
    function getall()
    {
        return $this->db->get('nasabah')->result();
    }

    function add()
    {
    }

    function delete($id)
    {
        $this->db->delete('nasabah', array('nasabah_id' => $id));
    }
}

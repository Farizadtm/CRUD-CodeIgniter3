<?php

class M_nasabah extends MX_Controller
{
    function getall()
    {
        return $this->db->get('nasabah')->result();
    }

    function add($data)
    {
        $this->db->insert('nasabah', $data);
    }

    public function edit($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function delete($id)
    {
        $this->db->delete('nasabah', array('nasabah_id' => $id));
    }
}

<?php

class M_auth extends MX_Controller
{
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}

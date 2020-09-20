<?php

function udah_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('user_id');
    if ($user_session) {
        redirect(base_url('admin'));
    }
}

function belum_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('user_id');
    if (!$user_session) {
        redirect(base_url('auth'));
    }
}

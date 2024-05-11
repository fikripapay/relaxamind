<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth 
{
    function loginRestrict()
    {
        $CI =& get_instance();
        if (empty($CI->session->userdata('id'))) {
            redirect(base_url('home/index'));
        } else{
            return TRUE;
        }
    }

    function adminRestrict()
    {
        $CI =& get_instance();
        if ($CI->session->userdata('level') == 'admin') {
            return TRUE;
        } else {
            sweetalert('warning', 'Warning!', 'Maaf Akses Gagal.');
            redirect(base_url('user/dashboard'));
        }
    }

    function userRestrict()
    {
        $CI =& get_instance();
        if ($CI->session->userdata('level') == 'user') {
            return TRUE;
        } else {
            sweetalert('warning', 'Warning!', 'Maaf Akses Gagal.');
            redirect(base_url('dashboard'));
        }
    }

}

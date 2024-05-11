<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('sweetalert'))
{
	function sweetalert($tipe = '', $status = '', $message = '')
    {
        $CI =& get_instance();
        return $CI->session->set_flashdata('alert', 'Swal.fire(
                                                        "'.$status.'",
                                                        "'.$message.'",
                                                        "'.$tipe.'"
                                                    );
                                            ');
    }
}

if ( ! function_exists('notification'))
{
	function notification($tipe = '', $message = '')
    {
        $CI =& get_instance();
        return $CI->session->set_flashdata('notif', 'Toast.fire({
                                                        icon: "'.$tipe.'",
                                                        title: "'.$message.'"
                                                    });
                                            ');
    }
}
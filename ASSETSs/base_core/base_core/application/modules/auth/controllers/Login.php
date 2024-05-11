<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

    public function __construct() 
    {
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('auth/login');
	}

    public function proses_login()
    {
        $email    = $this->input->post('email');
        $password = $this->input->post('password');

        $cek_data = $this->db->select('email, password')
                             ->from('tb_users')
                             ->where('email', $email)
                             ->where('delete_at', 0)
                             ->get()->row_array();
        if (!empty($cek_data)) {
            $cek_pass = $this->db->select('*')
                                ->from('tb_users')
                                ->where('email', $email)
                                ->where('password', md5($password))
                                ->where('delete_at', 0)
                                ->get()->row_array();
            if (!empty($cek_pass)) {
                $session = [
                    'id'           => $cek_pass['id'],
                    'id_group'     => $cek_pass['id_group'],
                    'hash_user'    => $cek_pass['hash_user'],
                    'nama_lengkap' => $cek_pass['nama_lengkap'],
                    'no_telepon'   => $cek_pass['no_telepon'],
                    'alamat'       => $cek_pass['alamat'],
                    'foto'         => $cek_pass['foto'],
                    'email'        => $cek_pass['email'],
                    'level'        => 'admin',
                    'logged_in'    => TRUE
                ];

                $this->session->set_userdata($session);

                $data['status']  = 'success';
                $data['message'] = '<div class="alert alert-success radius shadow" role="alert">
                                        Berhasil! Selamat Datang '.$cek_pass['nama_lengkap'].'
                                    </div>';
                $data['url']     = base_url('dashboard');
            } else {
                $data['status']  = 'error';
                $data['message'] = '<div class="alert alert-danger radius shadow" role="alert">
                                        Error! Email & Password Anda Salah.
                                    </div>';
            }
        } else{
            $data['status']  = 'error';
            $data['message'] = '<div class="alert alert-danger radius shadow" role="alert">
                                    Error! Email & Password tidak terdaftar.
                                </div>';
        }

        echo json_encode($data);
    }

    public function logout()
    {
        session_destroy();
        redirect(base_url());
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->auth->loginRestrict();
        $this->auth->adminRestrict();
    }

	public function index()
	{
        $data['title']   = 'Dashboard';
        $data['content'] = 'index';

		$this->load->view('main/base', $data);
	}
}

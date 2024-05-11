<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Example extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->auth->loginRestrict();
        $this->auth->adminRestrict();
    }

	public function index()
	{
        $data['title']   = 'Example';
        $data['content'] = 'index';
        $data['example'] = $this->db->get_where('tb_example', ['delete_at' => 0])->result_array();

		$this->load->view('main/base', $data);
	}

    public function save()
    {
        $example = $this->input->post('example');

        $data_example = [
            'example' => $example
        ];

        $this->db->insert('tb_example', $data_example);

        // notification('success', 'Data telah ditambahkan.');
        sweetalert('success', 'Berhasil!', 'Data telah ditambahkan.');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function get_data()
    {
        $id = $this->input->post('id');
        $data = $this->db->get_where('tb_example', ['id' => $id])->row_array();
        echo json_encode($data);
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $example = $this->input->post('example');

        $data_edit = [
            'example' => $example
        ];  

        $this->db->where('id', $id)
                 ->update('tb_example', $data_edit);

        sweetalert('success', 'Berhasil!', 'Data telah diubah.');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function delete($id = '')
    {
        $this->db->where('id', $id)
                 ->update('tb_example', ['delete_at' => 1]);

        sweetalert('success', 'Berhasil!', 'Data telah dihapus.');
        redirect($_SERVER['HTTP_REFERER']);
    }

    // public function load_data()
    // {
    //     $this->datatables->set_database('default');
		
	// 	$this->datatables->select('example, id');
	// 	$this->datatables->from('tb_example');
	// 	$this->datatables->where('delete_at', 0);
	// 	$this->datatables->edit_column('id', 
    //         '<button class="btn btn-sm btn-info edit" data-id="$1">Edit</button>
    //         <a href="'.base_url("master/example/delete/").'$1" class="btn btn-sm btn-danger del btn-fill">Hapus</a>
	// 	','id');
		
	// 	$result = $this->datatables->generate();

	// 	echo $result;
    // }
}

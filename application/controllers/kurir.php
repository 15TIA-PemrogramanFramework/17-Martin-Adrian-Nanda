<?php 
/**
* 
*/
class kurir extends CI_Controller
{
	

	function __construct()
	{
		parent::__construct();
		$this->load->model('kurir_model');
		if (($this->session->userdata('level')=='') && ($this->session->userdata('username')==''))
        {
            redirect('/');
        }
		
		
	}

	function index()
	{
		
		$data['kurir']=$this->kurir_model->ambil_data();

		$this->load->view('kurir/kurir_list', $data); 
		
	}

	function tambah(){
		$data= array(
			'nama_kurir' => set_value('nama_kurir'),
			'phone' => set_value('phone'),
			'uid' => set_value('uid'),
			'id_kurir' => set_value('id_kurir'),
			
			'button' => 'tambah',
			'action' => site_url('kurir/tambah_aksi')
			);

		$this->load->view('kurir/kurir_form2',$data);
	}

	function tambah_aksi(){

		$data= array(
			'nama_kurir' => $this->input->post('nama_kurir'), 
			'uid' => $this->input->post('uid'),
			'phone' => $this->input->post('phone')
			
			);

		$this->kurir_model->tambah_data($data);
		redirect(site_url('kurir'));
	}

	function delete($id_kurir){
		$this->kurir_model->hapus_data($id_kurir);
		redirect(site_url('kurir'));
	}

	function edit($id_kurir){
		$kurir=$this->kurir_model->ambil_data_id($id_kurir);

		$data= array(
			'nama_kurir' => set_value('nama_kurir',$kurir->nama_kurir), 
			'phone' => set_value('phone',$kurir->phone), 
			'id_kurir' => set_value('id_kurir',$kurir->id_kurir),
			'button' => 'Edit',
			'action' => site_url('kurir/edit_aksi')
			);

		$this->load->view('kurir/kurir_form',$data);

	}

	function edit_aksi(){
		$data= array(
			
			
			

			'nama_kurir' => $this->input->post('nama_kurir'), 
			'phone' => $this->input->post('phone')
			
			);
		$id_kurir=$this->input->post('id_kurir');
		$this->kurir_model->edit_data($id_kurir,$data);
		redirect(site_url('kurir'));
	}

}
?>
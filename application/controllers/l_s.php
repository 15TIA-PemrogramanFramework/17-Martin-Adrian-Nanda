<?php 
/**
* 
*/
class l_s extends CI_Controller
{
	

	function __construct()
	{
		parent::__construct();
		$this->load->model('l_s_model');

		
		
	}

	function index()
	{
		if (($this->session->userdata('level')=='') && ($this->session->userdata('username')==''))
        {
            redirect('/');
        }elseif (($this->session->userdata('level')=='member')||($this->session->userdata('level')=='kurir')) {
        	$data['l_s']=$this->l_s_model->ambil_data2();

		$this->load->view('l_s/l_s_list2', $data);
        } else{
		$data['l_s']=$this->l_s_model->ambil_data();

		$this->load->view('l_s/l_s_list', $data);
		
	} }

	function tambah(){
		$data= array(
			'level' => set_value('level'),
			
			'username' => set_value('username'),
			'password' => set_value('password'),
			'uid' => set_value('uid'),
			'button' => 'tambah',
			'action' => site_url('l_s/tambah_aksi')
			);

		$this->load->view('l_s/l_s_form',$data);
	}

	function tambah_aksi(){

		$data= array(
			'username' => $this->input->post('username'), 
			
			'password' => $this->input->post('password'),
			'level' => $this->input->post('level')

	
			);

		$this->l_s_model->tambah_data($data);
		redirect(site_url('l_s'));
	}

	function delete($uid){
		$this->l_s_model->hapus_data($uid);
		redirect(site_url('l_s'));
	}

	function edit($uid){
		$l_s=$this->l_s_model->ambil_data_id($uid);

		$data= array(
			
			'username' => set_value('username',$l_s->username),
			'password' => set_value('password',$l_s->password),
			'level' => set_value('level',$l_s->level),
			'uid' => set_value('uid',$l_s->uid),
			'button' => 'Edit',
			'action' => site_url('l_s/edit_aksi')
			);

		$this->load->view('l_s/l_s_form',$data);

	}

	function edit_aksi(){
		$data= array(
			'username' => $this->input->post('username'), 
			
			'password' => $this->input->post('password'),
			'level' => $this->input->post('level')

			);
		$uid=$this->input->post('uid');
		$this->l_s_model->edit_data($uid,$data);
		redirect(site_url('l_s'));
	}

}
?>
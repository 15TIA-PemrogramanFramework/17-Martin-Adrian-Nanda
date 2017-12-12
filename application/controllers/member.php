<?php 
/**
* 
*/
class member extends CI_Controller
{
	

	function __construct()
	{
		parent::__construct();
		$this->load->model('member_model');
		if (($this->session->userdata('level')=='') && ($this->session->userdata('username')==''))
        {
            redirect('/');
        }
		
		
		
	}

	function index()
	{
		if (($this->session->userdata('level')=='')&& ($this->session->userdata('username')==''))
        {
            redirect('/');
        }elseif (($this->session->userdata('level')=='member')) {
        	$data['member']=$this->member_model->ambil_data2();

		$this->load->view('member/member_list2', $data);
        } else{

		$data['member']=$this->member_model->ambil_data();

		$this->load->view('member/member_list', $data);
		}
	}

	function tambah(){
		$data= array(
			'nama' => set_value('nama'),
			'uid' => set_value('uid'),
			'lokasi' => set_value('lokasi'),
			'id_member' => set_value('id_member'),
			'button' => 'tambah',
			'action' => site_url('member/tambah_aksi')
			);

		$this->load->view('member/member_form2',$data);
	}

	function tambah_aksi(){

		$data= array(
			'nama' => $this->input->post('nama'), 
			'uid' => set_value('uid'),
			'lokasi' => $this->input->post('lokasi')
	
			);

		$this->member_model->tambah_data($data);
		redirect(site_url('member'));
	}

	function delete($id_member){
		$this->member_model->hapus_data($id_member);
		redirect(site_url('member'));
	}

	function edit($id_member){
		$member=$this->member_model->ambil_data_id($id_member);

		$data= array(
			'nama' => set_value('nama',$member->nama), 
			
			'lokasi' => set_value('lokasi',$member->lokasi),
			'id_member' => set_value('id_member',$member->id_member),
			'button' => 'Edit',
			'action' => site_url('member/edit_aksi')
			);

		$this->load->view('member/member_form',$data);

	}

	function edit_aksi(){
		$data= array(
			
			
			

			'nama' => $this->input->post('nama'), 
			
			'lokasi' => $this->input->post('lokasi')

			);
		$id_member=$this->input->post('id_member');
		$this->member_model->edit_data($id_member,$data);
		redirect(site_url('member'));
	}

}
?>
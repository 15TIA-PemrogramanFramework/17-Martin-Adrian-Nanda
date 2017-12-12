<?php 
/**
* 
*/
class biaya extends CI_Controller
{
	

	function __construct()
	{
		parent::__construct();
		$this->load->model('biaya_model');

		if (($this->session->userdata('level')=='') && ($this->session->userdata('username')==''))
        {
            redirect('/');
        }
		
	}

	function index()
	{
		if (($this->session->userdata('level')=='admin') )
        {
           $data['biaya']=$this->biaya_model->ambil_data2();
	
		$this->load->view('biaya/biaya_list2', $data); 
        }elseif (($this->session->userdata('level')=='member') ) {
        	 $data['biaya']=$this->biaya_model->ambil_data();
	
		$this->load->view('biaya/biaya_list', $data); 
        }

		
		
	}
		
	

	function tambah(){
		$data= array(
			'id_member' => set_value('ide_member'),
			'tagihan' => set_value('tagihan'),
			'uid'	=> set_value('uid'),
			'status' => set_value('status'),
			'id_biaya' => set_value('id_biaya'),
			'button' => 'tambah',
			'action' => site_url('biaya/tambah_aksi')
			);

		$this->load->view('biaya/biaya_form2',$data);
	}

	function tambah_aksi(){

		$data= array(
			'id_member' => $this->input->post('id_member'), 
			'uid' => $this->input->post('uid'), 
			'tagihan' => $this->input->post('tagihan'),
			
			'status' => $this->input->post('status')
			
	
			);

		$this->biaya_model->tambah_data($data);
		redirect(site_url('biaya'));
	}

	function delete($id_biaya){
		$this->biaya_model->hapus_data($id_biaya);
		redirect(site_url('biaya'));
	}

	function edit($id_biaya){
		$biaya=$this->biaya_model->ambil_data_id($id_biaya);

		$data= array(
		
			'id_member' => set_value('id_member',$biaya->id_member),
			'tagihan' => set_value('tagihan',$biaya->tagihan),
			'status' => set_value('status',$biaya->status),
			
			'id_biaya' => set_value('id_biaya',$biaya->id_biaya),
			'button' => 'Edit',
			'action' => site_url('biaya/edit_aksi')
			);

		$this->load->view('biaya/biaya_form',$data);

	}

	function edit_aksi(){
		$data= array(
			
			'id_member' => $this->input->post('id_member'), 
			'tagihan' => $this->input->post('tagihan'),
			
			'status' => $this->input->post('status')
			
			);
		$id_biaya=$this->input->post('id_biaya');
		$this->biaya_model->edit_data($id_biaya,$data);
		redirect(site_url('biaya'));
	}

}
?>
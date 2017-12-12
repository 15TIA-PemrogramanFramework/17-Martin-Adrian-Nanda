<?php 
/**
* 
*/
class sampah extends CI_Controller
{
	

	function __construct()
	{
		parent::__construct();
		$this->load->model('sampah_model');

		if (($this->session->userdata('level')=='') && ($this->session->userdata('username')==''))
        {
            redirect('/');
        }

        		
        		$this->load->model('sampah_model'); 
				
	}

	function index()
	{
		
		if (($this->session->userdata('level')=='admin') )
        {
           $data['sampah']=$this->sampah_model->ambil_data2();
	
		$this->load->view('sampah/sampah_list', $data); 
        }elseif (($this->session->userdata('level')=='member') ) {
        	 $data['sampah']=$this->sampah_model->ambil_data();
	
		$this->load->view('sampah/sampah_list', $data); 
        }elseif (($this->session->userdata('level')=='kurir') )
        {
           $data['sampah']=$this->sampah_model->ambil_data2();
	
		$this->load->view('sampah/sampah_list', $data); 
        }

		
		
	}

	function tambah(){
		$data= array(
			'id_member' => set_value('id_member'),
			'id_kurir' => set_value('id_kurir'),
			'uid' => set_value('uid'),
			'lokasi' => set_value('lokasi'),
			'tanggal' => set_value('tanggal'),
			'detail' => set_value('detail'),
			'status' => set_value('status'),
			'id_sampah' => set_value('id_sampah'),
			
			'button' => 'tambah',
			'action' => site_url('sampah/tambah_aksi')
			);

		$this->load->view('sampah/sampah_form2',$data);
	}

	function tambah_aksi(){

		$data= array(
			'id_member' => $this->input->post('id_member'), 
			'id_kurir' => $this->input->post('id_kurir'),
			'uid' => $this->input->post('uid'),
			'lokasi' => $this->input->post('lokasi'),
			'tanggal' => $this->input->post('tanggal'),
			'detail' => $this->input->post('detail'),
			'status' => $this->input->post('status')
			
			);

		$this->sampah_model->tambah_data($data);
		redirect(site_url('sampah'));
	}

	function delete($id_sampah){
		$this->sampah_model->hapus_data($id_sampah);
		redirect(site_url('sampah'));
	}

	function edit($id_sampah){
		$sampah=$this->sampah_model->ambil_data_id($id_sampah);

		$data= array(
			'id_member' => set_value('id_member',$sampah->id_member), 
			'id_kurir' => set_value('id_kurir',$sampah->id_kurir), 
			'uid' => set_value('uid',$sampah->uid),
			'lokasi' => set_value('lokasi',$sampah->lokasi),
			'tanggal' => set_value('tanggal',$sampah->tanggal),
			'detail' => set_value('detail',$sampah->detail),
			'status' => set_value('status',$sampah->status),
			
			
			'id_sampah' => set_value('id_sampah',$sampah->id_sampah),
			'button' => 'Edit',
			'action' => site_url('sampah/edit_aksi')
			);

		$this->load->view('sampah/sampah_form',$data);

	}

	function edit_aksi(){
		$data= array(
			
			
			
			'uid' => $this->input->post('uid'),
			'id_member' => $this->input->post('id_member'), 
			'id_kurir' => $this->input->post('id_kurir'),
			
			'lokasi'=> $this->input->post('lokasi'),
			'tanggal' => $this->input->post('tanggal'),
			'detail' => $this->input->post('detail'),
			'status' => $this->input->post('status')
			
			);
		$id_sampah=$this->input->post('id_sampah');
		$this->sampah_model->edit_data($id_sampah,$data);
		redirect(site_url('sampah'));
	}

	

}
?>
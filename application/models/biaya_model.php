<?php 
/**
* 
*/
class biaya_model extends CI_Model
{
	public $nama_table 	= 'biaya';
	public $id_biaya	= 'id_biaya';
	public $order		= 'DESC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data(){

		$uid= $this->session->userdata('uid');
		
		// dapatkan id user yg login
  $this->db->select('*');
  $this->db->where('uid', $uid);//
  $this->db->from('biaya');
  $query = $this->db->get();
  return $query->result();

	}


function ambil_data2(){

		
		
		$this->db->order_by($this->id_biaya,$this->order); 
	return $this->db->get($this->nama_table)->result();

	}

function ambil_data_id($id_biaya){


		$this->db->where($this->id_biaya, $id_biaya);
		 return $this->db->get($this->nama_table)->row();

	}

	
	

	function tambah_data($data){
		return $this->db->insert($this->nama_table, $data);
	

	}

	function hapus_data($id_biaya){
		$this->db->where($this->id_biaya,$id_biaya);
		$this->db->delete($this->nama_table);
		
	}

	function edit_data($id_biaya,$data){
		$this->db->where($this->id_biaya,$id_biaya);
		$this->db->update($this->nama_table,$data);
		
	}

	


}
/**
* 
*/


 ?>
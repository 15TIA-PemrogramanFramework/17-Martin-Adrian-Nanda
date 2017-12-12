<?php 
/**
* 
*/
class sampah_model extends CI_Model
{
	public $nama_table 	= 'sampah';
	public $id_sampah	= 'id_sampah';
	
	public $order		= 'DESC';

	function __construct()
	{
		parent::__construct();


	}

	function ambil_data(){
		$uid= $this->session->userdata('uid');
		 $this->db->select('*');
  $this->db->where('uid', $uid);//
  $this->db->from('sampah');
  $query = $this->db->get();
  return $query->result();
		
		

	}

function ambil_data2(){

		$this->db->order_by($this->id_sampah,$this->order); 
	return $this->db->get($this->nama_table)->result();


	}

	function ambil_data_id($id_sampah){
		$this->db->where($this->id_sampah, $id_sampah);
		 return $this->db->get($this->nama_table)->row();

	}

function ambil_data_id_kurir($id_sampah){
		$this->db->where($this->id_kurir, $id_sampah);
		 return $this->db->get($this->nama_table)->row();

	}

	function tambah_data($data){
		return $this->db->insert($this->nama_table, $data);
	

	}

	function hapus_data($id_sampah){
		$this->db->where($this->id_sampah,$id_sampah);
		$this->db->delete($this->nama_table);
		
	}

	function edit_data($id_sampah,$data){
		$this->db->where($this->id_sampah,$id_sampah);
		$this->db->update($this->nama_table,$data);
		
	}



}
/**
* 
*/


 ?>
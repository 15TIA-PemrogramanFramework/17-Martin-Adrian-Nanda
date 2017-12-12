<?php 
/**
* 
*/
class admin_model extends CI_Model
{
	public $nama_table 	= 'admin';
	public $id_admin	= 'id_admin';
	public $order		= 'DESC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data(){
		$this->db->order_by($this->id_admin, $this->order);
		 return $this->db->get($this->nama_table)->result();

	}

	function ambil_data_id($id_admin){
		$this->db->where($this->id_admin, $id_admin);
		 return $this->db->get($this->nama_table)->row();

	}


	function tambah_data($data){
		return $this->db->insert($this->nama_table, $data);
	

	}

	function hapus_data($id_admin){
		$this->db->where($this->id_admin,$id_admin);
		$this->db->delete($this->nama_table);
		
	}

	function edit_data($id_admin,$data){
		$this->db->where($this->id_admin,$id_admin);
		$this->db->update($this->nama_table,$data);
		
	}

function cek_login($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		 return $this->db->get($this->nama_table)->row();

	}


}
/**
* 
*/


 ?>
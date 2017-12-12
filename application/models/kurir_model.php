<?php 
/**
* 
*/
class kurir_model extends CI_Model
{
	public $nama_table 	= 'kurir';
	public $id_kurir	= 'id_kurir';
	public $order		= 'DESC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data(){
		$this->db->select('kurir.id_kurir,
			kurir.nama_kurir, kurir.phone,
			
		

			login_session.username,
			login_session.password')
		->join('login_session','login_session.uid=kurir.uid')
		->order_by($this->id_kurir, $this->order);
		;
		 return $this->db->get($this->nama_table)->result();

	}

	function ambil_data2(){
		
$this->db->order_by($this->id_kurir,$this->order); 
	return $this->db->get($this->nama_table)->result();


	}

	function ambil_data_id($id_kurir){
		$this->db->where($this->id_kurir, $id_kurir);
		
		 return $this->db->get($this->nama_table)->row();

	}


	function tambah_data($data){
		return $this->db->insert($this->nama_table, $data);
	

	}

	function hapus_data($id_kurir){
		$this->db->where($this->id_kurir, $id_kurir);
		$this->db->delete($this->nama_table);
		
	}

	function edit_data($id_kurir,$data){
		$this->db->where($this->id_kurir,$id_kurir);
		$this->db->update($this->nama_table,$data);
		
	}


}
/**
* 
*/


 ?>
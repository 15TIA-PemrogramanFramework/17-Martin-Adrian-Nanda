<?php 
/**
* 
*/
class member_model extends CI_Model
{
	public $nama_table 	= 'member';
	public $id_member	= 'id_member';
	public $order		= 'DESC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data(){
		

		$this->db->select('member.id_member,
			member.nama,
			member.lokasi,
		

			login_session.username,
			login_session.password')
		->join('login_session','login_session.uid=member.uid')
		->order_by($this->id_member, $this->order);
		;

		 return $this->db->get($this->nama_table)->result();

	}

function ambil_data2(){

		$uid= $this->session->userdata('uid');
		
		// 
  
  $this->db->where('uid', $uid);//
  $this->db->from('member');
  $query = $this->db->get();
  return $query->result();

	}


	function ambil_data_id($id_member){
		$this->db->where($this->id_member, $id_member);
		 return $this->db->get($this->nama_table)->row();

	}


	function tambah_data($data){
		return $this->db->insert($this->nama_table, $data);
	

	}

	function hapus_data($id_member){
		$this->db->where($this->id_member,$id_member);
		$this->db->delete($this->nama_table);
		
	}

	function edit_data($id_member,$data){
		$this->db->where($this->id_member,$id_member);
		$this->db->update($this->nama_table,$data);
		
	}


	
	
}
/**
* 
*/


 ?>
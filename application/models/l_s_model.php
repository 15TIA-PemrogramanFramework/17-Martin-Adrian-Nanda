<?php 

class l_s_model extends CI_Model
{
	public $nama_table 	= 'login_session';
	public $uid	= 'uid';
	public $order		= 'DESC';

	function __construct()
	{
		parent::__construct();
	}

function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	function ambil_data(){
		

		$this->db->order_by($this->uid, $this->order);

		 return $this->db->get($this->nama_table)->result();

	}

	function ambil_data2(){
		

			$uid= $this->session->userdata('uid');
		
		// 
  $this->db->select('*');
  $this->db->where('uid', $uid);//
  $this->db->from('login_session');
  $query = $this->db->get();
  return $query->result();


	}

	function ambil_data_id($uid){
		$this->db->where($this->uid, $uid);
		 return $this->db->get($this->nama_table)->row();

	}


	function tambah_data($data){
		return $this->db->insert($this->nama_table, $data);
	

	}

	function hapus_data($uid){
		$this->db->where($this->uid,$uid);
		$this->db->delete($this->nama_table);
		
	}

	function edit_data($uid,$data){
		$this->db->where($this->uid,$uid);
		$this->db->update($this->nama_table,$data);
		
	}

	
}?>
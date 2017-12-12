<?php 
/**
* 
*/
class user_model extends CI_Model
{
	public $nama_table 	= 'login_session';
	public $uid	= 'uid';
	public $order		= 'DESC';

	function __construct()
	{
		parent::__construct();
	}

	



function cek_login($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$this->db->where('level',$level);

		 return $this->db->get($this->nama_table)->row();

	}

	public function cek_user($data) {
			$query = $this->db->get_where('login_session', $data);
			return $query;
		}


}
/**
* 
*/


 ?>
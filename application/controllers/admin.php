<?php
session_start();
class admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('home');
		}
		$this->load->helper('text');
	}
	public function index() {
		$data['username'] = $this->session->userdata('username');
		$this->load->view('home', $data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}
}
?>
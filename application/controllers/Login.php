<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        
    }

    public function index()
    {
		if($this->session->userdata('logined') && $this->session->userdata('logined') == true)
		{
			redirect('home');
		}
		
		if(!$this->input->post())
		{
			$this->load->view('login');
		}
		else 
		{		

			
			$data = array('username' => $this->input->post('username', TRUE),
						'password' => ($this->input->post('password', TRUE))
			);
		$this->load->model('user_model'); // load model_user
		$hasil = $this->user_model->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['uid'] = $sess->uid;
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='admin') {
				$data['username'] = $this->session->userdata('username');
		$this->load->view('home', $data);
			}
			elseif ($this->session->userdata('level')=='member') {
				$data['username'] = $this->session->userdata('username');
		$this->load->view('home', $data);
			}
			elseif ($this->session->userdata('level')=='kurir') {
				$data['username'] = $this->session->userdata('username');
		$this->load->view('home', $data);
			}		
		}
			else  
			{
				$this->session->set_flashdata('gagal','<div class="alert alert-danger">
					<strong>Gagal Login!</strong> Username dan Password Anda Salah. 
					</div>');
				redirect("/");
			}
		}
        
    } 
	
	public function logout()
    {
		$this->session->unset_userdata('logined');
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('password');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect("/");
    } 
}

/* End of file Workflows.php */
/* Location: ./application/controllers/Workflows.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-04-15 00:43:10 */
/* http://harviacode.com */
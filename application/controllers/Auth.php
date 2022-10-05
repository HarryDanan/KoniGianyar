<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_auth');
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function view_login(){
		$this->load->view('login');
	}
	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == TRUE) {
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);

			$data = $this->M_auth->login($username, $password);

			if ($data == false) {
				$alert = array(
					'message' => 'Username / Password Anda Salah.',
					'type' => 'error'
				);
				// redirect('Auth/view_login');
			} else {
				$session = [
					'userdata' => $data,
					'status' => "Loged in"
				];
				$this->session->set_userdata($session);
				redirect('Dashboard/Admin');
				// if ($data->role == "Admin") {
				// 	$session = [
				// 		'userdata' => $data,
				// 		'status' => "Loged in"
				// 	];
				// 	$this->session->set_userdata($session);
				// 	redirect('Dashboard/Admin');
				// } else if ($data->role == "User") {
				// 	$session = [
				// 		'userdata' => $data,
				// 		'status' => "Loged in"
				// 	];
				// 	$this->session->set_userdata($session);
				// 	redirect('Dashboard/User');
				// } else {
				//     $alert = array(
				//         'message' => 'Action Not Recognized!',
				//         'type' => 'error'
				//     );
				// 	// redirect('Login');
				// }
			}
		} else {
			// TODO : error
			$error = $this->form_validation->error_array();
			if (count($error) == 2) {
				// $this->session->set_flashdata('error_val', $error['username'].','.$error['password']);
				$alert = array(
					'message' => $error['username'] . ',' . $error['password'],
					'type' => 'error'
				);
			} else if (count($error) == 1) {
				if (isset($error['password'])) {
					// $this->session->set_flashdata('error_password', $error['password']);
					$alert = array(
						'message' => $error['password'],
						'type' => 'error'
					);
				}
				if (isset($error['username'])) {
					// $this->session->set_flashdata('error_username', $error['username']);
					$alert = array(
						'message' => $error['username'],
						'type' => 'error'
					);
				}
			} else {
				$alert = array(
					'message' => validation_errors(),
					'type' => 'error'
				);
			}
			// $this->session->set_flashdata('error', validation_errors());
			// redirect('Login');
		}

		echo json_encode($alert);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome');
	}
}

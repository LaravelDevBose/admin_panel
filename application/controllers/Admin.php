<?php 

Class Admin extends CI_Controller{

	/*================View Login Page======================*/	
	public function index()
	{
		// echo $this->session->userdata('admin_id'); exit();

		if ($this->Admin_model->is_admin_loged_in()) 
		{
			redirect('dashboard');
			// $data['content'] = 'dashboard/home';  
			// $this->load->view('admin/master', $data);
		}
		else{
			$data['title']='Admin Login';
			$this->load->view('admin/login_page', $data);
		}
	}


	/*========== Admin Login Data Check ==========*/
	public function login_data_check()
	{
		$this->form_validation-> set_rules('username', 'User Name', 'trim|required|min_length[3]');
		$this->form_validation-> set_rules('password', 'Password', 'trim|required|min_length[6]');

		if($this->form_validation->run() == FALSE){

			$data['title']='Admin Login';
			$this->load->view('admin/login_page', $data);
		}else{

			if($this->Admin_model->admin_login_data_check()){

				redirect('dashboard');
			}else{
				$data['error']='User Name and Password Not Match';
				$this->session->set_flashdata($data);
				redirect('admin/login');
			}
		}
	}

	/*=============== Logout Method ==============*/
	public function logout()
	{	
		//unset user session data
		$this->session->unset_userdata('admin_id');
		$this->session->unset_userdata('admin_name');

		//destroy session data
		$this->session->sess_destroy();

		//redirect back to login page
		redirect('admin/login');
	}



	
}
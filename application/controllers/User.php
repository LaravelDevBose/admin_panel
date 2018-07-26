<?php

Class User extends CI_Controller{

	public function __construct()
	{
		parent::__construct();

		$vars['about_us'] = $this->Template_model->get_about_us_info();
		$vars['address'] = $this->Template_model->get_address_info();
		$vars['phone'] = $this->Template_model->get_phone_info();
		$vars['email'] = $this->Template_model->get_email_info();
		$vars['categories'] = $this->Category_model->get_all_category_info();
		$this->load->vars( $vars);
	}


	public function index()
	{
		$data['title'] = 'User Login';
		$data['page_path'] = 'frontEnd/user/login';
		$this->load->view('frontEnd/master', $data);
	}

	/*========= User Login Data check ==========*/
	public function login_data_check()
	{
		$this->form_validation->set_rules('username', 'User Name', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');

		if($this->form_validation->run() == FALSE){

			$data['title'] = 'User Login';
			$data['page_path'] = 'frontEnd/user/login';
			$this->load->view('frontEnd/master', $data);

		}else{

			if($this->User_model->user_login_data_check()){

				if($this->input->post('page') == 'checkout'){
					redirect('shipping');
				}else{
					redirect('index')
				}
				
			}else{
				$data['error']='User Name and Password Not Match';
				$this->session->set_flashdata($data);
				redirect('login');
			}
		}
	}

	/*======= User registation Page==========*/
	public function register_page()
	{
		$data['title'] = 'User Registaion';
		$data['page_path'] = 'frontEnd/user/register';
		$this->load->view('frontEnd/master', $data);
	}


	/*======== user registaion Data check============*/
	public function user_registation_data_check()
	{	
		
		$this->form_validation->set_rules('name', 'Name','trim|required');
		$this->form_validation->set_rules('username', 'Username','trim|required|is_unique[users.username]');
		$this->form_validation->set_rules('email', 'Email','trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('phone_num', 'Phone Number','trim|required');
		// $this->form_validation->set_rules('admin_type', 'Admin Type','trim|required');
		$this->form_validation->set_rules('password', 'Password','trim|required|min_length[6]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password','trim|required|min_length[6]|matches[password]');

		if($this->form_validation->run() == FALSE){
			$data['title'] = 'User Registration';
			$data['page_path'] = 'frontEnd/user/register';
			$this->load->view('frontEnd/master', $data);
		}else{
			
			
			if($this->User_model->register_user_data()){
				$data['success'] = 'Registration Successfully!';
				$this->session->set_flashdata($data);
				if($this->input->post('page') == 'checkout'){
					redirect('shipping');
				}else{
					redirect('index')
				}
				
			}else{
				$data['error'] = 'Registration Not Successfully. Try Again!';
				$this->session->set_flashdata($data);
				redirect('register');
			}

			
			
		}
	}
}
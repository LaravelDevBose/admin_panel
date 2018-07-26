<?php
Class Template extends CI_Controller{


	public function __construct()
	{
		parent::__construct();

		//check user login or not
		if(!$this->Admin_model->is_admin_loged_in() ){
			redirect('admin/login');
		}
	}

	
	// -----view About Page

	public function about_info()
	{
		$data['title']='About Info';
		$data['page_path']='admin/template/about_page';
		$data['about_us'] = $this->Template_model->get_about_us_info();
		$data['address'] = $this->Template_model->get_address_info();
		$data['phone'] = $this->Template_model->get_phone_info();
		$data['email'] = $this->Template_model->get_email_info();
		$this->load->view('admin/master', $data);
	}


	//========== updated About Us info

	public function about_us()
	{
		$this->form_validation-> set_rules('about_us', 'About Us', 'trim|required');
			
		if($this->form_validation->run() == FALSE){
			echo 0;
		}else{

			if($this->Template_model->insert_or_update_about_us_info()){
				echo 1;
			}else{
				echo 0;
			}
		}
	}

	//========== updated About Us info

	public function address()
	{
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
			
		if($this->form_validation->run() == FALSE){
			echo 0;
		}else{

			if($this->Template_model->insert_or_update_address_info()){
				echo 1;
			}else{
				echo 0;
			}
		}
	}


	//========== updated or insert phone_number info

	public function phone_number()
	{
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
			
		if($this->form_validation->run() == FALSE){
			echo 0;
		}else{

			if($this->Template_model->insert_or_update_phone_info()){
				echo 1;
			}else{
				echo 0;
			}
		}
	}

	//========== updated or insert Email Address info

	public function email_address()
	{
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required');
			
		if($this->form_validation->run() == FALSE){
			echo 0;
		}else{

			if($this->Template_model->insert_or_update_email_info()){
				echo 1;
			}else{
				echo 5;
			}
		}
	}




	
}
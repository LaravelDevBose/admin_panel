<?php

Class Slider extends CI_Controller{

	public function __construct()
	{
		parent::__construct();

		//check user login or not
		if(!$this->Admin_model->is_admin_loged_in() ){
			redirect('admin/login');
		}
	}

	//========== Slider Page View ==========

	public function slider_page( )
	{	

		$data['title'] = 'Slider Image';
		$data['page_path'] = 'admin/template/slider_page';
		$data['sliders'] = $this->Slider_model->get_all_slider_data(); 

		$this->load->view('admin/master', $data);
	}

	// ====== Slider Image Insert In database===========
	public function slider_image_store()
	{ 
		if($this->Slider_model->slider_image_insert()){

			$data['success'] = 'Slider Image Store Successfully';
			$this->session->set_flashData($data);
			redirect('sliders');
		}else{
			$data['error'] = 'Some Thing Wrong Try again Later';
			$this->session->set_flashData($data);
			redirect('sliders');
		}
		
	}


	//========== Slider Image Delete ============
	public function slider_image_delete($id=null)
	{
		if($this->Slider_model->delete_slider_image($id)){

			$data['success'] = 'Slider Image Delete Successfully';
			$this->session->set_flashData($data);
			redirect('sliders');
		}else{
			$data['error'] = 'Slider Image Not Deleted. Try Again!';
			$this->session->set_flashData($data);
			redirect('sliders');
		}
	}


}
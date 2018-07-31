<?php
Class Page extends CI_Controller{


	public function __construct()
	{
		parent::__construct();

		//check user login or not
		if(!$this->Admin_model->is_admin_loged_in() ){
			redirect('admin/login');
		}
	}

	
	// -----view About Page

	public function contact_us_page()
	{
		$data['title']='Contact Us';
		$data['page_path']='admin/pages/contact_us_page';
		$data['address'] = $this->Page_model->get_address_info();
		$data['phone'] = $this->Page_model->get_phone_info();
		$data['email'] = $this->Page_model->get_email_info();
		$this->load->view('admin/master', $data);
	}


	/*============== About Us Pages==============*/
	public function about_us_page()
	{
		$data['title']='About Us';
		$data['page_path']='admin/pages/about_us_page';
		$data['about_us'] = $this->Page_model->get_about_us_info();
		$this->load->view('admin/master', $data);
	}


	/*============ about us info update =============*/
	public function about_us_update()
	{
		$this->form_validation-> set_rules('about_us', 'About Us', 'trim|required');
			
		if($this->form_validation->run() == FALSE){
			$data['title']='About Us';
			$data['page_path']='admin/pages/about_us_page';
			$data['about_us'] = $this->Page_model->get_about_us_info();
			$this->load->view('admin/master', $data);
		}else{

			if($this->Page_model->insert_or_update_about_us_info()){
				$data['success'] = 'About Us Info Updated Successfully!';
				$this->session->set_flashdata($data);
				redirect('page/about_us_page');
			}else{
				$data['error'] = 'About Us Info Not Updated Successfully!';
				$this->session->set_flashdata($data);
				redirect('page/about_us_page');
			}
		}
	}


	/*============== Our services Pages==============*/
	public function our_srvices_page()
	{
		$data['title']='Our services';
		$data['page_path']='admin/pages/service_page';
		$data['our_service'] = $this->Page_model->get_service_info();
		$this->load->view('admin/master', $data);
	}


	/*============ about us info update =============*/
	public function our_services_update()
	{
		if($this->Page_model->insert_or_update_service_info()){
			$data['success'] = 'Updated Successfully!';
			$this->session->set_flashdata($data);
			redirect('page/service_page');
		}else{
			$data['error'] = 'Updated Not Successfully!';
			$this->session->set_flashdata($data);
			redirect('page/service_page');
		}
		
	}



	/*============== GAllery Pages==============*/
	public function gallery_page()
	{
		$data['title']='Gallery';
		$data['page_path']='admin/pages/gallery_page';
		$data['gallary_images'] = $this->Page_model->get_all_gallery_images();
		$this->load->view('admin/master', $data);
	}


	// ====== Slider Image Insert In database===========
	public function gallary_image_store()
	{ 
		if($this->Page_model->gallery_image_insert()){

			$data['success'] = 'Image Store Successfully';
			$this->session->set_flashData($data);
			redirect('page/gallery_page');
		}else{
			$data['error'] = 'Some Thing Wrong Try again Later';
			$this->session->set_flashData($data);
			redirect('page/gallery_page');
		}
		
	}


	//========== Slider Image Delete ============
	public function gallery_image_delete($id=null)
	{
		if($this->Page_model->delete_gallery_image($id)){

			$data['success'] = 'Image Delete Successfully';
			$this->session->set_flashData($data);
			redirect('page/gallery_page');
		}else{
			$data['error'] = 'Image Not Deleted. Try Again!';
			$this->session->set_flashData($data);
			redirect('page/gallery_page');
		}
	}



	//========== updated About Us info

	public function address()
	{
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
			
		if($this->form_validation->run() == FALSE){
			echo 0;
		}else{

			if($this->Page_model->insert_or_update_address_info()){
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

			if($this->Page_model->insert_or_update_phone_info()){
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

			if($this->Page_model->insert_or_update_email_info()){
				echo 1;
			}else{
				echo 5;
			}
		}
	}


	//========== Video Gallery page==========
	public function video_page()
	{
		$data['title']='Video Gallery';
		$data['page_path']='admin/pages/video_page';
		$data['videos'] = $this->Page_model->get_all_video();
		$this->load->view('admin/master', $data);
	}

	public function video_store()
	{
		$this->form_validation-> set_rules('video_link', 'Video Link', 'trim|required');
			
		if($this->form_validation->run() == FALSE){
			$data['title']='Video Gallery';
			$data['page_path']='admin/pages/video_page';
			$data['videos'] = $this->Page_model->get_all_video();
			$this->load->view('admin/master', $data);
		}else{

			if($this->Page_model->insert_video_path()){
				$data['success'] = 'Updated Successfully!';
				$this->session->set_flashdata($data);
				redirect('page/video');
			}else{
				$data['error'] = 'Updated Un-Successfully!';
				$this->session->set_flashdata($data);
				redirect('page/video');
			}
		}
	}

	//========== Slider Image Delete ============
	public function video_delete($id=null)
	{
		if($this->Page_model->delete_video($id)){

			$data['success'] = 'Delete Successfully';
			$this->session->set_flashData($data);
			redirect('page/video');
		}else{
			$data['error'] = 'Video Not Deleted. Try Again!';
			$this->session->set_flashData($data);
			redirect('page/video');
		}
	}
	
}
<?php 

Class Brand extends CI_Controller{


	public function __construct()
	{
		parent::__construct();

		//check user login or not
		if(!$this->Admin_model->is_admin_loged_in() ){
			redirect('admin/login');
		}
	}

	public function index()
	{	
		$data['title'] = 'Brand';
		$data['page_path'] = 'admin/brand/brand_page';
		$data['brands'] = $this->Brand_model->get_all_brand_info();
		$this->load->view('admin/master', $data);
	}

	/*============ Brand data Store ======*/

	public function store()
	{
		$this->form_validation-> set_rules('title', 'Brand Title', 'trim|required');
			
		if($this->form_validation->run() == FALSE){
			echo 0;
		}else{

			if($this->Brand_model->insert_brand_info()){
				$result = $this->Brand_model->get_all_brand_info();

				echo json_encode($result);
			}else{
				echo 0;
			}
		}
	}

	/*============ Brand data Edit ======*/

	public function edit($id = null)
	{	
		$data['brand_info'] = $this->Brand_model->edit_brand($id);
		$this->load->view('admin/brand/brand_edit_page', $data);
	}


	/*============ Brand data Store ======*/

	public function update()
	{
		$this->form_validation->set_rules('title', 'Brand Title', 'trim|required');
			
		if($this->form_validation->run() == FALSE){
			echo 0;
		}else{

			if($this->Brand_model->update_brand_info()){
				$data['success']='Brand information updated Successfuly!';
				$this->session->set_flashdata($data);
				redirect('brand');
			}else{
				echo 3;
			}
		}
	}
}
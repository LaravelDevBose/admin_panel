<?php 

Class Category extends CI_Controller{


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
		
		$data['title'] = 'Category';
		$data['page_path'] = 'admin/category/category_page';
		$data['categories'] = $this->Category_model->get_all_category_info();
		$this->load->view('admin/master', $data);
	}

	/*============ Category data Store ======*/

	public function store()
	{
		$this->form_validation-> set_rules('title', 'Category Title', 'trim|required');
			
		if($this->form_validation->run() == FALSE){
			echo 0;
		}else{

			if($this->Category_model->insert_category_info()){
				$result = $this->Category_model->get_all_category_info();

				echo json_encode($result);
			}else{
				echo 0;
			}
		}
	}

	/*============ Category data Edit ======*/

	public function edit($id = null)
	{	
		$data['cat_info'] = $this->Category_model->edit_category($id);
		$this->load->view('admin/category/category_edit_page', $data);
	}


	/*============ Brand data Store ======*/

	public function update()
	{
		$this->form_validation->set_rules('title', 'Category Title', 'trim|required');
			
		if($this->form_validation->run() == FALSE){
			echo 0;
		}else{

			if($this->Category_model->update_category_info()){
				$data['success']='Category information updated Successfuly!';
				$this->session->set_flashdata($data);
				redirect('category');
			}else{
				echo 3;
			}
		}
	}
}
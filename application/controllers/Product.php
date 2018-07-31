<?php 

Class Product extends CI_Controller{

	public function __construct()
	{
		parent::__construct();

		//check user login or not
		if(!$this->Admin_model->is_admin_loged_in() ){
			redirect('admin/login');
		}
	}

	/* ----- -- view All Products ----*/
	public function index()
	{
		$data['title'] = 'Product';
		$data['page_path'] = 'admin/product/product_page';
		$data['products'] = $this->Product_model->get_all_product_info();
		$this->load->view('admin/master', $data);
	}

	/* ----- -- Product Insert Form ----*/
	public function insert()
	{	
		$data['title'] = 'Product Insert';
		$data['page_path'] = 'admin/product/product_insert_page';
		$data['brands'] = $this->Brand_model->get_all_brand_info();
		$data['categories'] = $this->Category_model->get_all_category_info();
		$this->load->view('admin/master', $data);
	}

	/*============ Product data Store ======*/

	public function store()
	{
		$this->form_validation->set_rules('product_id', 'Product Id', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('product_name', 'Product Name', 'trim|required');
		// $this->form_validation->set_rules('brand_id', 'Brand Name', 'trim|required');
		$this->form_validation->set_rules('cat_id', 'Category Name', 'trim|required');
		$this->form_validation->set_rules('price', 'Product Price', 'trim|required');
		// $this->form_validation->set_rules('overview', 'Overview', 'trim|required');
		$this->form_validation->set_rules('status', 'Product Status', 'trim|required');
		$this->form_validation->set_rules('details', 'Product Details', 'trim|required');
			
		if($this->form_validation->run() == FALSE){
			
			$data['title'] = 'Product Insert';
			$data['page_path'] = 'admin/product/product_insert_page';
			$data['brands'] = $this->Brand_model->get_all_brand_info();
			$data['categories'] = $this->Category_model->get_all_category_info();
			$this->load->view('admin/master', $data);
		}else{

			if($this->Product_model->insert_product_info()){


				$data['success'] = 'Your Product Stored Successfully.';
				$this->session->set_flashdata($data);
				redirect('product/insert');
			}else{
				$data['title'] = 'Product Insert';
				$data['page_path'] = 'admin/product/product_insert_page';
				$data['brands'] = $this->Brand_model->get_all_brand_info();
				$data['categories'] = $this->Category_model->get_all_category_info();
				$this->load->view('admin/master', $data);
			}
		}
	}


	/* ----- -- Product Edit Form ----*/
	public function edit($id = null)
	{	
		$data['title'] = 'Product Edit';
		$data['page_path'] = 'admin/product/product_edit_page';
		$data['brands'] = $this->Brand_model->get_all_brand_info();
		$data['categories'] = $this->Category_model->get_all_category_info();
		$data['product'] = $this->Product_model->get_product_info($id);
		$this->load->view('admin/master', $data);
	}


	/*============ Product data Update ======*/

	public function update($id = null)
	{
		$this->form_validation->set_rules('product_id', 'Product Id', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('product_name', 'Product Name', 'trim|required');
		// $this->form_validation->set_rules('brand_id', 'Brand Name', 'trim|required');
		$this->form_validation->set_rules('cat_id', 'Category Name', 'trim|required');
		$this->form_validation->set_rules('price', 'Product Price', 'trim|required');
		// $this->form_validation->set_rules('overview', 'Overview', 'trim|required');
		$this->form_validation->set_rules('status', 'Product Status', 'trim|required');
		$this->form_validation->set_rules('details', 'Product Details', 'trim|required');
			
		if($this->form_validation->run() == FALSE){
			
			$data['title'] = 'Product Edit';
			$data['page_path'] = 'admin/product/product_edit_page';
			$data['brands'] = $this->Brand_model->get_all_brand_info();
			$data['categories'] = $this->Category_model->get_all_category_info();
			$data['product'] = $this->Product_model->get_product_info($id);
			$this->load->view('admin/master', $data);
		}else{

			if($this->Product_model->updated_product_info($id)){
				$data['success'] = 'Your Product Updated Successfully.';
				$this->session->set_flashdata($data);
				redirect('products');
			}else{
				$data['title'] = 'Product Edit';
				$data['page_path'] = 'admin/product/product_edit_page';
				$data['brands'] = $this->Brand_model->get_all_brand_info();
				$data['categories'] = $this->Category_model->get_all_category_info();
				$data['product'] = $this->Product_model->get_product_info($id);
				$this->load->view('admin/master', $data);
			}
		}
	}

	public function delete($id = null)
	{
		
		if($this->Product_model->product_delete($id)){
			$data['success'] = 'Your Product Delete Successfully.';
			$this->session->set_flashdata($data);
			redirect('products');
		}else{
			$data['error'] = 'Your Product Not Delete Successfully.';
			$this->session->set_flashdata($data);
			redirect('products');
		}
	}

	/* ------------ Product Image Delete -------------*/

	public function image_delete($id=null, $product_id = null)
	{	
		if($this->Product_model->product_image_delete($id)){

			$data['success'] = 'Your Product Image Delete Successfully.';
			$this->session->set_flashdata($data);
			redirect('product/edit/'.$product_id);

		}else{
			$data['error'] = 'Your Product Image Not Delete Successfully.';
			$this->session->set_flashdata($data);
			redirect('product/edit/'.$product_id);
		}
		
	}
}
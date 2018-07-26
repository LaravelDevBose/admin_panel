<?php 

Class Dashboard extends CI_Controller{

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
		$data['title'] = 'Dashboard';
		$data['page_path'] = 'admin/dashboard/home';
		$this->load->view('admin/master', $data);
	}
}
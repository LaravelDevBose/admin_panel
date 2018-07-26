<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Sub_admin extends CI_Controller{

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
		if (!$this->Admin_model->is_admin_loged_in()) 
		{
			redirect('admin/login');
		}else{
			redirect('dashboard');
		}	
	}

	/*========== Show All Admin ==========*/
	public function admin_page()
	{	
		$data['title']='Show All Admin';
		$data['page_path'] = 'admin/sub_admin/admin_page';
		$data['admins'] = $this->Admin_model->fatch_all_data();
		$this->load->view('admin/master', $data);
	}


	/*========== Create Admin Page ==========*/
	public function create_admin_page()
	{	
		$data['title']='Create Admin';
		$data['page_path'] = 'admin/sub_admin/create_admin';
		$this->load->view('admin/master', $data);
	}


	/*============ Admin Information Store  ======*/

	public function store_admin()
	{

		$this->form_validation->set_rules('name', 'Name','trim|required');
		$this->form_validation->set_rules('username', 'Username','trim|required|is_unique[admins.username]');
		$this->form_validation->set_rules('email', 'Email','trim|required|valid_email|is_unique[admins.email]');
		$this->form_validation->set_rules('phone_num', 'Phone Number','trim|required');
		// $this->form_validation->set_rules('admin_type', 'Admin Type','trim|required');
		$this->form_validation->set_rules('password', 'Password','trim|required|min_length[6]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password','trim|required|min_length[6]|matches[password]');

		if($this->form_validation->run() == FALSE){
			$data['title']='Create Admin';
			$data['page_path'] = 'admin/sub_admin/create_admin';
			$this->load->view('admin/master', $data);
		}else{
			
			if(!isset($_FILES['image']) || $_FILES['image']['error'] == UPLOAD_ERR_NO_FILE){
				$image_path = null;
				if($this->Admin_model->insert_admin_data($image_path)){
					$data['success'] = 'Admin Create Successfully!';
					$this->session->set_flashdata($data);
					redirect('admin_page');
				}else{
					$data['error'] = 'Admin Not Create Successfully. Try Again!';
					$this->session->set_flashdata($data);
					redirect('admin/create');
				}

			}else{
				if($image_path = $this->image_upload() ){
						$this->image_resize($image_path);

					if($this->Admin_model->insert_admin_data($image_path)){
						$data['success'] = 'Admin Create Successfully!';
						$this->session->set_flashdata($data);
						redirect('admin_page');
					}else{
						$data['error'] = 'Admin Not Create Successfully. Try Again!';
						$this->session->set_flashdata($data);
						redirect('admin/create');
					}
					
				}else{
					$data['error']="Image Upload Failed!";
					$this->session->set_flashdata($data);
					redirect('admin/create');
				}
			}
			
		}
	}


	/*========== Edit Admin Page ==========*/
	public function edit_admin_page($id = null)
	{	
		$data['title']='Create Admin';
		$data['page_path'] = 'admin/sub_admin/edit_admin';
		$data['admin'] = $this->Admin_model->get_singel_admin_data($id);

		$this->load->view('admin/master', $data);
	}

	/*======== Update Admin Info==========*/

	public function update_admin($id=null)
	{	

		$this->form_validation->set_rules('name', 'Name','trim|required');
		$this->form_validation->set_rules('username', 'Username','trim|required');
		$this->form_validation->set_rules('email', 'Email','trim|required|valid_email');
		$this->form_validation->set_rules('phone_num', 'Phone Number','trim|required');

		$this->form_validation->set_rules('old_password', 'Old Password','trim|required|min_length[6]');
		$this->form_validation->set_rules('password', 'Password','trim|min_length[6]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password','trim|min_length[6]|matches[password]');

		if($this->form_validation->run() == FALSE){
			$data['title']='Create Admin';
			$data['page_path'] = 'admin/sub_admin/edit_admin';
			$data['admin'] = $this->Admin_model->get_singel_admin_data($id);

			$this->load->view('admin/master', $data);
		}else{
			if(!isset($_FILES['image']) || $_FILES['image']['error'] == UPLOAD_ERR_NO_FILE){
					$res = $this->Admin_model->edit_admin_data_update($id);

				if($res == 2){
					$data['success'] = 'Admin Updated Successfully!';
					$this->session->set_flashdata($data);
					redirect('admin_page');
				}elseif($res == 1){
					$data['error'] = 'Change Your Data then Try Again!';
					$this->session->set_flashdata($data);
					redirect('admin/edit/'.$id);
				}
				elseif($res == 4){
					$data['error'] = 'Admin Old Password Not Match. Enter Correct One!';
					$this->session->set_flashdata($data);
					redirect('admin/edit/'.$id);
				}
				else{
					$data['error'] = 'Admin Not Updated Successfully. Try Again!';
					$this->session->set_flashdata($data);
					redirect('admin/edit/'.$id);
				}

			}else{
				if($image_path = $this->image_upload() ){
						$this->image_resize($image_path);
						$res = $this->Admin_model->edit_admin_data_update_with_image($image_path, $id);
					if($res == 2){
						$data['success'] = 'Admin Updated Successfully!';
						$this->session->set_flashdata($data);
						redirect('admin_page');
					}elseif($res == 1){
						$data['error'] = 'Change Your Data then Try Again!';
						$this->session->set_flashdata($data);
						redirect('admin/edit/'.$id);
					}
					elseif($res == 4){
						$data['error'] = 'Admin Old Password Not Match. Enter Correct One!';
						$this->session->set_flashdata($data);
						redirect('admin/edit/'.$id);
					}
					else{
						$data['error'] = 'Admin Not Updated Successfully. Try Again!';
						$this->session->set_flashdata($data);
						redirect('admin/edit/'.$id);
					}
					
				}else{
					$data['error']="Image Upload Failed!";
					$this->session->set_flashdata($data);
					redirect('admin/edit/'.$id);
				}
			}
		}
	}

	/*============== Admin Delete===========*/
	public function delete_admin($id = null)
	{
		if($this->Admin_model->admin_data_delete($id)){
			$data['success'] = 'Admin Delete Successfully!';
			$this->session->set_flashdata($data);
			redirect('admin_page');
		}else{
			$data['error'] = 'Admin Not Delete Successfully!';
			$this->session->set_flashdata($data);
			redirect('admin_page');
		}
	}

	/*========== Admin Old Password Change ==========*/
	public function old_password_check()
	{
		if($this->Admin_model->password_check()){
			echo 1;
		}else{
			echo 0;
		}
	}


	/*====================Image Upload In Folder=====================*/
	/*====================Image Upload In Folder=====================*/
	public function image_upload(){
		if($this->Admin_model->is_admin_loged_in() ){
			$type = explode('.', $_FILES['image']['name']);
			$type = $type[count($type)-1];
			$file_name= uniqid(rand()).'.'.$type;

			if( in_array($type, array('jpg', 'png', 'jpeg', 'gif', 'JPEG', 'PNG', 'JPEG', 'GIF' )) ){

					if( is_uploaded_file( $_FILES['image']['tmp_name'] ) ){
						$dist = './libs/upload_pic/admin_image/'.$file_name;
					move_uploaded_file( $_FILES['image']['tmp_name'], $dist);
					return $dist;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

	// =============== Resize Uploded Image ==================
	public function image_resize($sourse){

		 /* First size */
		 $configSize1['image_library']   = 'gd2';
		 $configSize1['source_image'] 	 = $sourse;
		 $configSize1['create_thumb']    = FALSE;
		 $configSize1['maintain_ratio']  = FALSE;
		 $configSize1['width']           = 60;
		 $config['quality']   			 = '100';
		 $configSize1['height']          = 60;
		 $configSize1['new_image'] 		 = './libs/upload_pic/admin_image/';

		 $this->image_lib->initialize($configSize1);
		 $this->image_lib->resize();
		 $this->image_lib->clear();		 
	}
}
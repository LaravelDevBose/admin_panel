<?php 

Class Ads extends CI_Controller{


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

	public function ads_page()
	{
		$data['title'] = 'Ads Images';
		$data['page_path'] = 'admin/ads/ads_page';
		$data['ads_images'] = $this->Ads_model->get_all_ads_data();
		$this->load->view('admin/master', $data);
	}


	//========== Ads Create page ==========
	public function ads_create_page()
	{
		$data['title'] = 'Ads Images';
		$data['page_path'] = 'admin/ads/ads_create_page';
		$this->load->view('admin/master', $data);
	}

	//=========== check Ads position ========
	public function check_position()
	{
		$result = $this->db->get_where('ads', ['position'=>$this->input->post('position')])->row();

		if($result): echo 0; else: echo 1; endif;
	}


	//======== Store Ads Data In database=======
	public function store_ads_data()
	{
		$this->form_validation-> set_rules('a_title', 'Ads Title', 'trim|required');
		// $this->form_validation-> set_rules('position', 'Ads Position', 'trim|required');
		// $this->form_validation-> set_rules('image', 'Brand Title', 'trim|required');

		if($this->form_validation->run() == FALSE){
			$data['title'] = 'Ads Images';
			$data['page_path'] = 'admin/ads/ads_create_page';
			$this->load->view('admin/master', $data);
		}else{

			if(!isset($_FILES['image']) || $_FILES['image']['error'] == UPLOAD_ERR_NO_FILE){
				$data['error'] = 'Image is required. Select a Image ';
				$this->session->set_flashData($data);
				redirect('ads/create');
			}else{
				if($image_path = $this->image_upload() ){
						
					if($this->Ads_model->insert_ads_data($image_path)){
						$data['success'] = 'Ads Create Successfully!';
						$this->session->set_flashdata($data);
						redirect('ads/create');
					}else{
						$data['error'] = 'Ads Not Create Successfully. Try Again!';
						$this->session->set_flashdata($data);
						redirect('ads/create');
					}
					
				}else{
					$data['error']="Image Upload Failed!";
					$this->session->set_flashdata($data);
					redirect('ads/create');
				}
			}
		}
	}

	//======== Ads Data Delete ============
	public function delete_ads_data($id=null)
	{
		if($this->Ads_model->delete_ads_data($id)):
			$data['success'] = 'Ads Details Delete Successfully';
			$this->session->set_flashdata($data);
			redirect('ads');
		else:
			$data['error'] = 'Ads Details Not Delete Successfully';
			$this->session->set_flashdata($data);
			redirect('ads');
		endif;
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
						$dist = 'libs/upload_pic/ads_image/'.$file_name;
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

	
}
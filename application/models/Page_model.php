<?php

Class Page_model extends CI_Model{


	// ==== insert about us informaion

	public function insert_or_update_about_us_info()
	{
		$attr = array(
			'field_name' => 'about_us',
			'value' => $this->input->post('about_us')
		);


		$result = $this->get_about_us_info();
		if($result){
			$this->db->where('field_name', 'about_us');
			$this->db->update('template', $attr);

			if($this->db->affected_rows()){
				return TRUE;
			}else{
				return FALSE;
			}
		}

		$insert = $this->db->insert('template', $attr);

		if($insert): return TRUE; else: return FALSE; endif;
	}


	//======= get about Us Information

	public function get_about_us_info()
	{
		$result = $this->db->where('field_name', 'about_us')->get('template')->row();

		if($result): return $result;  else: return FALSE; endif;
	}


	// ==== insert about us informaion

	public function insert_or_update_service_info()
	{
		$attr = array(
			'field_name' => 'our_service',
			'value' => $this->input->post('our_service')
		);


		$result = $this->get_service_info();
		if($result){
			$this->db->where('field_name', 'our_service');
			$this->db->update('template', $attr);

			if($this->db->affected_rows()){
				return TRUE;
			}else{
				return FALSE;
			}
		}

		$insert = $this->db->insert('template', $attr);

		if($insert): return TRUE; else: return FALSE; endif;
	}


	//======= get about Us Information

	public function get_service_info()
	{
		$result = $this->db->where('field_name', 'our_service')->get('template')->row();

		if($result): return $result;  else: return FALSE; endif;
	}


	// ==== insert and Update adress informaion
	public function insert_or_update_address_info()
	{
		$attr = array(
			'field_name' => 'address',
			'value' => $this->input->post('address')
		);


		$result = $this->get_address_info();
		if($result){
			$this->db->where('field_name', 'address');
			$this->db->update('template', $attr);

			if($this->db->affected_rows()){
				return TRUE;
			}else{
				return FALSE;
			}
		}

		$insert = $this->db->insert('template', $attr);

		if($insert): return TRUE; else: return FALSE; endif;
	}


	//======= get address Information

	public function get_address_info()
	{
		$result = $this->db->where('field_name', 'address')->get('template')->row();

		if($result): return $result;  else: return FALSE; endif;
	}


	// ==== insert and Update phone informaion
	public function insert_or_update_phone_info()
	{
		$attr = array(
			'field_name' => 'phone',
			'value' => $this->input->post('phone')
		);


		$result = $this->get_phone_info();
		if($result){
			$this->db->where('field_name', 'phone');
			$this->db->update('template', $attr);

			if($this->db->affected_rows()){
				return TRUE;
			}else{
				return FALSE;
			}
		}

		$insert = $this->db->insert('template', $attr);

		if($insert): return TRUE; else: return FALSE; endif;
	}


	//======= get phone Information

	public function get_phone_info()
	{
		$result = $this->db->where('field_name', 'phone')->get('template')->row();

		if($result): return $result;  else: return FALSE; endif;
	}


	// ==== insert and Update Email informaion
	public function insert_or_update_email_info()
	{
		$attr = array(
			'field_name' => 'email',
			'value' => $this->input->post('email')
		);


		$result = $this->get_email_info();
		if($result){
			$this->db->where('field_name', 'email');
			$this->db->update('template', $attr);

			if($this->db->affected_rows()){
				return TRUE;
			}else{
				return FALSE;
			}
		}

		$insert = $this->db->insert('template', $attr);

		if($insert): return TRUE; else: return FALSE; endif;
	}


	//======= get address Information

	public function get_email_info()
	{
		$result = $this->db->where('field_name', 'email')->get('template')->row();

		if($result): return $result;  else: return FALSE; endif;
	}



	//======= Get all gallery images
	public function get_all_gallery_images()
	{
		$result = $this->db->order_by('id', 'desc')->get('gallerys')->result();

		if($result): return $result; else: return FALSE; endif;
	}

	//======= Get all gallery images
	public function get_images_for_right_sidebar()
	{
		$result = $this->db->order_by('id', 'desc')->limit(6)->get('gallerys')->result();

		if($result): return $result; else: return FALSE; endif;
	}



	//======== Store Slider Image Information
	public function gallery_image_insert()
	{
		$imageName = $_FILES['image']['name'];	
		$tmp_name = $_FILES['image']['tmp_name'];	

		$file_path = $this->image_upload($imageName, $tmp_name);
		$this->image_resize($file_path);
		$attr = [
			'g_title' => $this->input->post('g_title'),
			'image' =>$file_path
		];
		$insert = $this->db->insert('gallerys', $attr);

		if($insert): return TRUE; else: return FALSE; endif; 
	}

	//========= Slider Inage Delete ==========
	public function delete_gallery_image($id=null)
	{
		
		$image = $this->db->where('id', $id)->get('gallerys')->row();
		$this->db->where('id', $id);
		$this->db->delete('gallerys');

		if($this->db->affected_rows()){

			if(file_exists($image->image)){
				unlink($image->image);
			}
			return TRUE;
		}else{
			return FALSE;
		}

	}

	/*========== get all video information=-=============*/
	public function get_all_video()
	{
		$result = $this->db->order_by('id', 'desc')->get('videos')->result();

		if($result): return $result; else: return FALSE; endif;
	}

	public function insert_video_path()
	{
		$attr = [
			'v_type' => 'y',
			'video_link' => $this->input->post('video_link')
		];

		$insert = $this->db->insert('videos', $attr);

		if($insert): return TRUE; else: return FALSE; endif;
	}

	//========= Delete Video url ============
	public function delete_video($id = null)
	{
		$this->db->where('id', $id);
		$this->db->delete('videos');

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	//======== get limit video ==========
	public function get_limt_video($limit)
	{
		$result = $this->db->order_by('id', 'desc')->limit($limit)->get('videos')->result();

		if($result): return $result; else: return FALSE; endif;
	}

	/*==========Image Upload In Folder===========*/
	public function image_upload($imageName = null, $tmp_name){
		$type = explode('.', $imageName);
		$type = $type[count($type)-1];
		$file_name= uniqid(rand()).'.'.$type;

		if( in_array($type, array('jpg', 'png', 'jpeg', 'gif', 'JPG', 'PNG', 'JPEG', 'GIF' )) ){

				if( is_uploaded_file( $tmp_name ) ){
					$dist_path = 'libs/upload_pic/gallery_image/'.$file_name ;
				move_uploaded_file( $tmp_name, $dist_path);
				return $dist_path;
				
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
		 $configSize1['width']           = 1200;
		 $config['quality']   			 = '100';
		 $configSize1['height']          = 500;
		 $configSize1['new_image'] 		 = 'libs/upload_pic/gallery_image/';

		 $this->image_lib->initialize($configSize1);
		 $this->image_lib->resize();
		 $this->image_lib->clear();		 
	}


}
<?php

Class Template_model extends CI_Model{


	public function get_wellcome_note()
	{
		$result = $this->db->where('field_name', 'wellcome_note')->get('template')->row();

		if($result): return $result;  else: return FALSE; endif;
	}


	public function insert_or_update_wellcome_note_info()
	{
		$attr = array(
			'field_name' => 'wellcome_note',
			'value' => $this->input->post('wellcome_note')
		);


		$result = $this->get_wellcome_note();
		if($result){
			$this->db->where('field_name', 'wellcome_note');
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


	/*======== get Md name data=============*/
	public function get_md_name_data() 
	{
		$result = $this->db->where('field_name', 'md_name')->get('template')->row();

		if($result): return $result;  else: return FALSE; endif;
	}

	/*======== get Md Designation data=============*/
	public function get_md_desig_data()
	{
		$result = $this->db->where('field_name', 'md_desig')->get('template')->row();

		if($result): return $result;  else: return FALSE; endif;
	}

	/*======== get Md Image data=============*/
	public function get_md_image_data()
	{
		$result = $this->db->where('field_name', 'md_image')->get('template')->row();

		if($result): return $result;  else: return FALSE; endif;
	}

	/*======== get Md Message data=============*/
	public function get_md_message_data()
	{
		$result = $this->db->where('field_name', 'md_message')->get('template')->row();

		if($result): return $result;  else: return FALSE; endif;
	}

	/*======== udpate or insert Md Information==============*/
	public function insert_or_update_md_info($file_name = null)
	{	
		
		$attr1 = array(
			'field_name' => 'md_name',
			'value' => $this->input->post('md_name')
		);

		$attr2 = array(
			'field_name' => 'md_desig',
			'value' => $this->input->post('md_desig')
		);

		$attr3 = array(
			'field_name' => 'md_image',
			'value' => $file_name
		);
		$attr4 = array(
			'field_name' => 'md_message',
			'value' => $this->input->post('md_message')
		);


		$result1 = $this->get_md_name_data();
		$result2 = $this->get_md_desig_data();
		$result3 = $this->get_md_image_data();
		$result4 = $this->get_md_message_data();
		if($result1){
			$this->db->where('field_name', 'md_name');
			$this->db->update('template', $attr1);
		}else{

			$this->db->insert('template', $attr1);
		}

		if($result2){
			$this->db->where('field_name', 'md_desig');
			$this->db->update('template', $attr2);
		}else{
			$this->db->insert('template', $attr2);
		}	
		

		if($result3){
			$this->db->where('field_name', 'md_image');
			$this->db->update('template', $attr3);

			if(file_exists($result3->value)){
				unlink($result3->value);
			}
		}else{
			$this->db->insert('template', $attr3);
		}
		


		if($result4){
			$this->db->where('field_name', 'md_message');
			$this->db->update('template', $attr4);
		}else{
			$this->db->insert('template', $attr4);
		}

		

		 return TRUE; 
	}


	/*======== get Md Message data=============*/
	public function get_logo()
	{
		$result = $this->db->where('field_name', 'logo')->get('template')->row();

		if($result): return $result;  else: return FALSE; endif;
	}

	/*========== logo image insert or update==========*/
	public function logo_insert_update()
	{
		$imageName = $_FILES['logo']['name'];	
		$tmp_name = $_FILES['logo']['tmp_name'];	

		$file_path = $this->image_upload($imageName, $tmp_name);
		$this->image_resize($file_path);


		$attr = array(
			'field_name' => 'logo',
			'value' => $file_path
		);

		$result = $this->get_logo();

		if($result){
			$this->db->where('field_name', 'logo');
			$this->db->update('template', $attr);

			if($this->db->affected_rows()){

				if(file_exists($result->value)){
					unlink($result->value);
				}
				return TRUE;
			}else{
				return FALSE;
			}
		}

		$insert = $this->db->insert('template', $attr);

		if($insert): return TRUE; else: return FALSE; endif;


	}

	//========= Logo image Delete ==========
	public function delete_logo($id=null)
	{
		
		$image = $this->get_logo();
		
		$this->db->where('id', $id);
		$this->db->delete('template');

		if($this->db->affected_rows()){

			if(file_exists($image->value)){
				unlink($image->value);
			}
			return TRUE;
		}else{
			return FALSE;
		}

	}



	/*==========Image Upload In Folder===========*/
	public function image_upload($imageName = null, $tmp_name){
		$type = explode('.', $imageName);
		$type = $type[count($type)-1];
		$file_name= uniqid(rand()).'.'.$type;

		if( in_array($type, array('jpg', 'png', 'jpeg', 'gif', 'JPG', 'PNG', 'JPEG', 'GIF' )) ){

				if( is_uploaded_file( $tmp_name ) ){
					$dist_path = 'libs/upload_pic/logo_image/'.$file_name ;
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
		 $configSize1['width']           = 120;
		 $config['quality']   			 = '100';
		 $configSize1['height']          = 80;
		 $configSize1['new_image'] 		 = 'libs/upload_pic/logo_image/';

		 $this->image_lib->initialize($configSize1);
		 $this->image_lib->resize();
		 $this->image_lib->clear();		 
	}
}
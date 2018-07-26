<?php

Class Admin_model extends CI_Model{



	/*===================Admin Login Check======================*/
	/*===================Admin Login Check======================*/
	public function is_admin_loged_in()
	{
		return $this->session->userdata('admin_id') != FALSE;
	}


	/*===========Admin Login Name & Pass Check============*/
	public function admin_login_data_check()
	{
		$name 	= $this->input->post('username');
		$pass 	= md5($this->input->post('password'));

		$attr = array(
			'username' => $name, 
			'password' => $pass, 
		);

		$res = $this->db->get_where('admins', $attr);
		if($res->num_rows() == 1)
		{
			$attr = array(
				'admin_id' => $res->row(0)->id, 
				'admin_name' => $res->row(0)->name
			);
			$this->session->set_userdata($attr);
			return TRUE;
		}
		else{
			return FALSE;
		}
	}


	/*================Create Admin Data Insert========================*/
	public function insert_admin_data($filename)
	{	

		$pass = md5($this->input->post('password'));
		$attr = array(
			'name' 	=> $this->input->post('name'), 
			'username' 	=> $this->input->post('username'), 
			'email' 		=> $this->input->post('email'), 
			'phone_num' 		=> $this->input->post('phone_num'), 
			'image' 		=> $filename,
			'password' 	=> $pass, 
			'admin_type' 		=> 'a',
		);
		$insert = $this->db->insert('admins', $attr);
		if($insert)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}





	/*=============View Admin List==================*/
	/*=============View Admin List==================*/
	public function fatch_all_data()
	{
		$qu = $this->db->order_by('id','desc')->where('admin_type', 'a')->or_where('admin_type', 's')->get('admins');
		$res = $qu->result();
		return $res;
	}



	/*=============== Admin EDIT======================*/
	/*=============== Admin EDIT======================*/
	public function get_singel_admin_data($id = null)
	{

		$attr = array('id' =>  $id);
		
		$qu = $this->db->get_where('admins', $attr)->row();
		
		if ( $qu) {
			return $qu;
		}else {
			return FALSE;
		}
	}




	/*================= Admin UPDATE ============================*/
	/*================= Admin UPDATE ============================*/
	public function edit_admin_data_update($id = null)
	{
		$old_password = md5($this->input->post('old_password'));

		$attr = ['id'=>$id,'password'=>$old_password];

		$query1 = $this->db->get_where('admins', $attr);
		$password = $this->input->post('password');
		
		if($query1->num_rows() == 1){

			if(isset($password) && count($password) >= 6):
				#take all input data form post method
				$attr = array(
					'name' 	=> $this->input->post('name'), 
					'username' 	=> $this->input->post('username'), 
					'email' 		=> $this->input->post('email'), 
					'phone_num' 		=> $this->input->post('phone_num'), 
					'password' 	=>   md5($password), 
				);
			else:
				#take all input data form post method
				$attr = array(
					'name' 	=> $this->input->post('name'), 
					'username' 	=> $this->input->post('username'), 
					'email' 		=> $this->input->post('email'), 
					'phone_num' 		=> $this->input->post('phone_num'), 
				);
			endif;

			// var_dump($attr); exit();
			$this->db->where('id', $id);
			$query = $this->db->update('admins', $attr);

			// var_dump($query); exit();
			if($this->db->affected_rows() ){
				return 2;
			}elseif($query){
				return 1;
			}
			else{
				return 3;
			}
		}else{

			return 4;
		}

	}



	/*=================== Admin UPDATE WITH IMAGE================*/
	/*=================== Admin UPDATE WITH IMAGE================*/
	public function edit_admin_data_update_with_image($filename, $id = null)
	{
		$old_password = md5($this->input->post('old_password'));

		$attr = ['id'=>$id,'password'=>$old_password];

		$query1 = $this->db->get_where('admins', $attr);
		$password = $this->input->post('password');
		
		if($query1->num_rows() == 1){

			if(isset($password)):
				#take all input data form post method
				$attr = array(
					'name' 	=> $this->input->post('name'), 
					'username' 	=> $this->input->post('username'), 
					'email' 		=> $this->input->post('email'), 
					'phone_num' 		=> $this->input->post('phone_num'), 
					'password' 	=>   md5($password),
					'image' =>$filename, 
				);
			else:
				#take all input data form post method
				$attr = array(
					'name' 	=> $this->input->post('name'), 
					'username' 	=> $this->input->post('username'), 
					'email' 		=> $this->input->post('email'), 
					'phone_num' 		=> $this->input->post('phone_num'), 
					'image' =>$filename,
				);
			endif;

			$this->db->where('id', $id);
			$query = $this->db->update('admins', $attr);

			if($this->db->affected_rows() ){
				return 2;
			}elseif($query){
				return 1;
			}
			else{
				return 3;
			}
		}else{

			return 4;
		}

	}

	/*================== Admin Old Password Check =====================*/

	public function password_check()
	{
		$old_password = md5($this->input->post('old_password'));

		$id = $this->input->post('id');
		$attr = ['id'=>$id,'password'=>$old_password];

		$query1 = $this->db->get_where('admins', $attr);
		if($query1->num_rows() == 1){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	/*================== Admin DELETE=====================*/
	public function admin_data_delete($id = null)
	{
		$attr = array(
			'admin_type' 	=> 	'd', 
		);
		
		$this->db->where('id', $id);
		$qu = $this->db->update('admins', $attr);
		
		if ( $this->db->affected_rows()) {
			return TRUE;
		}else {
			return FALSE;
		}
	}


	/*================= change_password  ====================*/
	/*================= change_password  ======================*/
	public function change_password($id = null)
	{
		$pass = md5($this->input->post('password'));
		$attr = array(
			'admin_password' 	=> 		$pass
		);
		
		$this->db->where('admin_id', $id);
		$qu = $this->db->update('create_admin', $attr);
		
		if ( $this->db->affected_rows()) {
			return TRUE;
		}else {
			return FALSE;
		}
	}

}
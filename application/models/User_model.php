<?php
Class User_model extends CI_Model{

	/*========== User Login data check ========*/
	public function user_login_data_check()
	{
		$name 	= $this->input->post('username');
		$pass 	= md5($this->input->post('password'));

		$attr = array(
			'username' => $name, 
			'password' => $pass, 
		);

		$res = $this->db->get_where('users', $attr);
		if($res->num_rows() == 1)
		{
			$attr = array(
				'user_id' => $res->row(0)->id, 
				'user_name' => $res->row(0)->name
			);
			$this->session->set_userdata($attr);
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	/*======== Register User Data=============*/
	public function register_user_data()
	{
		$pass = md5($this->input->post('password'));
		$attr = array(
			'name' 		=> $this->input->post('name'), 
			'username' 	=> $this->input->post('username'), 
			'email' 	=> $this->input->post('email'), 
			'phone_num' => $this->input->post('phone_num'), 
			'password' 	=> $pass, 
			'user_type' => 'a',
		);
		$insert = $this->db->insert('users', $attr);
		$user_id = $this->db->insert_id();
		if($insert)
		{	
			$data=[
				'user_id'  =>$user_id,
				'user_name'=>$this->input->post('name'),
			];
			$this->session->set_userdata($data);
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}
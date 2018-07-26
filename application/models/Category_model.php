<?php

Class Category_model extends CI_Model{

	public function insert_category_info()
	{
		$attr = array(
			'c_title' => $this->input->post('title')
		);

		$insert = $this->db->insert('categories', $attr);

		if($insert): return TRUE; else: return FALSE; endif;
	}

	public function get_all_category_info()
	{
		return $this->db->order_by('id','desc')->get('categories')->result();
	}

	public function edit_category($id = null)
	{
		$result = $this->db->where('id', $id)->get('categories')->row();

		if($this->db->affected_rows()): return $result; else: return FALSE; endif;
	}

	public function update_category_info()
	{	
		$id = $this->input->post('id');
		$attr = array(
			'c_title' => $this->input->post('title')
		);

		$this->db->where('id', $id);
		$query = $this->db->update('categories', $attr);

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}

	}

	//========= get singel category Info

	public function get_category_info($id= null)
	{
		$result = $this->db->get_where('categories', ['id'=>$id])->row();

		if($result){
			return $result;
		}else{
			return FALSE;
		} 
	}
			
}

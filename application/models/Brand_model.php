<?php

Class Brand_model extends CI_Model{

	public function insert_brand_info()
	{
		$attr = array(
			'b_title' => $this->input->post('title')
		);

		$insert = $this->db->insert('brands', $attr);

		if($insert): return TRUE; else: return FALSE; endif;
	}

	public function get_all_brand_info()
	{
		return $this->db->get('brands')->result();
	}

	public function edit_brand($id = null)
	{
		$result = $this->db->where('id', $id)->get('brands')->row();

		if($this->db->affected_rows()): return $result; else: return FALSE; endif;
	}

	public function update_brand_info()
	{	
		$id = $this->input->post('id');
		$attr = array(
			'b_title' => $this->input->post('title')
		);

		$this->db->where('id', $id);
		$query = $this->db->update('brands', $attr);

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}

	}
			
}

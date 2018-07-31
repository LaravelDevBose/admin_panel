<?php
Class Ads_model extends CI_Model{


	/*========= get all ads data ============*/
	public function get_all_ads_data()
	{
		return $this->db->get('ads')->result();
	}


	public function frontend_ads()
	{
		return $this->db->order_by('id', 'desc')->limit(3)->get('ads')->result();
	}
	

	/*========== Sotre Ads Data========= */
	public function insert_ads_data($image_path = null)
	{
		$attr=[
			'a_title' => $this->input->post('a_title'),
			'image_path' =>$image_path,
		];

		$insert =  $this->db->insert('ads', $attr);
		if($insert): return TRUE; else: return FALSE; endif;
	}

	/*======= ads data delete========*/
	public function delete_ads_data($id=null)
	{
		$image = $this->db->where('id', $id)->get('ads')->row();
		$this->db->where('id', $id);
		$this->db->delete('ads');

		if($this->db->affected_rows()){

			if(file_exists($image->image_path)){
				unlink($image->image_path);
			}
			return TRUE;
		}else{
			return FALSE;
		}
	}
}
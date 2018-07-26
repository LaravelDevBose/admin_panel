<?php
Class Ads_model extends CI_Model{


	/*========= get all ads data ============*/
	public function get_all_ads_data()
	{
		return $this->db->get('ads')->result();
	}

	/*========== Top Ads Data =========*/
	public function top_ads_data()
	{
		$result = $this->db->where('position >=',1)->where('position <=',4)->from('ads')->get();
		
		if($result->num_rows() >= 1):
			return $result->result();
		else:
			return FALSE;
		endif;
	}

	/*========== Middel Ads Data =========*/
	public function middel_ads_data()
	{
		$result = $this->db->where('position',5)->get('ads')->row();
		
		if($result):
			
			return $result;
		else:
			return FALSE;
		endif;
	}

	/*========== bottom Ads Data =========*/
	public function bottom_ads_data()
	{
		$result = $this->db->where('position >=',6)->where('position <=',11)->from('ads')->get();
		
		if($result->num_rows() >= 1):
			return $result->result();
		else:
			return FALSE;
		endif;
	}

	/*========== Sotre Ads Data========= */
	public function insert_ads_data($image_path = null)
	{
		$attr=[
			'a_title' => $this->input->post('a_title'),
			'position' => $this->input->post('position'),
			'discount' => $this->input->post('discount'),
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
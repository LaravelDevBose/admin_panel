<?php
Class Order_model extends CI_Model{

	/*============  Get Undeliver order list==========*/
	public function get_order_data($status = 0)
	{
		$result = $this->db->where('order_status', $status)->order_by('id', 'desc')->get('shipping')->result();

		
		if($result): return $result; else: return FALSE; endif;
	}

	/*======== Update Order Status ===========*/
	public function deliver_order($shipping_id = null)
	{
		$attr = array(
			'order_status' => '1'
		);

		$this->db->where('id', $shipping_id);
		$query = $this->db->update('shipping', $attr);

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}

	}

	/*=========== get Shiping Info=======*/
	public function get_shipping_info($shipping_id = null)
	{
		$result = $this->db->where('id', $shipping_id)->get('shipping')->row();
		if($result): return $result; else: return FALSE; endif;
	}


	/*======== get all shipping product info ===========*/
	public function get_all_order_products($shipping_id= null)
	{	
		$result = $this->db->where('shipping_id', $shipping_id)->order_by('id', 'desc')->get('orders')->result();

		if($result): return $result; else: return FALSE; endif;
	}
}
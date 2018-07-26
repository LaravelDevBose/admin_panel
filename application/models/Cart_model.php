<?php

Class Cart_model extends CI_Model{

	/*========== Store Shipping Information=========*/
	public function store_shipping_info()
	{
		
		$attr = array(
			'name' 		=> $this->input->post('name'), 
			'email' 	=> $this->input->post('email'), 
			'phone_num' => $this->input->post('phone_num'), 
			'address' 	=> $this->input->post('address'),
			'total_amount'=>$this->cart->total(),
			'total_qty'	=>count($this->cart->contents()), 
			'order_date' => date('Y-m-d h:m:s'),
		);
		$insert = $this->db->insert('shipping', $attr);
		$shipping_id = $this->db->insert_id();
		if($insert)
		{	
			return $shipping_id;
		}
		else
		{
			return FALSE;
		}
	}


	/*========== store Cart Product Info=========*/
	public function store_cart_info($shipping_id = null)
	{
		$cart_products = $this->cart->contents();
		$count =0;
		if(count($cart_products) > 0){
			foreach ($cart_products as $product) {
				
				$attr = [
					'shipping_id' 	=>$shipping_id,
					'product_id'	=>$product['id'],
					'product_name'	=>$product['name'],
					'qty'			=>$product['qty'],
					'price'			=>$product['price'],
					'sub_total'		=>$product['qty']*$product['price'],

				];
				$insert = $this->db->insert('orders', $attr);
				if($insert){
					$count++;
				}
			}

			if($count == count($cart_products)){
				$this->cart->destroy();
				return TRUE;
			}else{
				return FALSE;
			}
		}else{
			return FALSE;
		}
	}

	/*=========  Insert Into Cart============*/
	public function insert_product_into_cart()
	{
		$data=[
			'id'	=>$this->input->post('product_id'),
			'name'	=>$this->input->post('product_name'),
			'qty'	=>$this->input->post('qty'),
			'price'	=>$this->input->post('price'),
		];
		$cart = $this->cart->insert($data);
		
		if($cart): return TRUE; else: return FALSE; endif;
	}

	
}
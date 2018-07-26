<?php

Class Cart extends CI_Controller{

	/*======= Add To the Cart=======*/
	public function add_cart()
	{
		$this->form_validation->set_rules('product_id', 'Product Id', 'trim|required');
		$this->form_validation->set_rules('product_name', 'Product Name', 'trim|required');
		$this->form_validation->set_rules('qty', 'Quentity', 'trim|required');
		$this->form_validation->set_rules('price', 'Price', 'trim|required');

		if($this->form_validation->run() == FALSE){
			
			$data['page_path'] = 'frontEnd/product/singel_product_page';
			$product= $this->Product_model->get_product_by_id($id);
			$data['product'] = $product;
			$data['title']=$product->product_name;
			$data['feature_products'] = $this->Product_model->get_feature_products();
			$data['related_products'] = $this->Product_model->get_related_products($product->id, $product->brand_id, $product->cat_id, 4);
			$data['top_sale_products'] = $this->Product_model->get_top_sale_products(4);
			if(!$product){
				redirect('index');
			}
			$this->load->view('frontEnd/master', $data);
		}else{

			if($this->Cart_model->insert_product_into_cart()){

				echo '1';
				
			}else{
				echo '0';
			}
		}
		
	}

	/*===== product Remove From Cart=======*/
	public function remove_cart()
	{	
		$rowid = $this->input->post('rowid');

		$data = array(
            'rowid'   => $rowid,
            'qty'     => 0
        );
	 
		$update = $this->cart->update($data);

		if($update){
			echo '1';
		}else{
			echo "0";
		}
		
	}


	/*========= Cart Update============*/
	public function update_cart()
	{	

		$rowid = $this->input->post('rowid');
		$qty = $this->input->post('qty');

		$data = array(
            'rowid'   => $rowid,
            'qty'     => $qty
        );
	 
		$update = $this->cart->update($data);


		$cart = $this->cart->contents();
		
		if(count($cart) == 0){
			$data['error'] ='Your Cart is Empty. Add Some Product First';
			$this->session->set_flashData($data);
			redirect('index');
		}
		
		$data['cart_products'] = $cart;
		$this->load->view('frontEnd/cart/cart_update', $data);
	}


	public function cart_info()
	{
		$data=['total'=>$this->cart->total(), 'item_qty'=>count($this->cart->contents())];

		echo json_encode($data);
	}

}
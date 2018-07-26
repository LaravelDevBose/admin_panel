<?php

Class Product_model extends CI_Model{
		
		/* ======= GEt All Product Info =======*/
	public function get_all_product_info()
	{
		// return $this->db->get('products')->result();
		$this->db->select('products.*,categories.c_title, brands.b_title');
		$this->db->from('products');
		$this->db->join('categories', 'products.cat_id = categories.id');
		$this->db->join('brands', 'products.brand_id = brands.id');
		$this->db->order_by('products.id','desc');
		$query = $this->db->get();
		return $query->result();
	}

	/*========== get feature product info =============*/
	public function get_feature_products()
	{
		$this->db->select('products.*,categories.c_title, brands.b_title');
		$this->db->from('products');
		$this->db->join('categories', 'products.cat_id = categories.id');
		$this->db->join('brands', 'products.brand_id = brands.id');
		$this->db->where('products.feature',1);
		$this->db->where('products.status',1);
		$this->db->order_by('products.id','desc');
		$query = $this->db->limit(8)->get();

		return $query->result();
	}

	/*========== get feature product info =============*/
	public function get_related_products($product_id = null, $brand_id = null, $cat_id = null, $limit = 4)
	{
		$this->db->select('products.*,categories.c_title, brands.b_title');
		$this->db->from('products');
		$this->db->join('categories', 'products.cat_id = categories.id');
		$this->db->join('brands', 'products.brand_id = brands.id');
		$this->db->where('products.cat_id',$cat_id);
		$this->db->where('products.brand_id',$brand_id);
		$this->db->where('products.status',1);
		$this->db->where('products.id !=',$product_id);
		$this->db->order_by('products.id','desc');
		$query = $this->db->limit($limit)->get();

		return $query->result();
	}

	/*========== get New product info =============*/
	public function get_top_sale_products($limit = null)
	{
		$this->db->select('products.*,categories.c_title, brands.b_title');
		$this->db->from('products');
		$this->db->join('categories', 'products.cat_id = categories.id');
		$this->db->join('brands', 'products.brand_id = brands.id');
		$this->db->where('products.top_sell',1);
		$this->db->where('products.status',1);
		$this->db->order_by('products.id','desc');
		$query = $this->db->limit($limit)->get();

		return $query->result();
	}

	/*========== get all product info =============*/
	public function get_all_products()
	{
		$this->db->select('products.*,categories.c_title, brands.b_title');
		$this->db->from('products');
		$this->db->join('categories', 'products.cat_id = categories.id');
		$this->db->join('brands', 'products.brand_id = brands.id');
		$this->db->where('products.status',1);
		$this->db->order_by('products.id','desc');
		$query = $this->db->limit(16)->get();

		return $query->result();
	}

	/*============ Get product in Category wise=============*/
	public function get_categorywise_products($cat_id=null)
	{

		$this->db->select('products.*,categories.c_title, brands.b_title');
		$this->db->from('products');
		$this->db->join('categories', 'products.cat_id = categories.id');
		$this->db->join('brands', 'products.brand_id = brands.id');
		$this->db->where('products.cat_id',$cat_id);
		$this->db->where('products.status',1);
		$this->db->order_by('products.id','desc');
		$query = $this->db->get();
		return $query->result();
	}

	/*============ Get product in Category wise=============*/
	public function get_brandwise_products($brand=null)
	{

		$this->db->select('products.*,categories.c_title, brands.b_title');
		$this->db->from('products');
		$this->db->join('categories', 'products.cat_id = categories.id');
		$this->db->join('brands', 'products.brand_id = brands.id');
		$this->db->where('products.brand_id',$brand);
		$this->db->where('products.status',1);
		$this->db->order_by('products.id','desc');
		$query = $this->db->get();
		return $query->result();
	}


	/*============ get product deatils by id ==========*/
	public function get_product_by_id($id=null)

	{	$this->db->select('products.*,categories.c_title, brands.b_title');
		$this->db->from('products');
		$this->db->join('categories', 'products.cat_id = categories.id');
		$this->db->join('brands', 'products.brand_id = brands.id');
		$this->db->where('products.id',$id);
		$result = $this->db->get()->row();
		if($result): return $result; else: return FALSE; endif;
	}

	/* ======= Insert Product Info =======*/
	public function insert_product_info()
	{	
		$filesCount = count($_FILES['images']['name']);	
		
		$attr = [
			'product_id' 	=> $this->input->post('product_id'),
			'product_name' 	=> $this->input->post('product_name'),
			'brand_id' 		=> $this->input->post('brand_id'),
			'cat_id' 		=> $this->input->post('cat_id'),
			// 'quentity' 		=> $this->input->post('quentity'),
			'price' 		=> $this->input->post('price'),
			'discount' 		=> $this->input->post('discount'),
			'prv_price' 	=> $this->input->post('prv_price'),
			'top_sell' 		=> $this->input->post('top_sell'),
			'sale' 			=> $this->input->post('sale'),
			'up_comming' 	=> $this->input->post('up_comming'),
			'feature' 		=> $this->input->post('feature'),
			'overview' 		=> $this->input->post('overview'),
			'status' 		=> $this->input->post('status'),
			'details' 		=> $this->input->post('details'),
			'created_at'	=>date('Y-m-d h:m:s')
		];

		$insert = $this->db->insert('products', $attr);
		$product_id = $this->db->insert_id();

		if($insert)
		{	
			if($filesCount > 0){
				
	            for($i = 0; $i < $filesCount; $i++){
		                $_FILES['image']['name']     = $_FILES['images']['name'][$i];
		                $_FILES['image']['type']     = $_FILES['images']['type'][$i];
		                $_FILES['image']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
		                $_FILES['image']['error']     = $_FILES['images']['error'][$i];
		                $_FILES['image']['size']     = $_FILES['images']['size'][$i];
		                $file_name = $this->image_upload($_FILES['image']['name'], $_FILES['image']['tmp_name']);

		                $this->image_resize($file_name);
		                $this->insert_image_in_database($file_name, $product_id);
	               	}
	               	return TRUE;
			}else{
				return TRUE;
			}
			
		}
		else
		{
			return FALSE;
		}
	}



	/* ======= GEt Product Info where id match =======*/
	public function get_product_info($id= Null)
	{	
		
		$result = $this->db->where('id',$id)->get('products')->row();
		if($result){
			return $result;
		}else{
			return FALSE;
		}
	}


	/* ======= Update Product Info =======*/
	public function updated_product_info($id = null)
	{
		$filesCount = count($_FILES['images']['name']);
		$attr = [
			'product_id' 	=> $this->input->post('product_id'),
			'product_name' 	=> $this->input->post('product_name'),
			'brand_id' 		=> $this->input->post('brand_id'),
			'cat_id' 		=> $this->input->post('cat_id'),
			// 'quentity' 		=> $this->input->post('quentity'),
			'price' 		=> $this->input->post('price'),
			'discount' 		=> $this->input->post('discount'),
			'prv_price' 	=> $this->input->post('prv_price'),
			'top_sell' 		=> $this->input->post('top_sell'),
			'sale' 			=> $this->input->post('sale'),
			'up_comming' 	=> $this->input->post('up_comming'),
			'feature' 		=> $this->input->post('feature'),
			'overview' 		=> $this->input->post('overview'),
			'status' 		=> $this->input->post('status'),
			'details' 		=> $this->input->post('details')
		];

		$this->db->where('id', $id);
		$insert = $this->db->update('products', $attr);
		if ( $this->db->affected_rows()) {

			if($filesCount > 0){
				
	            for($i = 0; $i < $filesCount; $i++){
		                $_FILES['image']['name']     = $_FILES['images']['name'][$i];
		                $_FILES['image']['type']     = $_FILES['images']['type'][$i];
		                $_FILES['image']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
		                $_FILES['image']['error']     = $_FILES['images']['error'][$i];
		                $_FILES['image']['size']     = $_FILES['images']['size'][$i];
		                $file_name = $this->image_upload($_FILES['image']['name'], $_FILES['image']['tmp_name']);

		                $this->image_resize($file_name);
		                $this->insert_image_in_database($file_name, $id);
	               	}
	               	return TRUE;
			}else{
				return TRUE;
			}
		}else {
			return FALSE;
		}
	}



	

	/*==========Insert Image Info in Database===========*/
	public function insert_image_in_database($image_path=null, $product_id = null)
	{
		$attr=[
			'product_id' => $product_id,
			'image_path' => $image_path
		];

		$insert = $this->db->insert('product_images', $attr);

		if($insert){
			return TRUE;
		}else{
			return FALSE;
		}
	}


	/*==========Image Upload In Folder===========*/
	public function image_upload($imageName = null, $temp_name){
		$type = explode('.', $imageName);
		$type = $type[count($type)-1];
		$file_name= uniqid(rand()).'.'.$type;

		if( in_array($type, array('jpg', 'png', 'jpeg', 'gif', 'JPG', 'PNG', 'JPEG', 'GIF' )) ){

				if( is_uploaded_file( $temp_name ) ){

				move_uploaded_file( $temp_name, './libs/upload_pic/product_image/'.$file_name );
				return './libs/upload_pic/product_image/'.$file_name;
				
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
		 $configSize1['width']           = 450;
		 $config['quality']   			 = '100';
		 $configSize1['height']          = 350;
		 $configSize1['new_image'] 		 = './libs/upload_pic/product_image/';

		 $this->image_lib->initialize($configSize1);
		 $this->image_lib->resize();
		 $this->image_lib->clear();		 
	}


	//---------- Product Image delete -----------
	public function product_image_delete($id = null)
	{
		$image = $this->db->where('id', $id)->get('product_images')->row();
		$this->db->where('id', $id);
		$this->db->delete('product_images');

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


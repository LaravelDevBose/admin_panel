<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontEnd extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$vars['phone'] 		= $this->Page_model->get_phone_info();
		$vars['email'] 		= $this->Page_model->get_email_info();
		$vars['logo'] 		= $this->Template_model->get_logo();
		$vars['about_us'] 	= $this->Page_model->get_about_us_info();
		$vars['address'] 	= $this->Page_model->get_address_info();
		$vars['categories'] = $this->Category_model->get_all_category_info();
		$vars['sliders']	= $this->Slider_model->get_all_slider_data();
		$vars['ads_images']	= $this->Ads_model->frontend_ads();
		$vars['md_name']	= $this->Template_model->get_md_name_data(); 
		$vars['md_desig']	= $this->Template_model->get_md_desig_data(); 
		$vars['md_image']	= $this->Template_model->get_md_image_data(); 
		$vars['md_message']	= $this->Template_model->get_md_message_data();
		$vars['photos']		= $this->Page_model->get_images_for_right_sidebar();
		$vars['y_videos']	= $this->Page_model->get_limt_video(3); 
		$this->load->vars( $vars);
	}

	public function index()
	{	
		// var_dump($this->Ads_model->middel_ads_data()); exit();
		$data['title']		='Home Page';
		$data['page_path']	='frontEnd/home/home';
		$data['wc_note'] 	= $this->Template_model->get_wellcome_note();
		$data['products']	= $this->Product_model->get_products_data(9);
		$this->load->view('frontEnd/master', $data);
	}

	/*========= Category Wise Product Page ===========*/
	public function category_products($cat_id = null)
	{	

		$data['title']		='Category Products';
		$data['page_path'] 	= 'frontEnd/product/products';
		$data['products'] 	= $this->Product_model->get_categorywise_products($cat_id);
		$this->load->view('frontEnd/master', $data);
	}

	/*=========== All Products Information============*/
	public function all_products()
	{
		$data['title']		='Category Products';
		$data['page_path'] 	= 'frontEnd/product/products';
		$data['products'] 	= $this->Product_model->get_all_products_info();
		$this->load->view('frontEnd/master', $data);
	}


	/*========= Brand Wise Product Page ===========*/
	// public function brand_products($brnad_id = null)
	// {	

	// 	$data['title']='Brand Products';
	// 	$data['page_path'] = 'frontEnd/product/products';
	// 	$data['products'] = $this->Product_model->get_brandwise_products($brnad_id);
	// 	$data['top_sale'] = $this->Product_model->get_top_sale_products(4);
	// 	$data['brands'] = $this->Brand_model->get_all_brand_info();
	// 	$this->load->view('frontEnd/master', $data);
	// }

	/*========= Singel Product Page ===========*/
	public function singel_product($id = null)
	{
		
		$data['page_path'] 	= 'frontEnd/product/singel_product_page';
		$product 			= $this->Product_model->get_product_by_id($id);
		$data['product'] 	= $product;
		$data['title'] 		=$product->product_name;
		// $data['feature_products'] = $this->Product_model->get_feature_products();
		// $data['related_products'] = $this->Product_model->get_related_products($product->id, $product->brand_id, $product->cat_id, 4);
		// $data['top_sale_products'] = $this->Product_model->get_top_sale_products(4);
		if(!$product){
			redirect('index');
		}
		$this->load->view('frontEnd/master', $data);
	}

	/*========= pop up fenchiil box product =============*/
	// public function popUp_singel_product($id=null)
	// {	
	// 	$data['product'] = $this->Product_model->get_product_by_id($id);
	// 	$this->load->view('frontEnd/product/pop_up_product', $data);
	// }

	
	/*========= About us page============*/
	public function about_us_page()
	{	
		$data['title']		='About Us';
		$data['page_path']	= 'frontEnd/about_us/about_us_page';
		
		$this->load->view('frontEnd/master', $data);
	}

	/*========= Our Service Page ============*/
	public function our_service_page()
	{
		$data['title']		='Our Service';
		$data['page_path']	= 'frontEnd/service/our_service_page';
		$data['our_service']= $this->Page_model->get_service_info();
		$this->load->view('frontEnd/master', $data);
	}


	/*====== photo Gallary page ============*/
	public function phote_gallary_page()
	{
		$data['title']		= 'Photo Gallary';
		$data['page_path'] 	= 'frontEnd/gallary/photo_gallary_page';
		$data['images'] 	= $this->Page_model->get_all_gallery_images();
		$this->load->view('frontEnd/master', $data);
	}

	/*====== Video Gallary page ============*/
	public function video_gallary_page()
	{
		$data['title']='Video Gallary';
		$data['page_path'] = 'frontEnd/gallary/video_gallary_page';
		$data['videos'] = $this->Page_model->get_all_video();
		$this->load->view('frontEnd/master', $data);
	}

	/*========= contacts us page============*/
	public function contacts_us_page()
	{
		$data['title']='Contacts Us';
		$data['page_path'] = 'frontEnd/contact/contacts_us_page';
		$this->load->view('frontEnd/master', $data);
	}


	/*=========== Md message Page=========*/
	public function md_message_page()
	{
		$data['title']='Md. Message';
		$data['page_path'] = 'frontEnd/message/md_message_page';
		$this->load->view('frontEnd/master', $data);
	}

	/*========= Cart page============*/
	// public function cart_page()
	// {	
	// 	$cart = $this->cart->contents();
		
	// 	if(count($cart) == 0){
	// 		$data['error'] ='Your Cart is Empty. Add Some Product First';
	// 		$this->session->set_flashData($data);
	// 		redirect('index');
	// 	}
	// 	$data['title']='Cart';
	// 	$data['page_path'] = 'frontEnd/cart/show_cart_page';
	// 	$data['cart_products'] = $cart;
	// 	$this->load->view('frontEnd/master', $data);
	// }


	/*========= Checkout page============*/
	// public function checkout_page()
	// {	
	// 	$cart = $this->cart->contents();

	// 	if(count($cart) == 0){
	// 		$data['error'] ='Your Cart is Empty. Add Some Product First';
	// 		$this->session->set_flashData($data);
	// 		redirect('index');
	// 	}
	// 	$data['title']='Check out';
	// 	$data['page_path'] = 'frontEnd/checkout/checkout_page';
	// 	$this->load->view('frontEnd/master', $data);
	// }

	/*========== Store User Shipping Address ========= */
	// public function submit_order()
	// {
	// 	$cart_products = $this->cart->contents();
		
	// 	if(count($cart_products) == 0){
	// 		$data['error'] ='Your Cart is Empty. Add Some Product First';
	// 		$this->session->set_flashData($data);
	// 		redirect('index');
	// 	}

	// 	$this->form_validation->set_rules('name', 'Name','trim|required');
	// 	$this->form_validation->set_rules('email', 'Email','trim|required|valid_email');
	// 	$this->form_validation->set_rules('phone_num', 'Phone Number','trim|required');
	// 	$this->form_validation->set_rules('address', 'Shipping','trim|required');

	// 	if($this->form_validation->run() == FALSE){
	// 		$data['title']='Check out';
	// 		$data['page_path'] = 'frontEnd/checkout/checkout_page';
	// 		$this->load->view('frontEnd/master', $data);
	// 	}else{

	// 		if($shipping_id = $this->Cart_model->store_shipping_info()){
				
	// 			if($this->Cart_model->store_cart_info($shipping_id)){

	// 				$data['success'] ='Your Order Store Successfully.';
	// 				$this->session->set_flashdata($data);
	// 				redirect('index');
	// 			}else{
	// 				$data['error'] ='Your Order Not Store Successfully.';
	// 				$this->session->set_flashdata($data);
	// 				redirect('cart');
	// 			}
				
	// 		}else{
	// 			$data['error'] = 'Shipping Information not Store Successfully. Try Again.';
	// 			$this->session->set_flashdata($data);
	// 			redirect('checkout');
	// 		}
	// 	}
	// }


	/*===== Shipping Page========*/
	// public function shipping_page()
	// {	
	// 	$cart = $this->cart->contents();
		
	// 	if(count($cart) == 0){
	// 		$data['error'] ='Your Cart is Empty. Add Some Product First';
	// 		$this->session->set_flashData($data);
	// 		redirect('index');
	// 	}

	// 	$data['title']='Shipping';
	// 	$data['page_path'] = 'frontEnd/shipping/shipping_page';
	// 	$this->load->view('frontEnd/master', $data);
	// }
}

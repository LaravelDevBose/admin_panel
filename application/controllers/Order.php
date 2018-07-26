<?php 
Class Order extends CI_Controller{


	public function __construct()
	{
		parent::__construct();

		//check user login or not
		if(!$this->Admin_model->is_admin_loged_in() ){
			redirect('admin/login');
		}
	}

	/*============ Show Order List============*/
	public function order_list()
	{
		$data['title'] = 'Order List';
		$data['page_path'] = 'admin/order/order_page';
		$data['orders'] = $this->Order_model->get_order_data(0);
		$this->load->view('admin/master', $data);
	}

	/*============ Show Deliver Order List============*/
	public function deliver_order_list()
	{
		$data['title'] = 'Order List';
		$data['page_path'] = 'admin/order/deliver_order_page';
		$data['orders'] = $this->Order_model->get_order_data(1);
		$this->load->view('admin/master', $data);
	}

	/*========= View Order Products=========*/
	public function view_order_product($shipping_id=null)
	{
		if($data['order_info']=$this->Order_model->get_shipping_info($shipping_id)){
			$data['products'] = $this->Order_model->get_all_order_products($shipping_id);
			$data['title'] = 'Order Info';
			$data['page_path'] = 'admin/order/order_info';
			$this->load->view('admin/master', $data);
		}else{
			$data['error'] = 'No Order Found';
			$this->session->set_flashdata($data);
			redirect('dashboard');
		}
	}


	/*====== Change Order Status as Deliverd========*/
	public function deliver_order($shipping_id = null)
	{
		if($this->Order_model->deliver_order($shipping_id)){

			$data['success'] = 'Order Successfully Deliverd';
			$this->session->set_flashData($data);
			redirect('order/list');
		}else{
			$data['error'] = 'Order Not Deliverd. Try Again.';
			$this->session->set_flashData($data);
			redirect('order/list');
		}
	}
}
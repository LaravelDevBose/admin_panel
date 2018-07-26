<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'FrontEnd';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/*============= FrontEnd Route List ===================*/
/*============= FrontEnd Route List ===================*/
/*============= FrontEnd Route List ===================*/
/*============= FrontEnd Route List ===================*/

$route['index'] = 'FrontEnd/index';
$route['category/products/(:any)'] = 'FrontEnd/category_products/$1';
$route['brand/products/(:any)'] = 'FrontEnd/brand_products/$1';
$route['singel/product/(:any)'] = 'FrontEnd/singel_product/$1';
$route['pop_up/product/(:any)'] = 'FrontEnd/popUp_singel_product/$1';
$route['contact_us'] = 'FrontEnd/contacts_us_page';
$route['cart'] = 'FrontEnd/cart_page';
$route['checkout'] = 'FrontEnd/checkout_page';
$route['order'] = 'FrontEnd/submit_order';

$route['cart/add'] = 'Cart/add_cart';
$route['cart/remove'] = 'Cart/remove_cart';
$route['cart/update'] = 'Cart/update_cart';
$route['cart/info'] = 'Cart/cart_info';


// $route['shipping'] = 'FrontEnd/shipping_page';

// $route['login'] = 'User/index';
// $route['user/login'] ='User/login_data_check';
// $route['register'] = 'User/register_page';
// $route['user/registaion'] = 'User/user_registation_data_check';











/*========== Admin Route List =============*/
/*========== Admin Route List =============*/
/*========== Admin Route List =============*/
/*------Admin Login ------*/
$route['admin/login'] = 'Admin/index';
$route['admin/login/check'] = 'Admin/login_data_check';
$route['admin/logout'] = 'Admin/logout';

/*---------- Admin Dashboard ----------*/
$route['dashboard'] = 'Dashboard/index';

/* ------- Brand Route --------*/
$route['brand'] = 'Brand/index';
$route['brand/store'] = 'Brand/store';
$route['brand/edit/(:any)'] = 'Brand/edit/$1';
$route['brand/update'] = 'Brand/update';

/* ------- Category Route --------*/
$route['category'] = 'Category/index';
$route['category/store'] = 'Category/store';
$route['category/edit/(:any)'] = 'Category/edit/$1';
$route['category/update'] = 'Category/update';

/* ------- Products Route --------*/
$route['products'] = 'Product/index';
$route['product/insert'] = 'Product/insert';
$route['product/store'] = 'Product/store';
$route['product/edit/(:any)'] = 'Product/edit/$1';
$route['product/update/(:any)'] = 'Product/update/$1';
$route['image/delete/(:any)/(:any)'] = 'Product/image_delete/$1/$2';


/* --------- Template Route ----------*/
$route['template/about'] = 'Template/about_info';
$route['about_us'] = 'Template/about_us';
$route['address'] = 'Template/address';
$route['phone'] = 'Template/phone_number';
$route['email'] = 'Template/email_address';


/* --------- Slider Route ----------*/
$route['sliders'] = 'Slider/slider_page';
$route['slider/store'] = 'Slider/slider_image_store';
$route['slider/delete/(:any)'] = 'Slider/slider_image_delete/$1';


/*------------ Ads Route ------------*/
$route['ads'] = 'Ads/ads_page';
$route['ads/create'] = 'Ads/ads_create_page';
$route['ads/store'] = 'Ads/store_ads_data';
$route['ads/delete/(:any)'] = 'Ads/delete_ads_data/$1';
$route['position/check'] = 'Ads/check_position';

/*----------- New Admin Route----------*/
$route['admin_page'] = 'Sub_admin/admin_page';
$route['admin/create'] = 'Sub_admin/create_admin_page';
$route['admin/store'] = 'Sub_admin/store_admin';
$route['admin/edit/(:any)'] = 'Sub_admin/edit_admin_page/$1';
$route['admin/update/(:any)'] = 'Sub_admin/update_admin/$1';
$route['admin/delete/(:any)'] = 'Sub_admin/delete_admin/$1';
$route['password/check'] = 'Sub_admin/old_password_check';


/*-------- Order Route-------------*/
$route['order/list'] = 'Order/order_list';
$route['deliver/order/list'] = 'Order/deliver_order_list';

$route['order/view/(:any)'] = 'Order/view_order_product/$1';
$route['order/deliver/(:any)'] = 'Order/deliver_order/$1';


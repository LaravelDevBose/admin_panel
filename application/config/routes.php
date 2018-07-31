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
$route['about-us'] = 'FrontEnd/about_us_page';
$route['category/(:any)'] = 'FrontEnd/category_products/$1'; 
$route['all/products'] = 'FrontEnd/all_products';
$route['singel/product/(:any)'] = 'FrontEnd/singel_product/$1';
$route['our_service'] = 'FrontEnd/our_service_page';
$route['photo'] = 'FrontEnd/phote_gallary_page';
$route['video'] = 'FrontEnd/video_gallary_page';
$route['contact_us'] = 'FrontEnd/contacts_us_page';
$route['md_message_page'] = 'FrontEnd/md_message_page';

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
$route['category_name/update'] = 'Category/update';

/* ------- Products Route --------*/
$route['products'] = 'Product/index';
$route['product/insert'] = 'Product/insert';
$route['product/store'] = 'Product/store';
$route['product/edit/(:any)'] = 'Product/edit/$1';
$route['product/update/(:any)'] = 'Product/update/$1';
$route['product/delete/(:any)'] = 'Product/delete/$1';
$route['image/delete/(:any)/(:any)'] = 'Product/image_delete/$1/$2';


/* --------- Template Route ----------*/

$route['wellcome_note'] = 'Template/wellcome_note_page';
$route['wellcome_note/update'] = 'Template/wellcome_note_update';
$route['md_message'] = 'Template/md_message_page';
$route['md_message/update'] = 'Template/md_message_update';
$route['logo_page'] = 'Template/logo_page';
$route['logo/store'] = 'Template/logo_store_update';
$route['logo/delete/(:any)'] = 'Template/logo_delete/$1';


/* --------- Pages Route ----------*/
$route['page/contact_us_page'] = 'Page/contact_us_page';
$route['page/about_us_page'] = 'Page/about_us_page';
$route['about_us_update'] = 'Page/about_us_update';
$route['page/gallery_page'] = 'Page/gallery_page';
$route['gallary_image_store'] = 'Page/gallary_image_store';
$route['gallery_image_delete/(:any)'] = 'Page/gallery_image_delete/$1';
$route['address'] = 'Page/address';
$route['phone'] = 'Page/phone_number';
$route['email'] = 'Page/email_address';
$route['page/service_page'] = 'Page/our_srvices_page';
$route['service_update'] = 'Page/our_services_update';
$route['page/video'] = 'Page/video_page';
$route['video_store'] = 'Page/video_store';
$route['video_delete/(:any)'] = 'Page/video_delete/$1';





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


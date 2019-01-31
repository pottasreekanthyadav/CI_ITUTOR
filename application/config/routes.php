<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_overridparent/dashboarde'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Registration';

$route['404_override'] = 'My404';
$route['translate_uri_dashes'] = FALSE;

/*----FrontEnd start----*/
$route['about-us']='Registration/load_aboutus';
$route['signup']='registration/signup_load';
$route['signup/(:any)']='registration/signup_load';
$route['signin']='registeration/login';
$route['tutor-list'] = 'frontend/tutor_page_ctrl';	
$route['tutor-search-list'] = 'frontend/tutor_search_page_ctrl';
$route['contact'] = 'frontend/contact';

/*----FrontEnd end----*/

/*----Tutor start----*/
$route['tutor/logout']='tutors/Tutor/tutor_log_out';
$route['tutor-profile']='tutor/tutor_profile';
$route['tutor/profile-update']='tutor/tutor_profile_update';
$route['tutor/dashboard']='tutors/Tutor/load_dashboard';
$route['tutor/change-password']='tutors/Tutor/change_password';
$route['tutor/support']='frontend/tutor_support_ctrl';
$route['tutor/refer']='frontend/tutor_refer_ctrl';
$route['tutor/requirements']='Tutor/listing_requirement';
$route['tutor/profile-update']='tutor/tutor_profile_update';
$route['tutor/query']='Frontend/tutor_support_query_ctrl';
$route['faq']='Frontend/faq_ctrl';
$route['tutor/payment']='Tutor/payment_tutor';
$route['tutor/list-past-requirement']='tutor/list_past_requirement';
$route['tutor/list-past-requirement/(:any)']='tutor/list_past_requirement';
$route['tutor/search/(:any)']='frontend/tutor_search_page_ctrl';
$route['tutor/search']='frontend/tutor_search_page_ctrl';
$route['tutor/profile/(:any)']='frontend/tutor_profile_ctrl';
$route['tutor/profile/(:any)/(:any)']='frontend/tutor_profile_ctrl';
$route['tutor/view-profile']="tutor/view_profile";
$route['user/forgot-reset/(:any)']="frontend/reset_forgot_request";
$route['user/forgot-request']="frontend/forgot_pwd_ctrl";
$route['tutor/idcard']="Tutor/tutor_idcard";
$route['tutor/update-profile']="tutor/update_tutor_ctrl";
$route['tutor/profile-add']="tutor/insert_tutor_ctrl";
$route['tutor/parent-details']="tutors/tutor/get_parent_details";
$route['tutor/tuition-subscribe']="tutors/tutor/get_tutor_tuition_subscribe";
$route['tutor/location']="frontend/tutor_location_by";
$route['tutor/welcome-page']="tutor/new_tutor_page";

// $route['tutor/location']="frontend/tutor_location_by";

/*----Tutor end----*/

/*----Parent Login start----*/
$route['parent/dashboard']='parents/Parent_ctrl/load_dashboard';
$route['parent/profile']='parents/Parent_ctrl/myprofile_ctrl';
$route['parent/change-password']='parents/Parent_ctrl/change_password';
$route['parent/logout']='parents/Parent_ctrl/parent_log_out';
$route['parent/support']='parents/Parent_ctrl/parent_support_ctrl';
$route['parent/requirements']='parents/Parent_ctrl/requirement_view';
$route['parent/requirements/(:any)']='parents/Parent_ctrl/requirement_view';
$route['parent/matching-tutor/(:any)/(:any)']='parents/Parent_ctrl/matching_tutor_view';
$route['parent/matching-tutor/(:any)/(:any)/(:any)']='parents/Parent_ctrl/matching_tutor_view';
$route['parent/matching-tutor/(:any)']='parents/Parent_ctrl/matching_tutor_view';
$route['parent/viewed-tutor']='parents/parent_ctrl/past_tutor_view';
$route['parent/viewed-tutor/(:any)']='parents/parent_ctrl/past_tutor_view';
$route['parent/statistics']="parents/parent_ctrl/get_statistics_details";
$route['parent/statistics/(:any)']="parents/parent_ctrl/get_statistics_details";
$route['parent/parent-payment']='parents/parent_ctrl/payment_ctrl';


/*----Parent Login end----*/
/*----Admin Login start----*/
//$route['admin/dashboard']='superadmin/Admin/dashboard';
$route['admin']='superadmin/Admin';
/*$route['admin/list-category']='admin/categories/cat_page_ctrl';
$route['admin/list-manage-type']='superadmin/Tutor_newtype/load_manage_subtype';
$route['admin/list-subscription']='superadmin/Subscription/manageSubscription';
$route['admin/list-class']='superadmin/Classes/manageClasses';
$route['admin/list-subject']='superadmin/Subjects/manageSubjects';*/

/*----Admin Login end----*/
/*-----tuition--center----*/
$route['tuition-center']='frontend/tuition_ctrl';
$route['institute']='frontend/tuition_center';
/*----parent admin side---*/
$route['superadmin/parent-feedback']='superadmin/parent_feedback/view_feedback';
$route['superadmin/parent-leads']='superadmin/parent_leads/view_leads';
$route['superadmin/parent-leads/(:any)']='superadmin/parent_leads/view_leads';
/* ---payment gateway---*/
$route['payment/(:any)']='registration/load_payuform2';
$route['payment/(:any)/(:any)']='registration/load_payuform2';
$route['tutor/payment-idcard']='Tutor/payment_tutor_idcard';
$route['activity']='Businessdirectory_controller/category_institute';
$route['service-details']='Businessdirectory_controller/business_details';
$route['service-details/(:any)/(:any)/(:any)']='Businessdirectory_controller/business_details';
$route['institute-listing']='Businessdirectory_controller/listing_business/';
$route['institute-listing/(:any)/(:any)']='Businessdirectory_controller/listing_business/';

/* ------Books Corner--------*/ 
$route['book']='rentabook/frontend';
$route['book/book_description']='rentabook/frontend/book_description';
$route['book/book_description/(:any)']='rentabook/frontend/book_description';
$route['book/book_description/(:any)/(:any)']='rentabook/frontend/book_description';
$route['checkout']='rentabook/frontend/checkout';
$route['shipping']='rentabook/frontend/shipping_order';
$route['books/search'] = "rentabook/frontend/search";
$route['books/search/(:any)'] = "rentabook/frontend/search";
$route['books/search/(:any)/(:any)'] = "rentabook/frontend/search";
$route['books/logout'] = "rentabook/frontend/logout";
$route['book/myorders'] = "rentabook/frontend/myorders";
$route['book/orderdetails'] = "rentabook/frontend/orderDetails";
$route['book/orderdetails/(:any)'] = "rentabook/frontend/orderDetails";
$route['book/wishlist'] = "rentabook/Frontend/wishlistPage";
$route['book/deleteWish'] = "rentabook/Frontend/removeWishlist";
$route['book/deleteWish/(:any)'] = "rentabook/Frontend/removeWishlist";
/* ------Books Corner End--------*/

/*------Routes for admin book categories-----*/
$route['books/add-slider'] = "Admin_books/add_slider";
$route['books/manage-slider'] = "Admin_books/manage_slider";
$route['books/manage-slider/(:any)'] = "Admin_books/manage_slider";
$route['books/save-slider']="Admin_books/save_slider";
$route['books/update-slider']="Admin_books/update_slider";

$route['books/add-coupons'] = "Admin_books/add_coupons";
$route['books/manage-coupons'] = "Admin_books/manage_coupons";
$route['books/manage-coupons/(:any)'] = "Admin_books/manage_coupons";
$route['books/update-coupon']="Admin_books/update_coupon";
$route['books/save-coupon'] = "Admin_books/save_coupon";

$route['books/manage-orders'] = "Admin_books/manage_orders";
$route['books/manage-orders/(:any)'] = "Admin_books/manage_orders";
/*----------End of admin book routes-------*/

/*--------------Book Corner API's routing------------------*/
$route['books/home'] = "rentabook/book_api/home/get_data";
$route['books/description'] = "rentabook/book_api/home/book_description";
$route['books/checkout'] = "rentabook/book_api/home/checkout";
$route[''] = "";
$route[''] = "";

/*--------------Book Corner API's routing END------------------*/

$route['book/payment']=BOOK.'payment/payment_info_update';
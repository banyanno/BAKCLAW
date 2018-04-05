<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['administrator'] = 'Dashboard/view';
$route['admin'] = 'Dashboard/view';
//Route for Login
$route['verifylogin'] = 'VerifyLogin';
$route['logout'] = 'VerifyLogin/logout';
//Route for Lawyers
$route['administrator/new_lawyer_form'] = 'Lawyers';
$route['administrator/profiles'] = 'Lawyers/view_profiles';
$route['administrator/view_profile/(:num)'] = 'Lawyers/view_profile/$1';
$route['administrator/edit_profile/(:num)'] = 'Lawyers/edit_profile/$1';
$route['administrator/lawyer/save'] = 'Lawyers/save';
$route['loads/lawyer_data_table'] = 'Lawyers/load_data_table';

//Test modal
$route['administrator/modal'] = 'Lawyers/test_modal';

//Route for Users
$route['administrator/users'] = 'Users';
$route['administrator/user_roles'] = 'Users/view_user_roles';
$route['administrator/new_user_form'] = 'Users/new_user_form';
$route['administrator/change_passwd'] = 'Users/change_passwd_form';
$route['administrator/change_passwd_post'] = 'Users/change_passwd';
$route['administrator/create_user_post'] = 'Users/create_user';
$route['administrator/auth_user_post'] = 'Users/authorise_user';
$route['administrator/document_status'] = 'Documents/view_doc_status';
//Route for Inspection
$route['administrator/inspection_list'] = 'Inspection';
$route['loads/inspection_data_table'] = 'Lawyers/load_data_table';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['administrator/switch/(:any)'] = 'libs/LanguageSwitcher/switchLang/$1';

// Route for System parameter:
// Systax $route['Name of route']= Controler Directory

$route['systempara/client']='parasys/Parasys_view';
$route['systempara/create_client']='parasys/Parasys_view/create_client';
$route['systempara/edit_client/(:num)']='parasys/Parasys_view/ajax_edit_client/$1';
$route['systempara/dashboard_client']='parasys/Parasys_view/view_dashboard_client';






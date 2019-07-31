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
|	$route['default_controller'] = 'home_page';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "home_page" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
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
$route['default_controller'] = 'Home_page';
//admin
$route['profil'] ='User/profile';
$route['ganti_profil'] ='User/edit_profile';
$route['ubah_profil'] ='User/update_profile/';




$route['beranda_user'] ='User/dashboard_user';
$route['url'] ='User/show_url';
$route['url/(:num)'] ='User/show_url/$1';
$route['tambah_url'] ='User/get_data_url';
$route['aksi_url'] ='User/add_url';	
$route['ubah_url/(:num)'] ='User/edit_url/$1';
$route['hapus_url/(:num)'] = 'User/delete_url/$1';
$route['ubah_url'] = 'User/update_url';
$route['log'] = 'User/logger';
$route['log/(:any)'] = 'User/logger/$1';

//home_page
$route['halo'] ='Home_page/landing';
$route['masuk'] ='Home_page/login';
$route['aksi'] ='Home_page/action_login';
$route['keluar'] ='Home_page/logout';
$route['redirect'] = 'Home_page/redirect';

// require_once( BASEPATH .'database/DB'. EXT );
// $db =& DB();
// $query = $db->get( 'url' );
// $result = $query->result();
// foreach( $result as $row )
// {
//     $route[ $row->short_url ]                 = $row->url;
// //    $route[ $row->slug.'/:any' ]         = $row->controller;
//     $route[ $row->controller ]           = 'error404';
//     $route[ $row->controller.'/:any' ]   = 'error404';
// }
$route['tampilkan_user'] ='Admin/show_user';
$route['tampilkan_user/(:any)'] ='Admin/show_user/$1';
$route['beranda_admin'] ='Admin/dashboard_admin';
$route['tambah_user'] ='Admin/get_data_user';
$route['aksi_user'] ='Admin/add_user';
$route['ubah_user/(:num)'] ='Admin/edit_user/$1';
$route['hapus_user/(:num)'] ='Admin/delete_user/$1';
$route['ubah_user'] = 'Admin/update_user';
$route['detail'] = 'Admin/detail';
$route['detail/(:any)'] = 'Admin/detail/$1';

$route['(:any)'] = 'Home_page/shorturl/$1';





$route['404_override'] = '';
$route['error_404'] = '';
$route['translate_uri_dashes'] = FALSE;


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
$route['default_controller'] = 'home_page';
//admin
$route['profil'] ='user/profile';
$route['ganti_profil'] ='user/edit_profile';
$route['ubah_profil'] ='user/update_profile/';

$route['tampilkan_user'] ='user/show_user';

$route['tampilkan_user/(:any)'] ='user/show_user/$1';

$route['beranda_admin'] ='user/dashboard_admin';
$route['tambah_user'] ='user/get_data_user';
$route['aksi_user'] ='user/add_user';
$route['ubah_user/(:num)'] ='user/edit_user/$1';
$route['hapus_user/(:num)'] ='user/delete_user/$1';
$route['ubah_user'] = 'user/update_user';

$route['detail'] = 'user/detail';
$route['detail/(:any)'] = 'user/detail/$1';

$route['beranda_user'] ='user/dashboard_user';
$route['url'] ='user/show_url';
$route['url/(:num)'] ='user/show_url/$1';
$route['tambah_url'] ='user/get_data_url';
$route['aksi_url'] ='user/add_url';	
$route['ubah_url/(:num)'] ='user/edit_url/$1';
$route['hapus_url/(:num)'] = 'user/delete_url/$1';
$route['ubah_url'] = 'user/update_url';
$route['log'] = 'user/logger';
$route['log/(:any)'] = 'user/logger/$1';

//home_page
$route['halo'] ='home_page/landing';
$route['masuk'] ='home_page/login';
$route['aksi'] ='home_page/action_login';
$route['keluar'] ='home_page/logout';
$route['redirect'] = 'home_page/redirect';

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

$route['(:any)'] = 'home_page/shorturl/$1';





$route['404_override'] = '';
$route['error_404'] = '';
$route['translate_uri_dashes'] = FALSE;


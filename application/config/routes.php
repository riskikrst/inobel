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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'C_Opening';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Home
$route['home'] = 'C_Bab/index';
$route['list_materi/(:any)'] = 'C_Bab/daftar_materi/$1';
$route['view_materi/(:any)'] = 'C_Bab/detail_materi/$1';
$route['v_kamus'] = 'C_Bab/view_kamus';


// Admin
$route['admin'] = 'Admin/C_Admin/index';
$route['admin_login'] = 'Admin/C_Admin/login';
$route['admin_logout'] = 'Admin/C_Admin/logout';
$route['admin_home'] = 'Admin/C_Admin/home';
$route['daftar_isi'] = 'Admin/C_Admin/daftar_isi';
$route['add_daftar_isi'] = 'Admin/C_Admin/add_daftar_isi';
$route['update_daftar_isi'] = 'Admin/C_Admin/update_daftar_isi';

$route['materi'] = 'Admin/C_Admin/materi';
$route['add_materi'] = 'Admin/C_Admin/add_materi';
$route['isi_materi/(:any)'] = 'Admin/C_Admin/isi_materi/$1';
$route['add_isi_materi/(:any)'] = 'Admin/C_Admin/add_isi_materi/$1';
$route['v_materi/(:any)'] = 'Admin/C_Admin/edit_materi/$1';

$route['setting_page'] = 'Admin/C_Admin/setting';
$route['update_page'] = 'Admin/C_Admin/update_page';

$route['kamus'] = 'Admin/C_Admin/view_kamus';
$route['add_kamus'] = 'Admin/C_Admin/add_kamus';
$route['del_kamus/(:any)'] = 'Admin/C_Admin/delete_kamus/$1';

// $route['method/(:any)/(:any)'] = 'controller/method/$1/$2';

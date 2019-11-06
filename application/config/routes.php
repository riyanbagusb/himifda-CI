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
$route['default_controller'] = 'himifda';
$route['404_override'] = 'error_404';
$route['translate_uri_dashes'] = FALSE;

$route['visi_misi'] = 'himifda/visi_misi';
$route['struktur_organisasi'] = 'himifda/struktur_organisasi';
$route['event'] = 'himifda/event';
$route['event/(:any)'] = 'himifda/event/$1';
$route['event/(:any)/(:any)'] = 'himifda/event/$1/$2';
$route['detail_event/(:any)'] = 'himifda/detail_event/$1';
$route['modul'] = 'himifda/modul';
$route['faq'] = 'himifda/faq';

$route['admin'] = 'auth';
$route['admin/logout'] = 'auth/logout';
$route['admin/dashboard'] = 'admin/dashboard';
$route['admin/faq'] = 'admin/faq';
$route['admin/addFaq'] = 'admin/addFaq';
$route['admin/getFaq'] = 'admin/getFaq';
$route['admin/updateFaq'] = 'admin/updateFaq';
$route['admin/deleteFaq/(:any)'] = 'admin/deleteFaq/$1';
$route['admin/visi_misi'] = 'admin/visi_misi';
$route['admin/pengaturan'] = 'admin/pengaturan';
$route['admin/deleteUser/(:any)'] = 'admin/deleteUser/$1';
$route['admin/updatePeriode'] = 'admin/updatePeriode';


$route['admin/anggota'] = 'admin/master/anggota';
$route['admin/periode'] = 'admin/master/periode';

$route['(:any)'] = 'error_404';
$route['(:any)/(:any)'] = 'error_404';
$route['(:any)/(:any)/(:any)'] = 'error_404';
$route['himifda/(:any)'] = 'error_404';
$route['himifda/(:any)/(:any)'] = 'error_404';
$route['himifda/(:any)/(:any)/(:any)'] = 'error_404';



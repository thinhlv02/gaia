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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['vn'] = 'home/language';
$route['vn/(:any)'] = 'home/language';
$route['vn/(:any)/(:any)'] = 'home/language';
$route['en'] = 'home/language';
$route['en/(:any)'] = 'home/language';
$route['en/(:any)/(:any)'] = 'home/language';
//$route['dang-ky-vay-von.html'] = 'home/dang_ky_vay';

$route['gioi-thieu-dich-vu(.html)?'] = 'home/service_info';
$route['gioi-thieu-dich-vu/(:any)-(:num)(.html)?'] = 'home/service_info/$1/$2';
$route['ho-tro(.html)?'] = 'home/support';
$route['ho-tro/(:any)-(:num)(.html)?'] = 'home/detail_support/$1/$2';
$route['ho-tro/(:any)(.html)?'] = 'home/support/$1';
$route['dieu-khoan-su-dung(.html)?'] = 'home/policy';
$route['chinh-sach-bao-mat(.html)?'] = 'home/privacy';
$route['lien-he(.html)?'] = 'home/contact';
$route['download(.html)?'] = 'home/download';
$route['tin-tuc(.html)?'] = 'home/news';
$route['tin-tuc/(:num)'] = 'home/news/$1';
$route['tin-tuc/(:any)-(:num)(.html)?'] = 'home/news_detail/$1/$2';
$route['dai-ly(.html)?'] = 'home/agency';

$route['hinh-thuc-vay/(:any)-(:num)(.html)?'] = 'home/hinh_thuc_vay/$1/$2';
$route['tuyen-dung.html'] = 'home/recruit';

$route['sitemap\.xml'] = "home/sitemap";

//$route['tin-tuc.html'] = 'home/news';
//$route['tin-tuc.html/(:num)'] = 'home/news';
//$route['tin-tuc/(:any)-(:num).html'] = 'home/new_detail/$1/$2';
//$route['san-pham.html'] = 'home/product';
//$route['lien-he.html'] = 'home/contact';
//
//$route['tuyen-dung/van-hanh-kiem-thu.html'] = 'home/recruit';
//$route['tuyen-dung/kinh-doanh.html'] = 'home/recruit';
//$route['tuyen-dung/ky-thuat.html'] = 'home/recruit';
//$route['tuyen-dung/(:any)-(:num).html'] = 'home/detailRecruit/$1/$2';


$route['admin'] = 'admin/login';
//$route['admin/recruitment/add'] = 'admin/login';
//$route['admin'] = 'admin/login';
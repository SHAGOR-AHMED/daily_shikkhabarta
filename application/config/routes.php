<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['$StrReplace/(:any)']='Welcome/BlogDetails/$1';

/*--admin--*/
$route['admin_login']='Admin/admin_login';
$route['master']='Super_admin/index';
$route['slider']='Super_admin/slider';
$route['cpassword']='Super_admin/cpassword';
$route['change_password']='Super_admin/change_password';
$route['logout']='Super_admin/logout';
<?php defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'C_Landing';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['landing'] = 'C_Landing';
$route['landing/(:any)'] = 'C_Landing/$1';
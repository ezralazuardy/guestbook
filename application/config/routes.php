<?php defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'C_Formulir';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['formulir'] = 'C_Formulir';
$route['formulir/(:any)'] = 'C_Formulir/$1';
$route['formulir/(:any)/(:any)'] = 'C_Formulir/$1/$2';

$route['daftar'] = 'C_Daftar';
$route['daftar/(:any)'] = 'C_Daftar/$1';
$route['daftar/(:any)/(:any)'] = 'C_Daftar/$1/$2';
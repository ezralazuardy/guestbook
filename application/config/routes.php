<?php defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'C_Formulir';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['formulir'] = 'C_Formulir';
$route['formulir/upload'] = 'C_Formulir/upload';

$route['daftar'] = 'C_Daftar';
$route['daftar/getData'] = 'C_Daftar/getData';
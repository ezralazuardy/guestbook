<?php defined('BASEPATH') OR exit('No direct script access allowed');

public function xss($string = ''){
    return htmlentities($string, ENT_QUOTES, 'UTF-8');
}

public function xss_trim($string = ''){
    return htmlentities(trim($string), ENT_QUOTES, 'UTF-8');
}
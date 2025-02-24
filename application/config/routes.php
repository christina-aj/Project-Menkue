<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['supplier'] = 'Supplier';


$route['customer'] = 'pelanggan';
$route['customer/add'] = 'pelanggan/add';
$route['customer/print_cust'] = 'pelanggan/print_cust';
$route['customer/pdf_cust'] = 'pelanggan/pdf_cust';
$route['customer/process'] = 'pelanggan/process';
$route['customer/edit/(:num)'] = 'pelanggan/edit/$1';
$route['customer/del/(:num)'] = 'pelanggan/del/$1';
$route['customer/del/(:num)'] = 'pelanggan/del/$1';

$route['stock/in'] = 'stock/stock_in_data';
$route['stock/in/add'] = 'stock/stock_in_add';
$route['stock/in/del/(:num)/(:num)'] = 'stock/stock_in_del';

$route['stock/out'] = 'stock/stock_out_data';
$route['stock/out/add'] = 'stock/stock_out_add';
$route['stock/out/del/(:num)/(:num)'] = 'stock/stock_out_del';

$route['report/in'] = 'report/report_in_data';
$route['report/in/add'] = 'report/report_in_add';
$route['report/in/del/(:num)'] = 'report/report_in_del';
$route['report/in/edit/(:num)'] = 'report/report_in_edit/$1';


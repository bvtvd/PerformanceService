<?php

require_once '../vendor/autoload.php';

use Yuzhua\PerformanceService;

$service = new PerformanceService([
    'aesKey' => '8888',
    'url' => 'http://8888.com/api',
]);

$data = '{"1":{"id":27889,"type":7,"staff_style":1,"order_id":52586,"kind":1,"staff_id":45748,"charge_id":39418,"manager_id":80132,"director_id":1,"company_id":1,"proportion":"0.50","achievement":12500,"virtual_performance":12500,"pay_date":"2020-03-06 13:34:08","complete_date":null,"project":2,"order_sn":"100940540306010214204259","order_type":1,"order_paid":"55000.00","account_state":0,"paid_loan":"0.00","status":3},"2":{"id":27890,"type":7,"staff_style":1,"order_id":52586,"kind":2,"staff_id":1,"charge_id":1,"manager_id":1,"director_id":1,"company_id":1,"proportion":"0.50","achievement":12500,"virtual_performance":12500,"pay_date":"2020-03-06 13:34:08","complete_date":null,"project":2,"order_sn":"100940540306010214204259","order_type":1,"order_paid":"55000.00","account_state":0,"paid_loan":"0.00","status":3},"3":{"id":27891,"type":7,"staff_style":1,"order_id":52586,"kind":3,"staff_id":0,"charge_id":0,"manager_id":0,"director_id":0,"company_id":0,"proportion":"0.00","achievement":0,"virtual_performance":0,"pay_date":"2020-03-06 13:34:08","complete_date":null,"project":2,"order_sn":"100940540306010214204259","order_type":1,"order_paid":"55000.00","account_state":0,"paid_loan":"0.00","status":3},"4":{"id":27892,"type":7,"staff_style":1,"order_id":52586,"kind":4,"staff_id":0,"charge_id":0,"manager_id":0,"director_id":0,"company_id":0,"proportion":"0.00","achievement":0,"virtual_performance":0,"pay_date":"2020-03-06 13:34:08","complete_date":null,"project":2,"order_sn":"100940540306010214204259","order_type":1,"order_paid":"55000.00","account_state":0,"paid_loan":"0.00","status":3}}';

$data = json_decode($data, true);

foreach($data as $key => $v){
    $data[$key]['order_project'] = 2;
}


$result = $service->syncPerformanceLog($data);

var_dump($result);
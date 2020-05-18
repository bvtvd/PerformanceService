<?php

require_once '../vendor/autoload.php';

use Yuzhua\PerformanceService;

$service = new PerformanceService([
    'aesKey' => '8888',
    'url' => 'http://8888.com/api',
]);

$data = '{"1":{"id":56873,"type":19,"staff_style":1,"order_id":55898,"kind":1,"staff_id":80723,"charge_id":80722,"manager_id":80721,"director_id":1,"company_id":1,"proportion":"0.50","achievement":193250,"virtual_performance":289875,"pay_date":"2020-05-18 17:37:15","complete_date":null,"project":2,"order_sn":"114394840518011437205566","order_type":1,"order_paid":"77300.00","account_state":0,"paid_loan":"0.00","status":2,"order_project":19},"2":{"id":56874,"type":19,"staff_style":1,"order_id":55898,"kind":2,"staff_id":1,"charge_id":1,"manager_id":1,"director_id":1,"company_id":1,"proportion":"0.50","achievement":193250,"virtual_performance":289875,"pay_date":"2020-05-18 17:37:15","complete_date":null,"project":2,"order_sn":"114394840518011437205566","order_type":1,"order_paid":"77300.00","account_state":0,"paid_loan":"0.00","status":2,"order_project":19},"3":{"id":56875,"type":19,"staff_style":1,"order_id":55898,"kind":3,"staff_id":0,"charge_id":0,"manager_id":0,"director_id":0,"company_id":0,"proportion":"0.00","achievement":0,"virtual_performance":0,"pay_date":"2020-05-18 17:37:15","complete_date":null,"project":2,"order_sn":"114394840518011437205566","order_type":1,"order_paid":"77300.00","account_state":0,"paid_loan":"0.00","status":2,"order_project":19},"4":{"id":56876,"type":19,"staff_style":1,"order_id":55898,"kind":4,"staff_id":0,"charge_id":0,"manager_id":0,"director_id":0,"company_id":0,"proportion":"0.00","achievement":0,"virtual_performance":0,"pay_date":"2020-05-18 17:37:15","complete_date":null,"project":2,"order_sn":"114394840518011437205566","order_type":1,"order_paid":"77300.00","account_state":0,"paid_loan":"0.00","status":2,"order_project":19}}';

$data = json_decode($data, true);

$result = $service->syncPerformanceLog($data);

var_dump($result);
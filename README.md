### performance center service

useage
```
use Yuzhua\PerformanceService;

$service = new PerformanceService([
    'aesKey' => '8888',
    'url' => 'http://8888.com/api',
]);


$data = [];

// sync
$result = $service->syncPerformanceLog($data);

var_dump($result);

```
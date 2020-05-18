### 对接业绩中心

useage
```
use Yuzhua\PerformanceService;

$service = new PerformanceService([
    'aesKey' => '8888',
    'url' => 'http://8888.com/api',
]);


$data = [];

// 同步业绩到业绩中心
$result = $service->syncPerformanceLog($data);

var_dump($result);

```
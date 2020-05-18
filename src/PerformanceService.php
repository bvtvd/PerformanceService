<?php 

namespace Yuzhua;

use Exception;
use GuzzleHttp\Client;

class PerformanceService
{
    protected $aes;
    protected $http;
    protected $url;
    protected $error;

    /**
     * @param array $config 初始化配置: aesKey, url
     */
    public function __construct($config)
    {
        if(!key_exists('aesKey', $config)){
            throw new Exception('config require key: aesKey');
        }
        if(!key_exists('url', $config)){
            throw new Exception('config require key: url');
        }

        $this->aes= new Aes($config['aesKey']);
        $this->url = $config['url'];

        $this->http = new Client();
    }

    /**
     * 同步 业绩中心 业绩记录
     * 
     * @param array $data 业绩数据, 共 4 条
     * 
     */
    public function syncPerformanceLog($data)
    {
        $data = [
            'data' => json_encode($data),
        ];

        $response = $this->http->post($this->getUrl('/log/create/or/update'), [
            'body' => $this->aes->encrypt(json_encode($data)),
        ]);
        
        return true;
    }


    /**
     * 获取路由
     */
    protected function getUrl($uri)
    {
        return sprintf('%s%s', $this->url, $uri);
    }


    protected function setError($error)
    {
        $this->error = $error;
    }

    /**
     * 获取错误信息
     */
    public function getError()
    {
        return $this->error;
    }
}
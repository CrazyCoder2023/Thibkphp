<?php

use think\facade\Env;

return [
	//设置endpoint 默认公网，同区ECS可使用内网地址流量免费
    'endpoint'      => Env::get('OSS_ENDPOINT'),
    //推荐使用子用户access key
    'accessKeyId'  => '80054b2251d24cb98eda994c93426d7d',
    'accessKeySecret'  => '46730f2b54b376bdb79304e8ceae1b36',
	//默认Bucket 实际业务可能用到多个BUCKET
    'bucket'  => [
    	'default' => '',#默认
    	'custom' => '',#自定义
    ],

];

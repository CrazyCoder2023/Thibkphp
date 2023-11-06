<?php

use think\facade\Env;

return [
	//设置endpoint 默认公网，同区ECS可使用内网地址流量免费
    'endpoint'      => Env::get('OSS_ENDPOINT'),
    //推荐使用子用户access key
    'accessKeyId'  => 'LTAI5t5diynWhPRs6QgL3DkX',
    'accessKeySecret'  => 'U4VcTgQWEQh7CVBpchhbgy6bujne4u',
	//默认Bucket 实际业务可能用到多个BUCKET
    'bucket'  => [
    	'default' => '',#默认
    	'custom' => '',#自定义
    ],

];

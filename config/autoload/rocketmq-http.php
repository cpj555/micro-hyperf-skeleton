<?php

declare(strict_types=1);

use function Hyperf\Support\env;

return [
    'host' => env('ROCKETMQ_HTTP_HOST','http://1988459431884100.mqrest.cn-hangzhou.aliyuncs.com'),
    'access_key_id' => env('ROCKETMQ_HTTP_ACCESS_KEY_ID','LTAI5tP66Nc8UizQhhniFgTP'),
    'access_key_secret' => env('ROCKET_MQ_HTTP_ACCESS_KEY_SECRET','6hiKZvaBv9LY9hb2aYNHQaLh2CIZeT'),
    'instance_id' => env('ROCKET_MQ_HTTP_INSTANCE_ID','MQ_INST_1988459431884100_BY4moISm'),
    'concurrent' => [
        'limit' => 15,
    ],
];

<?php

declare(strict_types=1);

use Losingbattle\MicroBase\Constants\Env;
use Losingbattle\MicroBase\Rewrite\RotatingHourFileHandler;
use Losingbattle\MicroBase\Rewrite\SizeFileHandler;
use Losingbattle\MicroBase\TraceId\Formatter\TraceIdContextFormatter;
use Losingbattle\MicroBase\TraceId\Formatter\TraceIdFormatter;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Handler\StreamHandler;
use function Hyperf\Support\env;
use function Hyperf\Support\value;

$logPath = env('LOGPATH', BASE_PATH . '/runtime/logs');


[$handler, $formatterClass] = value(function () {
    switch (env('ENV', Env::LOCAL)) {
        case Env::PROD:
            return [RotatingHourFileHandler::class,  TraceIdFormatter::class];
        case Env::LOCAL:
        case Env::QA:
        case Env::PRE:
        case Env::STRESS:
        default:
            return [StreamHandler::class, TraceIdFormatter::class];
    }
});

function getConstructorKey($handler): string
{
    switch ($handler) {
        case RotatingFileHandler::class:
        case RotatingHourFileHandler::class: //按小时切割  maxfiles
        case SizeFileHandler::class: //按50m大小切割  按需选择
            return 'filename';
        default:
            return 'stream';
    }
}

$businessLogger = value(function () use ($handler, $logPath, $formatterClass) {
    $files = [
        'default' => logname('/%app_name%request.log'),
        'exception' => logname('/%app_name%exception.log'),
        'http_client' => logname('/%app_name%http_client.log'),
        'rpc_client' => logname('/%app_name%rpc_client.log'),
        'rocketmq-http' => logname('/%app_name%rocketmq-http.log'),
        'system' => logname('/%app_name%system.log'),
    ];

    $logger = [];
    foreach ($files as $key => $file) {
        $logger[$key] = [
            'handler' => [
                'class' => $handler,
                'constructor' => [
                    value(getConstructorKey($handler)) => $logPath . $file,
                    'level' => Monolog\Logger::INFO,
                ],
            ],
            'formatter' => [
                'class' => $formatterClass,
                'constructor' => [
                    'format' => null,
                    'dateFormat' => 'Y-m-d H:i:s.u',
                    'ignoreEmptyContextAndExtra' => true,
                    'allowInlineLineBreaks' => false,
                ],
            ],
        ];
    }
    return $logger;
});

$traceIdContextLogger = value(function () use ($handler, $logPath) {
    $files = [
        'redis' => logname('/%app_name%redis.log'),
    ];

    $logger = [];
    foreach ($files as $key => $file) {
        $logger[$key] = [
            'handler' => [
                'class' => $handler,
                'constructor' => [
                    value(getConstructorKey($handler)) => $logPath . $file,
                    'level' => Monolog\Logger::INFO,
                ],
            ],
            'formatter' => [
                'class' => TraceIdContextFormatter::class,
                'constructor' => [
                    'format' => null,
                    'dateFormat' => 'Y-m-d H:i:s.u',
                    'ignoreEmptyContextAndExtra' => true,
                    'allowInlineLineBreaks' => false,
                ],
            ],
        ];
    }
    return $logger;
});

return array_merge($traceIdContextLogger, $businessLogger);

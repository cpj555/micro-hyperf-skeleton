<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
return [
    \Losingbattle\MicroBase\Listener\HttpServerOnRequestListener::class, //http_server请求过程监听 视自身服务情况添加
    Hyperf\ExceptionHandler\Listener\ErrorExceptionHandler::class,
    Hyperf\Command\Listener\FailToHandleListener::class,
    \Losingbattle\MicroBase\Listener\ExceptionListener::class,
    \Losingbattle\RocketMqHttp\Listener\ConsumeListener::class,

];

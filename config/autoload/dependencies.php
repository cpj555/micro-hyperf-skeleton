<?php

declare(strict_types=1);


use Losingbattle\RocketMqHttp\Contract\ConsumerLoggerInterface;
use Losingbattle\RocketMqHttp\Contract\LoggerInterface;

return [
    \Hyperf\Contract\StdoutLoggerInterface::class => \Losingbattle\MicroBase\Rewrite\StdoutLoggerFactory::class,
    ConsumerLoggerInterface::class => \Losingbattle\MicroBase\Rewrite\StdoutLoggerFactory::class,
];

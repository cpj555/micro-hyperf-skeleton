<?php

declare(strict_types=1);


namespace App\RocketMqHttp\Consumer\MessageData;

use Hyperf\Collection\Collection;

class OrderSubmitData extends Collection
{
    public function getOrderNo()
    {
        return $this->get('order_no');
    }
}

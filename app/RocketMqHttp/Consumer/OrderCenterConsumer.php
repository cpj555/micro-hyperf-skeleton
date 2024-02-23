<?php

namespace App\RocketMqHttp\Consumer;


use Losingbattle\RocketMqHttp\Annotation\Consumer;
use App\RocketMqHttp\Consumer\MessageData\OrderCloseData;
use App\RocketMqHttp\Consumer\MessageData\OrderSubmitData;
use Losingbattle\RocketMqHttp\Message\ConsumerMessage;
use Losingbattle\RocketMqHttp\Result;


#[Consumer(topic: "order_center_normal_topic", groupId: "GID_order_center_status_change", numOfMessages: 16, waitSeconds: 5)]
class OrderCenterConsumer extends ConsumerMessage
{
    public function __construct()
    {
        $this->registerRoute('order_submit', [$this, 'orderSubmit']);
        $this->registerRoute('order_close', [$this, 'orderClose']);
    }

    public function isEnable(): bool
    {
        return true;
    }

    public function orderSubmit(OrderSubmitData $orderSubmitData): string
    {
        return Result::ACK;
    }

    public function orderClose(OrderCloseData $orderCloseData): string
    {
        return Result::ACK;
    }

    public function orderStatus(array $data)
    {
    }
}
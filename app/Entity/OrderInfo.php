<?php

declare(strict_types=1);

namespace App\Entity;



/**
 * @property int $id 
 * @property string $tenant_id 
 * @property int $member_id 
 * @property string $order_no 
 * @property int $order_type 
 * @property int $order_amount 
 * @property int $order_number 
 * @property int $coupon_id 
 * @property int $coupon_amount 
 * @property int $activity_id 
 * @property int $activity_amount 
 * @property int $pay_amount 
 * @property int $order_status 
 * @property string $pay_time 
 * @property string $detail 
 * @property string $province 
 * @property string $city 
 * @property string $district 
 * @property string $consignee 
 * @property string $address 
 * @property string $mobile 
 * @property int $out_order_number 
 * @property int $refund_order_number 
 * @property int $refund_order_amount 
 * @property int $unfilled_refund_order_number 
 * @property int $unfilled_refund_order_amount 
 * @property string $created_at 
 * @property string $updated_at 
 */
class OrderInfo extends \Losingbattle\MicroBase\Model\BaseModel
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'order_info';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'member_id' => 'integer', 'order_type' => 'integer', 'order_amount' => 'integer', 'order_number' => 'integer', 'coupon_id' => 'integer', 'coupon_amount' => 'integer', 'activity_id' => 'integer', 'activity_amount' => 'integer', 'pay_amount' => 'integer', 'order_status' => 'integer', 'out_order_number' => 'integer', 'refund_order_number' => 'integer', 'refund_order_amount' => 'integer', 'unfilled_refund_order_number' => 'integer', 'unfilled_refund_order_amount' => 'integer'];
}

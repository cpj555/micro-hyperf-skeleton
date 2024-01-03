<?php

declare(strict_types=1);

namespace App\Entity;



/**
 * @property int $id 
 * @property int $order_id 
 * @property int $sku_id 
 * @property string $material_name 
 * @property int $material_price 
 * @property int $discount_price 
 * @property string $material_thumb 
 * @property int $material_number 
 * @property int $out_material_number 
 * @property int $refund_material_number 
 * @property int $unfilled_refund_material_number 
 * @property int $is_gift 
 * @property int $order_status 
 * @property string $created_at 
 * @property string $updated_at 
 */
class OrderDetail extends \Losingbattle\MicroBase\Model\BaseModel
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'order_detail';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'order_id' => 'integer', 'sku_id' => 'integer', 'material_price' => 'integer', 'discount_price' => 'integer', 'material_number' => 'integer', 'out_material_number' => 'integer', 'refund_material_number' => 'integer', 'unfilled_refund_material_number' => 'integer', 'is_gift' => 'integer', 'order_status' => 'integer'];
}

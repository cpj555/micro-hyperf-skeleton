<?php

declare(strict_types=1);

namespace App\Entity;



/**
 * @property int $id 
 * @property string $tenant_id 
 * @property int $material_base_id 
 * @property string $name 
 * @property string $sku_code 
 * @property string $attr 
 * @property int $base_price 
 * @property int $sell_price 
 * @property string $thumb 
 * @property int $status 
 * @property string $created_at 
 * @property string $updated_at 
 */
class MaterialSku extends \Losingbattle\MicroBase\Model\BaseModel
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'material_sku';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'material_base_id' => 'integer', 'base_price' => 'integer', 'sell_price' => 'integer', 'status' => 'integer'];
}

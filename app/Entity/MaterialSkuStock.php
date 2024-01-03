<?php

declare(strict_types=1);

namespace App\Entity;



/**
 * @property int $id 
 * @property string $tenant_id 
 * @property int $material_base_id 
 * @property int $material_sku_id 
 * @property int $stock 
 * @property int $lock_stock 
 * @property string $created_at 
 * @property string $updated_at 
 */
class MaterialSkuStock extends \Losingbattle\MicroBase\Model\BaseModel
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'material_sku_stock';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'material_base_id' => 'integer', 'material_sku_id' => 'integer', 'stock' => 'integer', 'lock_stock' => 'integer'];
}

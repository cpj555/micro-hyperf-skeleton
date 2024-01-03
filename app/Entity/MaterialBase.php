<?php

declare(strict_types=1);

namespace App\Entity;



/**
 * @property int $id 
 * @property string $tenant_id 
 * @property string $name 
 * @property int $category_id 
 * @property string $material_code 
 * @property int $base_price 
 * @property string $introduction 
 * @property string $thumb 
 * @property string $text 
 * @property int $status 
 * @property int $sequence 
 * @property string $created_at 
 * @property string $updated_at 
 */
class MaterialBase extends \Losingbattle\MicroBase\Model\BaseModel
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'material_base';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'category_id' => 'integer', 'base_price' => 'integer', 'status' => 'integer', 'sequence' => 'integer'];
}

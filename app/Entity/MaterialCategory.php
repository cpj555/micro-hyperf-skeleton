<?php

declare(strict_types=1);

namespace App\Entity;



/**
 * @property int $id 
 * @property string $tenant_id 
 * @property int $pid 
 * @property string $name 
 * @property string $thumb 
 * @property string $memo 
 * @property int $status 
 * @property int $sequence 
 * @property int $creator 
 * @property string $created_at 
 * @property string $updated_at 
 */
class MaterialCategory extends \Losingbattle\MicroBase\Model\BaseModel
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'material_category';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'pid' => 'integer', 'status' => 'integer', 'sequence' => 'integer', 'creator' => 'integer'];
}

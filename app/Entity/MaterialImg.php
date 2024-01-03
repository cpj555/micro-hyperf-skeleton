<?php

declare(strict_types=1);

namespace App\Entity;



/**
 * @property int $id 
 * @property int $material_base_id 
 * @property string $img 
 * @property int $position 
 * @property int $sequence 
 * @property int $status 
 * @property string $created_at 
 * @property string $updated_at 
 */
class MaterialImg extends \Losingbattle\MicroBase\Model\BaseModel
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'material_img';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'material_base_id' => 'integer', 'position' => 'integer', 'sequence' => 'integer', 'status' => 'integer'];
}

<?php

declare(strict_types=1);

namespace App\Entity;



/**
 * @property int $id 
 * @property string $tenant_id 
 * @property int $attr_base_id 
 * @property string $thumb 
 * @property string $value 
 * @property string $created_at 
 * @property string $updated_at 
 */
class AttrBaseValue extends \Losingbattle\MicroBase\Model\BaseModel
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'attr_base_value';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'attr_base_id' => 'integer'];
}

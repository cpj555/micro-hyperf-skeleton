<?php

declare(strict_types=1);

namespace App\Entity;



/**
 * @property int $id 
 * @property string $created_at 
 * @property string $updated_at 
 * @property string $name 
 * @property int $sequence 
 * @property string $memo 
 * @property int $status 
 * @property int $creator 
 */
class Role extends \Losingbattle\MicroBase\Model\BaseModel
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'role';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'sequence' => 'integer', 'status' => 'integer', 'creator' => 'integer'];
}

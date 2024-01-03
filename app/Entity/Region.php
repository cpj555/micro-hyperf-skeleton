<?php

declare(strict_types=1);

namespace App\Entity;



/**
 * @property int $id 
 * @property int $pid 
 * @property string $code 
 * @property string $name 
 * @property string $remark 
 * @property int $status 
 * @property string $center 
 * @property int $level 
 * @property string $created_at 
 * @property string $updated_at 
 */
class Region extends \Losingbattle\MicroBase\Model\BaseModel
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'region';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'pid' => 'integer', 'status' => 'integer', 'level' => 'integer'];
}

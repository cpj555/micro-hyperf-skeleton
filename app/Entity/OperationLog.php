<?php

declare(strict_types=1);

namespace App\Entity;



/**
 * @property int $id 
 * @property int $operator_id 
 * @property string $method 
 * @property string $path 
 * @property string $created_at 
 * @property string $updated_at 
 */
class OperationLog extends \Losingbattle\MicroBase\Model\BaseModel
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'operation_log';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'operator_id' => 'integer'];
}

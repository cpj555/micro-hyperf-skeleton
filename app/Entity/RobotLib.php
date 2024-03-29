<?php

declare(strict_types=1);

namespace App\Entity;



/**
 * @property int $id 
 * @property string $nickname 
 * @property string $avatar 
 * @property string $created_at 
 * @property string $updated_at 
 */
class RobotLib extends \Losingbattle\MicroBase\Model\BaseModel
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'robot_lib';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer'];
}

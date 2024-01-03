<?php

declare(strict_types=1);

namespace App\Entity;



/**
 * @property int $id 
 * @property string $created_at 
 * @property string $updated_at 
 * @property string $name 
 * @property string $thumb 
 * @property string $nickname 
 * @property string $password 
 * @property string $email 
 * @property string $phone 
 * @property int $status 
 * @property int $creator 
 */
class User extends \Losingbattle\MicroBase\Model\BaseModel
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'user';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'status' => 'integer', 'creator' => 'integer'];
}

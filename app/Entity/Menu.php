<?php

declare(strict_types=1);

namespace App\Entity;



/**
 * @property int $id 
 * @property string $created_at 
 * @property string $updated_at 
 * @property string $name 
 * @property string $icon 
 * @property string $router 
 * @property int $parent_id 
 * @property string $parent_path 
 * @property int $is_show 
 * @property int $status 
 * @property int $sequence 
 * @property string $memo 
 * @property int $creator 
 */
class Menu extends \Losingbattle\MicroBase\Model\BaseModel
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'menu';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'parent_id' => 'integer', 'is_show' => 'integer', 'status' => 'integer', 'sequence' => 'integer', 'creator' => 'integer'];
}

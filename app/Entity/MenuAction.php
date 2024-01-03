<?php

declare(strict_types=1);

namespace App\Entity;



/**
 * @property int $id 
 * @property string $created_at 
 * @property string $updated_at 
 * @property int $menu_id 
 * @property string $code 
 * @property string $name 
 */
class MenuAction extends \Losingbattle\MicroBase\Model\BaseModel
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'menu_action';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'menu_id' => 'integer'];
}

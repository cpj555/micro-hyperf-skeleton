<?php

declare(strict_types=1);

namespace App\Entity;



/**
 * @property int $id 
 * @property int $member_id 
 * @property int $sku_id 
 * @property int $number 
 * @property string $created_at 
 * @property string $updated_at 
 */
class MemberCart extends \Losingbattle\MicroBase\Model\BaseModel
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'member_cart';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'member_id' => 'integer', 'sku_id' => 'integer', 'number' => 'integer'];
}

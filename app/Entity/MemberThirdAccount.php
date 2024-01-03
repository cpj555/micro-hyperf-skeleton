<?php

declare(strict_types=1);

namespace App\Entity;



/**
 * @property int $id 
 * @property string $created_at 
 * @property string $updated_at 
 * @property string $third_platform_id 
 * @property int $member_id 
 * @property string $third_unique_account 
 * @property string $third_union_id 
 * @property string $extend_json 
 */
class MemberThirdAccount extends \Losingbattle\MicroBase\Model\BaseModel
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'member_third_account';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'member_id' => 'integer'];
}

<?php

declare(strict_types=1);

namespace App\Entity;



/**
 * @property int $id 
 * @property string $created_at 
 * @property string $updated_at 
 * @property int $member_id 
 * @property int $money 
 * @property int $lock_monty 
 * @property int $integral 
 * @property int $lock_integral 
 */
class MemberFund extends \Losingbattle\MicroBase\Model\BaseModel
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'member_fund';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'member_id' => 'integer', 'money' => 'integer', 'lock_monty' => 'integer', 'integral' => 'integer', 'lock_integral' => 'integer'];
}

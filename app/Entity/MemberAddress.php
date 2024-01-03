<?php

declare(strict_types=1);

namespace App\Entity;



/**
 * @property int $id 
 * @property int $member_id 
 * @property string $contact_person 
 * @property string $contact_phone 
 * @property int $province_id 
 * @property int $city_id 
 * @property int $district_id 
 * @property string $address 
 * @property int $is_default 
 * @property string $created_at 
 * @property string $updated_at 
 */
class MemberAddress extends \Losingbattle\MicroBase\Model\BaseModel
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'member_address';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'member_id' => 'integer', 'province_id' => 'integer', 'city_id' => 'integer', 'district_id' => 'integer', 'is_default' => 'integer'];
}

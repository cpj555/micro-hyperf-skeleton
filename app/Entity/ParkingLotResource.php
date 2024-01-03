<?php

declare(strict_types=1);

namespace App\Entity;



/**
 * @property int $id 
 * @property string $created_at 
 * @property string $updated_at 
 * @property string $province_code 
 * @property string $city_code 
 * @property string $district_code 
 * @property string $name 
 * @property string $img 
 * @property int $status 
 * @property string $latitude 
 * @property string $longitude 
 * @property string $memo 
 * @property int $creator 
 */
class ParkingLotResource extends \Losingbattle\MicroBase\Model\BaseModel
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'parking_lot_resource';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'status' => 'integer', 'creator' => 'integer'];
}

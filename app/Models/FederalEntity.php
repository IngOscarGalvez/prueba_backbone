<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Model FederalEntity
 * 
 * @package App\Models
 */
class FederalEntity extends Model
{
    use HasFactory;

    /**
     * The attribute that hidden or show the timestamps
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'key',
        'name',
        'code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id'
    ];

    /**
     * Federal entity has many municipalities
     *
     * @return HasMany
     */
    public function municipalities(): HasMany
    {
        return $this->hasMany(Municipality::class);
    }

    /**
     * Federal entity has many zip codes
     *
     * @return HasMany
     */
    public function zipCode(): HasMany
    {
        return $this->hasMany(ZipCode::class);
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Model Municipality
 * 
 * @package App\Models
 */

class Municipality extends Model
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
        'federal_entity_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
        'federal_entity_id'
    ];

    /**
     * Municipality has many zip codes
     *
     * @return HasMany
     */
    public function zipCodes(): HasMany
    {
        return $this->hasMany(ZipCode::class);
    }

    /**
     * Municipality belogs to a federal entity
     *
     * @return BelongsTo
     */
    public function federalEntity(): BelongsTo
    {
        return $this->belongsTo(FederalEntity::class);
    }

}

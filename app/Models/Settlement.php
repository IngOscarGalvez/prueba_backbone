<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Model Settlement
 * 
 * @package App\Models
 */
class Settlement extends Model
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
        'zip_code_id',
        'settlement_type_id',
        'key',
        'name',
        'zone_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
        'zip_code_id',
        'settlement_type_id'
    ];

    /**
     * Settlement belogs to a zip code
     *
     * @return BelongsTo
     */
    public function zipCode(): BelongsTo
    {
        return $this->belongsTo(ZipCode::class);
    }
  
    /**
     * Settlement belogs to a settlement type
     *
     * @return BelongsTo
     */
    public function settlementType(): BelongsTo
    {
        return $this->belongsTo(SettlementType::class, 'settlement_type_id', 'key');
    }

}

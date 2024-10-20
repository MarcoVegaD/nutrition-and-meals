<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Ingredient extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'amount',
        'measurement_id',
        'food_group_id',
        'user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'measurement_id',
        'food_group_id',
        'user_id',
        'updated_at',
    ];

    /**
     * The attributes casted by specific types
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime:m/d/Y G:i',
    ];

    /**
     * Relationships.
     */
    public function FoodGroups(): BelongsTo
    {
        return $this->belongsTo(FoodGroup::class);
    }

    public function Measurement(): HasOne
    {
        return $this->hasOne(Measurement::class);
    }
}

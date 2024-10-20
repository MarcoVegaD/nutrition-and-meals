<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FoodGroup extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
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
    public function Ingredients(): HasMany
    {
        return $this->hasMany(Ingredient::class);
    }

}

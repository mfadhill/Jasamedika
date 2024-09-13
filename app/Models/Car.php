<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'plate_number',
        'daily_rate',
        'available',
        'user_id'
    ];

    public function rentals(): HasMany
    {
        return $this->hasMany(Rental::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

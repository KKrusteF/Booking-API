<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'check_in_date',
        'check_out_date',
        'total_price',
        'room_id',
        'customer_id',
    ];

    public function room(): BelongsTo
    {
        return $this->belongsto(Room::class);
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    protected function casts()
    {
        return [
            'check_in_date' => 'datetime',
            'check_out_date' => 'datetime',
        ];
    }
}

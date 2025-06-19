<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = [
        'name',
        'description',
        'direction_id',
        'type',
        'price',
    ];

    public function tour_dates()
    {
        return $this->hasMany(TourDate::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function direction()
    {
        return $this->belongsTo(Direction::class);
    }
}

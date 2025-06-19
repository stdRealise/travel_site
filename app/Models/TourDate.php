<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourDate extends Model
{
    protected $fillable = [
        'tour_id',
        'start_date',
        'end_date',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

    public function user_tours()
    {
        return $this->hasMany(UserTour::class);
    }
}

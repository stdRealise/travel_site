<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserTour extends Model
{
    protected $fillable = [
        'user_id',
        'tour_date_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tour_date()
    {
        return $this->belongsTo(TourDate::class);
    }
}

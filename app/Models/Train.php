<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',
        'departure_station',
        'arrival_station',
        'departure_time',
        'arrival_time',
        'train_code',
        'coach_number',
        'on_time',
        'cancelled',
    ];

    public function getDepartingTrains()
    {
        $today = now()->format('Y-m-d');
    return $this->whereDate('departure_time', $today)->get();
    }
}

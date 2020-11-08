<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{

    public $table = 'vehicles';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'car_plate',
        'manufacturer',
        'model',
        'variant',
        'color',
        'rider_id',
        'body_type'
    ];

    const BODY_TYPE_SELECT = [
        'Sedan'     => 'Sedan',
        'Van'       => 'Van',
        'Hatchback' => 'Hatchback',
        'MPV'       => 'MPV',
        'SUV'       => 'SUV',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}

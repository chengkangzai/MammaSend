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

    const COLOR_SELECT = [
        'White'             => 'White',
        'Black'             => 'Black',
        'Sliver'            => 'Sliver',
        'Grey'              => 'Grey',
        'Red'               => 'Red',
        'Blue'              => 'Blue',
        'Gold'              => 'Gold',
        'Orange'            => 'Orange',
        'Purple'            => 'Purple',
        'Maroon'            => 'Maroon',
        'Yellow'            => 'Yellow',
        'Green'             => 'Green',
    ];

    const MANUFACTURER_SELECT = [
        'BMW'                       => 'BMW',
        'Honda'                     => 'Honda',
        'Mercedes-Benz'             => 'Mercedes-Benz',
        'Nissan'                    => 'Nissan',
        'Perodua'                   => 'Perodua',
        'Porche'                    => 'Porche',
        'Proton'                    => 'Proton',
        'Toyota'                    => 'Toyota',
        'Ford'                      => 'Ford',
        'Hyundai'                   => 'Hyundai',
        'Kia'                       => 'Kia',
        'Lexus'                     => 'Lexus',
        'Mazda'                     => 'Mazda',
        'Mitsubishi'                => 'Mitsubishi',
        'Volkswagan'                => 'Volkswagan',
    ];


    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}

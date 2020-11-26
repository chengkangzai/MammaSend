<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ride extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'rides';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'price',
        'rider_id',
        'pickup_address_id',
        'dropoff_address_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function rider()
    {
        return $this->belongsTo(User::class, 'rider_id');
    }

    public function pickup_address()
    {
        return $this->hasOne(Address::class, 'pickup_address_id');
    }

    public function dropoff_address()
    {
        return $this->hasOne(Address::class, 'dropoff_address_id');
    }

}

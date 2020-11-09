<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Children extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'children';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public $fillable = [
        'full_name',
        'IC_number',
        'school_name',
        'pickup_address_id',
        'dropoff_address_id',
    ];


    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
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

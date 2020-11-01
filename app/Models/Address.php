<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'addresses';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'street',
        'city',
        'state',
        'zip_code',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const STATE_SELECT = [
        'Johor'           => 'Johor',
        'Kedah'           => 'Kedah',
        'Kelantan'        => 'Kelantan',
        'Melacca'         => 'Melacca',
        'Negeri Sembilan' => 'Negeri Sembilan',
        'Pahang'          => 'Pahang',
        'Penang'          => 'Penang',
        'Perak'           => 'Perak',
        'Perlis'          => 'Perlis',
        'Sabah'           => 'Sabah',
        'Sarawak'         => 'Sarawak',
        'Selangor'        => 'Selangor',
        'Terangganu'      => 'Terangganu',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}

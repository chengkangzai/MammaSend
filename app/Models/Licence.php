<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'riders_licence';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'start_date',
        'end_date'
    ];

    protected $fillable = [
        'class',
        'start_date',
        'start_date',
        'end_date',
        'IC_number',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const CLASS_SELECT = [
        'A'             => 'A',
        'A1'            => 'A1',
        'B'             => 'B',
        'B1'            => 'B1',
        'B2'            => 'B2',
        'C'             => 'C',
        'D'             => 'D',
        'DA'            => 'DA',
        'E'             => 'E',
        'E1'            => 'E1',
        'E2'            => 'E2',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}

<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'payments';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'ride_id',
        'rider_received',
        'office_received',
        'method',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const METHOD_SELECT=[
        'card' => "Credit Card",
        'Cash w/ Driver' => 'Cash by Driver',
        'Cash w/ Office' => 'Cash by Office',
        'Bank in' => 'Back in',
        'Grab' => 'Grab',
        'TnG' => 'TnG E-Wallet',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function rides()
    {
        return $this->belongsTo(Ride::class, 'ride_id');
    }
}

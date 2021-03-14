<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $fillable = [
        'houseName',
        'kindsOfHouse',
        'rentingPrice',
        'address',
        'rentalDate',
        'homeReturnDate',
        'homeInfomation',
        'image',
        'status',
        'customer_id'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }
}

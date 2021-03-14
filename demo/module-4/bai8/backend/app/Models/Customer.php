<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dob',
        'address',
        'phone',
        'image',
    ];

    public function order()
    {
        return $this->hasMany('App\Models\Order');
    }
}

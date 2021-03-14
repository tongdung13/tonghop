<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'orderCode',
        'orderName',
        'orderDate',
        'price',
        'description'
    ];

    public function customer()
    {
        return $this->hasMany('App\Models\Customer');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'address',
        'phone',
        'image'
    ];

    public function home()
    {
        return $this->hasMany('App\Models\Home');
    }
}

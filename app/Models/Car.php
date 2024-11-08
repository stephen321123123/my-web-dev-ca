<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'release_year',
        'engine_size',
        'transmission_type',
        'colour',
        'registration_year',
        'created_at',
        'updated_at',
    ];
}

//The POST method is not supported for route cars/[%7B%20$action%20%7D%7D. Supported methods: GET, HEAD. 

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'email',
        'address',
        'gender',
        'phone',
        'date_of_birth'

    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributors extends Model
{
    use HasFactory;

    protected $table = 'distributors';

    protected $fillable = [
        'name',
        'city',
        'region',
        'country',
        'phone',
        'email',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bean extends Model
{
    use HasFactory;

    protected $table = 'bean';

    protected $fillable = [
        'name',
        'description',
        'price'
    ];

    public function daily_bean(){
        return $this->hasOne(Daily_bean::class, 'bean_id');
    }
}

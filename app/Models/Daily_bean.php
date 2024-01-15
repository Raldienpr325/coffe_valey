<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daily_bean extends Model
{
    use HasFactory;

    protected $table = 'daily_bean';

    protected $fillable = [
        'bean_id',
        'sale_price',
    ];

    public function bean(){
        return $this->belongsTo(Bean::class,'bean_id');
    }
}

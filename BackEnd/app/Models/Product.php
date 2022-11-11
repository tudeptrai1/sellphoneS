<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table= 'products';
    protected $fillable = [
        'pg_id',
        'color_id',
        'memory_id',
        'imp_price',
        'sell_price',
        'description',
        'amount',
        'status',
        'discount_id',
    ];


}

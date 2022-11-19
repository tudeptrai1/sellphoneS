<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'name',
        'pg_id',
        'color_id',
        'memory_id',
        'imp_price',
        'sell_price',
        'amount',
        'status',
        'discount_id',
    ];
    public function discount()
    {
        return $this->hasOneThrough(
            Discount::class,
                DiscountDetail::class,
            'discount_id', // Khóa ngoại của bảng trung gian user
            'discount_id', // Khóa ngoại của bảng chúng ta muốn truy cập đến
            'id', // Khóa mà chúng ta muốn liên kết ở bảng supplier
            'id' // Khóa mà chúng ta muốn liên kết ở bảng user
        );
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

}

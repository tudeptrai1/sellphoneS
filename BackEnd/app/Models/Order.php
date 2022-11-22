<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Order extends Model
{
    use HasFactory;
    public function User(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function Date()
    {
        return Carbon::parse($this->attributes['ordered_date'])->toFormattedDateString();
    }
    public function Detail(){
        return $this->hasMany(OrderDetail::class, 'order_id');

    }
}

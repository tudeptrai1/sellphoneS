<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Order extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table= 'orders';
    protected $fillable = [
        'user_id',
        'payment_method',
        'payment_id',
        'ordered_date',
        'status'

    ];
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
    public function Address(){
        return $this->hasOne(UserAddress::class, 'order_id');

    }
    public function abc(){
        return ($this->Address->detail.', '.$this->Address->ward.', '.$this->Address->district.', '.$this->Address->province);
}
}

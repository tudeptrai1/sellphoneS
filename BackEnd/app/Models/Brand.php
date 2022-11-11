<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table= 'brands';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
    ];



    public function status(){
     return ($this->attributes['status'] === 1)? 'Active' : 'Inactive';
    }
}

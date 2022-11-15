<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGroup extends Model
{
    use HasFactory;
    protected $table= 'product_groups';
    protected $fillable = [
        'name',
        'brand_id',
        'description',
        'trending',
    ];

    public function PGImage(){
        return $this->hasMany(Image::class,'pg_id','color_id','image');
    }
}

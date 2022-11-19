<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGroup extends Model
{
    use HasFactory;

    protected $table = 'product_groups';
    protected $fillable = [
        'name',
        'brand_id',
        'description',
        'trending',
    ];

    public function images()
    {
        return $this->hasMany(
            Image::class,
            'pg_id','id'
        );
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function product(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function tech_spec()
    {
        return $this->hasManyThrough(
            TechSpecDetail::class,
            ProductGroup::class,
            'id', // Foreign key on the environments table...
            'pg_id');// Local key on the environments table...
    }

}

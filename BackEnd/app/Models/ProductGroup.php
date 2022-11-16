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

    public function image1(){
        return $this->hasManyThrough(
            Image::class,
            ProductGroup::class,
            'id', // Foreign key on the environments table...
            'pg_id', // Foreign key on the deployments table...
            'id', // Local key on the projects table...
            'id',);// Local key on the environments table...
    }
    public function product(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Product::class);
    }
    public function tech_spec(){
        return $this->hasManyThrough(
            TechSpecDetail::class,
            ProductGroup::class,
            'id', // Foreign key on the environments table...
            'pg_id');// Local key on the environments table...
    }
}

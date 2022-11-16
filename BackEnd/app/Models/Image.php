<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table= 'images';
    protected $fillable = [
        'pg_id',
        'color_id',
        'image',
    ];

    public function ProductGroup()
    {
        return $this->belongsTo(ProductGroup::class, 'pg_id',);
    }
}

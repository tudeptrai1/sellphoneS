<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $table= 'colors';
    protected $fillable = [
        'name',

    ];
    public function Image(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Image::class,'color_id');
    }
}

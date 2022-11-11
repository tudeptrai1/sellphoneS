<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechSpec extends Model
{
    use HasFactory;
    protected $table = 'tech_specs';
    protected $fillable = [
        'name',
    ];
}

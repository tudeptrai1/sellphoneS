<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechSpecDetail extends Model
{
    use HasFactory;
    protected $table = 'tech_spec_details';
    protected $fillable = [
        'tech_id',
        'pg_id',
        'value',

    ];
}

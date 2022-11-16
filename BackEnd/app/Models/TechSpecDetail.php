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
    public function tech_spec(){
        return $this->hasManyThrough(
            TechSpec::class,
            ProductGroup::class,
            'id', // Foreign key on the environments table...
            'pg_id');// Local key on the environments table...
    }
    public function TechSpec()
    {
        return $this->belongsTo(TechSpec::class, 'tech_id',);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public function villages(){
        return $this->hasMany(villages::class);
    }
    public function country(){
        return $this->belongsTo(country::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function cities(){
        return $this->hasMany(City::class);
    }

    public function villages(){
        return $this->hasManyThrough(Village::class,City::class);
    }
}

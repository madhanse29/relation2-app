<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrimeMinister extends Model
{
    use HasFactory;

    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function capital(){
        return $this->hasOne(Capital::class);
    }
}

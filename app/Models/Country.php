<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function prime_minister(){
        return $this->hasOne(PrimeMinister::class);
    }

    public function capital(){
        return $this->hasOneThrough(Capital::class,PrimeMinister::class,'country_id','prime_minister_id');
    }
 

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capital extends Model
{
    use HasFactory;

    public function prime_minister(){
        return $this->belongsTo(PrimeMinister::class);
    }
}

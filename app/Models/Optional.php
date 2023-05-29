<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;
use Illuminate\Support\Str;

class Optional extends Model
{
    use HasFactory;

    public function cars(){
        return $this->belongsToMany(Car::class);
    }
}

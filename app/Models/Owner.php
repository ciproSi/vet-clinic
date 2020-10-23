<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers;
use App\Models\Pet;

class Owner extends Model
{
    use HasFactory;

    public function pets ()
    {
        return $this->hasMany(Pet::class);
    }




}



<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingradient extends Model
{
    use HasFactory;
    public function recipes() {
        return $this->belongsToMany('App\Models\Recipe');
    }
}

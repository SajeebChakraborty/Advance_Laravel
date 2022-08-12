<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    public function reviews() {
        return $this->hasMany('App\Models\Review');
    }

    public function ingradients() {
        return $this->belongsToMany('App\Models\Ingradient');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';

    // Relacion de uno a muchos
    public function posts(){
        return $this->hasMany('App\Models\Post');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table='posts';

    // Relacion de uno a muchos inversa (muchos a uno)
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    // Relacion de uno a muchos inversa (muchos a muchos)   
    public function category(){
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
}

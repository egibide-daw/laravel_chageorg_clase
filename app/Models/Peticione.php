<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Peticione extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'destinatario'];


    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function firmas(){
        return $this->belongsToMany(User::class);
    }

    public function files(){
        return $this->hasMany(File::class);
    }
}

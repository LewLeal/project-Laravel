<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['nombre', 'apellido', 'email','direccion','rut', 'estado', 'perfil_id'];

    public function perfil(){
        return $this->belongsTo('App\Perfile');
    }
}

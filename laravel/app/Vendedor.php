<?php

namespace DonPepe;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table = 'Vendedor';//nombre de la tabla
    protected $fillable = ['nombre', 'apellido', 'activo'];//campos del formulario
    //public $timestamps = false; //si no quiero que se usen timestamps
}

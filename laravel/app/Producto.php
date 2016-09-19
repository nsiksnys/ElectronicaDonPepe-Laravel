<?php

namespace DonPepe;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'Producto';//nombre de la tabla
    protected $fillable = ['nombre', 'precioUnitario'];//campos del formulario
    //public $timestamps = false; //si no quiero que se usen timestamps

/*    public function users()
    {
        return $this->belongsToMany('DonPepe\User');
    }
*/
    public function getTable()
    {
    	return $this->table;
    }
}

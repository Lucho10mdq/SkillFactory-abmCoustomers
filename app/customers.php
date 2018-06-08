<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    protected $datos=['nombre','apellido','dni','direccion',
    'telefono','cuil','nroCliente'];
}

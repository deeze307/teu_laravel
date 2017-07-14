<?php

namespace IAServer\Http\Controllers\Empleos\Model;

use Illuminate\Database\Eloquent\Model;

class EmpleosCategorias extends Model
{
    protected $connection = 'teu';
    protected $table = 'teu.empleos_categorias';
}
